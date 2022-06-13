<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DatosModel;
use Maatwebsite\Excel\Facades\Excel;
use App\Mail\EnvioMensaje;
use App\Mail\Mensaje;
use Illuminate\Support\Facades\Mail;
use DB;
use Session;
use App\Exports\UsersExport;
use Illuminate\Support\Facades\Http;

class PersonasController extends Controller
{
   //index

   public function index(){
      $var=0;
      $m=0;
      return view('welcome')->with('var',$var)->with('m',$m);
   }

    /*public function info(Request $request){
        //end integrar api
        $grupo = DB::table('grupos')->where("estado", '=', 2)->select('iden')->first();
        $roles = DB::table('roles')->where("estado", '=', 2)->select('idrol')->first();
        $g=$grupo->iden;
        $r = $roles->idrol;
        $idat = $request->correo;
        $nom = $request->nombre;
        $gen = $request->genero;
        $tel = $request->telefono;
        $em = $request->empresa;
        $car = $request->cargo;
        
        $val=DB::table('formulario')->where('formulario.correo', $idat)->count();
        if($val!=0){
            $var=0;
            $m =1;
            return view('welcome')->with('var', $var)->with('m', $m);
        }else{
            $m=0;
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
                "welcome-email" => "true",
                "permission-groups" => [$g],
                "permission-roles" => [$r],
                "professional-profile" => [
                "mobile" => $tel,
                "company" => $em,
                "position" => $car,
                 ]
                ]
            ]);
            $var = $response->json();
           
            $category = new DatosModel();
            $category->nombre = $request->input('nombre');
            $category->empresa = $request->input('empresa');
            $category->cargo = $request->input('cargo');
            $category->correo = $request->input('correo');
            $category->telefono = $request->input('telefono');
            $category->save();
            //tareas cron https://captaindroid.com/run-queuework-for-laravel-and-lumen-in-shared-hosting/
            //https://gist.github.com/davidrushton/b7229df4c73372402fc1
             $cors = new EnvioMensaje; //instancia para enviar correos cuando se registre
              Mail::to($idat)->send($cors); //envia mensajes
            return view('welcome')->with('var', $var)->with('m', $m);
        }

      
       
    }*/

    public function info(Request $request){
        //end integrar api
        $idat = $request->correo;
        $grupo = DB::table('grupos')->where("estado", '=', 2)->select('iden')->first();
        $roles = DB::table('roles')->where("estado", '=', 2)->select('idrol')->first();
        $con = DatosModel::where('correo', $idat)->count();
        //preguntar a la api
        $response = Http::post('https://japi.virtwayevents.com/japi-ted/js/api-user-add', [
            "auth-key"=> "c3d9aa-f2d855468f39-1367379a8f5a5452ec14",
            "language" =>"es",
            "api-user-add" => [
            "login" => $idat,
            "password" => "METAVERSOS2022",
            "firstname" => $request->nombre,
            "email" => $idat,
            "gender" => $request->genero,
            "country" => "48",
            "motto" => "",
            "welcome-email" => "true",
            "permission-groups" => [$grupo->iden],
            "permission-roles" => [$roles->idrol],
            "professional-profile" => [
            "mobile" => $request->telefono,
            "company" => $request->empresa,
            "position" => $request->cargo,
             ]
            ]
        ]);
        $var = $response->json();
        if(isset($var['error']['code'])){
            $con = DatosModel::where('correo', $idat)->count();
            if($con!=0){
                Session::flash('regdup','Datos duplicados! Usted ya esta registrado.');
                return back();
            }else{
                $category = new DatosModel();
                $category->nombre = $request->input('nombre');
                $category->empresa = $request->input('empresa');
                $category->cargo = $request->input('cargo');
                $category->correo = $request->input('correo');
                $category->telefono = $request->input('telefono');
                $category->estado ="No";
                $category->save();
                Session::flash('regex','Usted se registro exitosamente al evento.');
                return back();
            }
                }else{
                    $category = new DatosModel();
                    $category->nombre = $request->input('nombre');
                    $category->empresa = $request->input('empresa');
                    $category->cargo = $request->input('cargo');
                    $category->correo = $request->input('correo');
                    $category->telefono = $request->input('telefono');
                    $category->estado ="Si";
                    $category->save();
                    //tareas cron https://captaindroid.com/run-queuework-for-laravel-and-lumen-in-shared-hosting/
                    //https://gist.github.com/davidrushton/b7229df4c73372402fc1
                    $cors = new EnvioMensaje; //instancia para enviar correos cuando se registre
                    Mail::to($idat)->send($cors); //envia mensajes
                    Session::flash('regex','Usted se registro exitosamente al evento.');
                    return back();
                }
       
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
                Mail::to($correos[$i]->correo)->send($cor); //envia mensajes
                
            }
            Session::flash('envio','Envio éxitoso! Gracias por recordar el evento');

        }
        return back();
    }
}
