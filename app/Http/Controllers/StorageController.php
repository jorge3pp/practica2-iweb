<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Agente;
use App\Cuartel;
use App\Denuncia;
use App\User;
use App\Repositorio;
use App\Tarea;
use App\Issue;
use App\PR;
use DB;
use Riazxrazor\LaravelSweetAlert\LaravelSweetAlert;


class StorageController extends Controller
{
    public function index($id) {
        $user = \Auth::user();
        $repositorio = DB::table('repositorios')->where('id',$id)->first();

        
        $repositorios = DB::table('repositorios')->where('administrador',$user->id)->paginate(10);

        if($repositorio->administrador == $user->id) {
            return view('1formulario')->with('valor',$repositorio);
        }
        else {
            return view('error_permisos_repositorio');
        }

        
    }

    public function save(Request $request,$id) {
        $user = \Auth::user();
        $repositorio = DB::table('repositorios')->where('id',$id)->first();

        if($repositorio->administrador == $user->id) {
            //obtenemos el campo file definido en el formulario
            $file = $request->file('file');
        
           //obtenemos el nombre del archivo
           $nombre = $id;
   
           //$nombre = 10;
        
           //indicamos que queremos guardar un nuevo archivo en el disco local
           \Storage::disk('local')->put($nombre,  \File::get($file));
        
           return view('1archivoguardado');
        }

        else {
            return view('error_permisos_repositorio');
        }
    }

    public function mostrarfichero($id) {
        return view('1mostrarfichero')->with('valor',$id);
    }


}
