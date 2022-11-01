<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DatosModel;
use App\Models\Reginicial;
use Maatwebsite\Excel\Facades\Excel;
use App\Mail\Metatalks;
use App\Mail\Mensaje;
use App\Mail\Confirmacion;
use Illuminate\Support\Facades\Mail;
use DB;
use Session;
use App\Exports\UsersExport;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Str;
use Carbon\Carbon;

class PersonasController extends Controller
{
   //index

   public function index(){
      $var=0;
      $m=0;
      return view('welcome')->with('var',$var)->with('m',$m);
   }

    public function info(Request $request){
        //validar correo
        if($request->correo == $request->correocon){

            $fecha = Carbon::now();
            //end integrar api
            $idat = $request->correo;
            $nom = $request->nombre;
            $em = $request->empresa;
            $car = $request->cargo;
            $tel = $request->telefono;
            $gen = $request->genero;
            //guardar los datos en la base 
             //conexion a la Api y base de datos filtrada 
             $grupo = DB::table('grupos')->where("estado", '=', 2)->select('iden')->first();
             $roles = DB::table('roles')->where("estado", '=', 2)->select('idrol')->first();
             // $con = DatosModel::where('correo', $idat)->count();
             //preguntar a la api
             $response = Http::post('https://japi.virtwayevents.com/japi-ted/js/api-user-add', [
                 "auth-key"=> "c3d9aa-f2d855468f39-1367379a8f5a5452ec14",
                 "language" =>"es",
                 "api-user-add" => [
                 "login" => $idat,
                 "password" => "METAVERSOS2022",
                 "firstname" => $nom,
                 "email" => $idat,
                 "gender" => $gen,
                 "country" => "48",
                 "motto" => "",
                 "welcome-email" => "true",
                 "permission-groups" => [$grupo->iden],
                 "permission-roles" => [$roles->idrol],
                 "professional-profile" => [
                 "mobile" => $tel,
                 "company" => $em,
                 "position" => $car,
                 ]
                 ]
             ]);
             $var = $response->json();
             if(isset($var['error']['code'])){
                 $con = DatosModel::where('correo', $idat)->count();
                 if($con!=0){
                     Session::flash('regdup','Este correo ya se encuentra registrado, te invitamos a que revises tu correo (spam) y sigas los pasos enviados.');
                 }else{
                     if($var['error']['code'] == 140){
                         $category = new DatosModel();
                         $category->nombre = $nom;
                         $category->empresa = $em;
                         $category->cargo = $car;
                         $category->correo = $idat;
                         $category->telefono = $tel;
                         $category->genero = $gen;
                         $category->estado = "No reg mundo diferente";
                         $category->save();
                         Session::flash('regex','Gracias por registrarte! En los próximos minutos te llegará un correo con los pasos a seguir.');
                 }else{
                     if($var['error']['code']==141){
                         $category = new DatosModel();
                         $category->nombre = $nom;
                         $category->empresa = $em;
                         $category->cargo = $car;
                         $category->correo = $idat;
                         $category->telefono = $tel;
                         $category->genero = $gen;
                         $category->estado ="No reg mismo metaverso Evolucion";
                         $category->save();
                         Session::flash('regex','Gracias por registrarte! En los próximos minutos te llegará un correo con los pasos a seguir.');
                     }else{
                         if($var['error']['code']==130 || $var['error']['code']==131){
                             Session::flash('regdup', 'Este correo ya se encuentra registrado, te invitamos a que revises tu correo (spam) y sigas los pasos enviados.');
                         }else{
                             $category = new DatosModel();
                             $category->nombre = $nom;
                             $category->empresa = $em;
                             $category->cargo = $car;
                             $category->correo = $idat;
                             $category->telefono = $tel;
                             $category->genero = $gen;
                             $category->estado ="No reg mismo metaverso Evolucion";
                             $category->save();
                             Session::flash('regdup', 'Este correo ya se encuentra registrado, te invitamos a que revises tu correo (spam) y sigas los pasos enviados.');
                         }
                     }
                 }
                 }
                 }else{
                     $category = new DatosModel();
                     $category->nombre = $nom;
                     $category->empresa = $em;
                     $category->cargo = $car;
                     $category->correo = $idat;
                     $category->telefono = $tel;
                     $category->genero = $gen;
                     $category->estado ="Registro exitoso";
                     $category->save();
                     Session::flash('regex','Gracias por registrarte! En los próximos minutos te llegará un correo con los pasos a seguir.');
                     //tareas cron https://captaindroid.com/run-queuework-for-laravel-and-lumen-in-shared-hosting/
                     //https://gist.github.com/davidrushton/b7229df4c73372402fc1
                 }

                 $cors = new Metatalks; //instancia para enviar correos cuando se registre
                 Mail::to($idat)->send($cors); //envia mensaje

        }else{
            
            Session::flash('correodif','El correo de confirmación es diferente, por favor vuelve iniciar el registro.');
            
        }
        return back();
       
    }

    public function exportExcel(){
        return Excel::download(new UsersExport, 'listado.xlsx');
    }

