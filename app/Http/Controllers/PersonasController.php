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

    public function info(Request $request){
        //end integrar api
        $grupo = DB::table('grupos')->where("estado", '=', 2)->select('iden')->first();
        $roles = DB::table('roles')->where("estado", '=', 2)->select('idrol')->first();

        $idat = $request->correo;
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
                "login" => $request->correo,
                "password" => "METAVERSOS2022",
                "firstname" => $request->nombre,
                "email" => $request->correo,
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
           
            $category = new DatosModel();
            $category->nombre = $request->input('nombre');
            $category->empresa = $request->input('empresa');
            $category->cargo = $request->input('cargo');
            $category->correo = $request->input('correo');
            $category->telefono = $request->input('telefono');
            $category->save();
            $cors = new EnvioMensaje; //instancia para enviar correos cuando se registre
            Mail::to($idat)->send($cors); //envia mensajes
            return view('welcome')->with('var', $var)->with('m', $m);
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
