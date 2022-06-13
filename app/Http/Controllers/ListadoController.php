<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use App\Models\GrupoModel;
use App\Models\RolesModel;
use DB;

class ListadoController extends Controller
{
    public function Listado(Request $request){
        $response = Http::post('https://japi.virtwayevents.com/japi-ted/js/api-user-list', [
            'auth-key'=> 'c3d9aa-f2d855468f39-1367379a8f5a5452ec14',
            'language'=>'es',
            'api-user-list'=> [
            'limit'=> 300,
            'page'=>$request->pag,
            'user-profile'=> 'complete',
            //'user-groups'=>[$request->grupo],
            ]
           ]);
           $usu = $response->json();
           return view('reporteusu')->with('usu', $usu);
    }

    public function regisgrup(Request $request){
        $Gr = new GrupoModel();
        $Gr->iden = $request->input('cod');
        $Gr->nombre = $request->input('des');
        $Gr->estado = 1;
        $Gr->save();
        return back();
    }
   
    public function rolesgrup(Request $request){
        $Gr = new RolesModel();
        $Gr->idrol = $request->input('cod');
        $Gr->nombre = $request->input('des');
        $Gr->estado = 1;
        $Gr->save();
        return back();
    }

    public function elegir(){
        $rol = DB::table('roles')->get();
        $grupo = DB::table('grupos')->get();

        return view('gruposvin')->with('rol', $rol)->with('grupo', $grupo);
    }

    public function cambiar($id){
        $val = DB::table('grupos')->where('grupos.estado', '=', 2)->count();
        if($val==0){
            $act = GrupoModel::findOrFail($id);
            if($act->estado==1){
                $act->estado=2;
            }else{
                $act->estado=1;
            }
            $act->save();
        }else{
            if($val==1){
                $act = GrupoModel::findOrFail($id);
                $act->estado=1;
                $act->save();
            }
        }
        return back();
    }

    public function cambiarrol($id){
        $v = DB::table('roles')->where('roles.estado', '=', 2)->count();
        if($v==0){
            $act = RolesModel::findOrFail($id);
            if($act->estado==1){
                $act->estado=2;
            }else{
                $act->estado=1;
            }
            $act->save();
        }else{
            if($v==1){
                $act = RolesModel::findOrFail($id);
                $act->estado=1;
                $act->save();
            }
        }
        return back();

    }

    public function eliminargrupo($id){

        DB::table('grupos')->where('grupos.id', $id)->delete();
        return back();
    }

    public function eliminarrol($id){

        DB::table('roles')->where('roles.id', $id)->delete();
        return back();
    }
    
}
