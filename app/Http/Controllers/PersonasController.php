<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DatosModel;
use Maatwebsite\Excel\Facades\Excel;
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
            Session::flash('mensaje','Registro exitoso! Invita a otra persona a registrarse');
        }
        return back();
    }

    public function exportExcel(){
        return Excel::download(new UsersExport, 'listado.xlsx');
    }
}