    public function recordarevento(){
        $validar=DB::table('formulario')->count();
        if($validar!=0){
            $correos=DB::table('formulario')->select('correo')->get();
        
            for($i = 0, $size = count($correos); $i < $size; ++$i) {
             
                $cor = new Mensaje; //instancia para enviar correos cuando se registre
                Mail::to($correos[$i]->correo)->queue($cor); //envia mensajes
                
            }
            Session::flash('envio','Envio éxitoso! Gracias por recordar el evento');

        }
        return back();
    }


    //confirma el correo electronico y debe guardar los datos limpios en otra tabla
       public function verify($code)
        {
            $user = Reginicial::where('confirmation_code', $code)->first();

            if (!$user)
                return redirect('/');
            
                $user->confirmed = true;
                $user->confirmation_code = null;
                $user->save();
                //seleccionar los datos
                $nom = $user->nombre;
                $idat =$user->correo;
                $gen = $user->genero;
                $emp = $user->empresa;
                $car = $user->cargo;
                $tel = $user->telefono;
                //conexion a la Api y base de datos filtrada 
                $grupo = DB::table('grupos')->where("estado", '=', 2)->select('iden')->first();
                $roles = DB::table('roles')->where("estado", '=', 2)->select('idrol')->first();
                // $con = DatosModel::where('correo', $idat)->count();
                //preguntar a la api
                $response = Http::post('https://japi.virtwayevents.com/japi-ted/js/api-user-add', [
                    "auth-key"=> "c3d9aa-f2d855468f39-1367379a8f5a5452ec14",
                    "language" =>"es",
                    "api-user-add" => [
                    "login" => $idat,
                    "password" => "METAVERSOS2022",
                    "firstname" => $nom,
                    "email" => $idat,
                    "gender" => $gen,
                    "country" => "48",
                    "motto" => "",
                    "welcome-email" => "true",
                    "permission-groups" => [$grupo->iden],
                    "permission-roles" => [$roles->idrol],
                    "professional-profile" => [
                    "mobile" => $tel,
                    "company" => $emp,
                    "position" => $car,
                    ]
                    ]
                ]);
                $var = $response->json();
                if(isset($var['error']['code'])){
                    $con = DatosModel::where('correo', $idat)->count();
                    if($con!=0){
                        Session::flash('regdup','Este correo ya se encuentra registrado, te invitamos a que revises tu correo (spam) y sigas los pasos enviados.');
                    }else{
                        if($var['error']['code'] == 140){
                            $category = new DatosModel();
                            $category->nombre = $nom;
                            $category->empresa = $emp;
                            $category->cargo = $car;
                            $category->correo = $idat;
                            $category->telefono = $tel;
                            $category->genero = $gen;
                            $category->estado = "No reg mundo diferente";
                            $category->save();
                            Session::flash('regex','Gracias por registrarte! En los próximos minutos te llegará un correo con los pasos a seguir.');
                    }else{
                        if($var['error']['code']==141){
                            $category = new DatosModel();
                            $category->nombre = $nom;
                            $category->empresa = $emp;
                            $category->cargo = $car;
                            $category->correo = $idat;
                            $category->telefono = $tel;
                            $category->genero = $gen;
                            $category->estado ="No reg mismo metaverso Evolucion";
                            $category->save();
                            Session::flash('regex','Gracias por registrarte! En los próximos minutos te llegará un correo con los pasos a seguir.');
                        }else{
                            if($var['error']['code']==130 || $var['error']['code']==131){
                                Session::flash('regdup', 'Este correo ya se encuentra registrado, te invitamos a que revises tu correo (spam) y sigas los pasos enviados.');
                            }else{
                                $category = new DatosModel();
                                $category->nombre = $nom;
                                $category->empresa = $emp;
                                $category->cargo = $car;
                                $category->correo = $idat;
                                $category->telefono = $tel;
                                $category->genero = $gen;
                                $category->estado ="No reg mismo metaverso Evolucion";
                                $category->save();
                                Session::flash('regdup', 'Este correo ya se encuentra registrado, te invitamos a que revises tu correo (spam) y sigas los pasos enviados.');
                            }
                        }
                    }
                    }
                    }else{
                        $category = new DatosModel();
                        $category->nombre = $nom;
                        $category->empresa = $emp;
                        $category->cargo = $car;
                        $category->correo = $idat;
                        $category->telefono = $tel;
                        $category->genero = $gen;
                        $category->estado ="Registro exitoso";
                        $category->save();
                        Session::flash('regex','Gracias por registrarte! En los próximos minutos te llegará un correo con los pasos a seguir.');
                        //tareas cron https://captaindroid.com/run-queuework-for-laravel-and-lumen-in-shared-hosting/
                        //https://gist.github.com/davidrushton/b7229df4c73372402fc1
                    }

                    $cors = new Metatalks; //instancia para enviar correos cuando se registre
                    Mail::to($idat)->send($cors); //envia mensaje
           return back();
        }

        public function confi(){
            return view('confirmarcorreo');
        }
}
