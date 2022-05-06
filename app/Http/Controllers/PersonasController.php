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

class PersonasController extends Controller
{
    public function info(Request $request){
       
        $idat = $request->correo;
        $val=DB::table('formulario')->where('formulario.correo', $idat)->count();
        if($val!=0){
            Session::flash('mensaje','Usuario ya esta registrado!');
        }else{
            $category = new DatosModel();
            $category->nombre = $request->input('nombre');
            $category->empresa = $request->input('empresa');
            $category->cargo = $request->input('cargo');
            $category->correo = $request->input('correo');
            $category->telefono = $request->input('telefono');
            $category->save();
            Session::flash('mensaje','Registro exitoso! Invita a otra persona al evento');
            //consultar en la base de datos 
            //$buscorreo = DB::table('formulario')->where('correo')
            $cors = new EnvioMensaje; //instancia para enviar correos cuando se registre
            Mail::to($idat)->send($cors); //envia mensajes
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
                Mail::to($correos[$i]->correo)->send($cor); //envia mensajes
                
            }
            Session::flash('envio','Envio éxitoso! Gracias por recordar el evento');

        }
        return back();
    }
}
