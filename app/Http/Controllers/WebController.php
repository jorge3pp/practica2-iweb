<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Agente;
use App\Cuartel;
use App\Denuncia;
use App\User;
use App\Tarea;
use DB;
use Riazxrazor\LaravelSweetAlert\LaravelSweetAlert;

class WebController extends Controller
{
    public function app(){
        return view('welcome');
    }








    //AQUI VA NUESTRO CODIGO TT


    public function repositoriosUsuario() {

        $user = \Auth::user();
        $repositorios = DB::table('repositorios')->where('administrador',$user->id)->paginate(10);
        return view('1repositorios')->with('valores',$repositorios);
    }

    public function datosRepositorio($id) {
        $user = \Auth::user();
        
        $repositorio = DB::table('repositorios')->where('id',$id)->first();
        
        if($repositorio->privPub == '0' && $repositorio->administrador == $user->id) {
            return view('1datosRepositorio')->with('valor',$repositorio);
        }
        else {
            return view('error_permisos_repositorio');
        }
        
    }

    public function repositoriosDestacados() {
        $repositorios = DB::table('repositorios')->where('privPub','1')->paginate(10);
        return view('1repositoriosDestacados')->with('valores',$repositorios);
    }

    public function datosRepositorioPublico($id) {
        $user = \Auth::user();
        $repositorio = DB::table('repositorios')->where('id',$id)->first();
        $issues = DB::table('issue')->where('id_repo',$id)->paginate(10);
        if($repositorio->privPub == '1' || $repositorio->administrador == $user->id) {
            return view('1datosRepositorioPublico')->with('valor',$repositorio);
        }
        else {
            return view('error_permisos_repositorio');
        }
        
    }

    public function issueRepositorio($id) {
        $issues = DB::table('issue')->where('id_repo',$id)->paginate(10);
        return view('1issue_repositorio')->with('valores',$issues);

    }

    public function issueRepositorioCerrados($id) {
        $issues = DB::table('issue')->where('id_repo',$id)->paginate(10);
        return view('1issue_repositorio_cerrados')->with('valores',$issues);
    }


    public function crearIssue(Request $request, $id){
        return view ('1crearIssue')->with('valores',$id);
    }

    public function crearIssuePostear(Request $request, $id){
        $user = \Auth::user();

        $v = \Validator::make($request->all(),['nombre' => 'required|max:100',
        'descripcion' => 'required|max:500']);

        if ($v->fails()){
            return redirect()->back()->withInput()->withErrors($v->errors());
        }
        
        $nombre = (string)$request->input('nombre');
        $descripcion = (string)$request->input('descripcion');

        try{
            DB::table('issue')->insert(['nombre'=>$nombre,'estado' => 'abierto', 'descripcion'=>$descripcion,'id_usuario'=>$user->id, 'id_repo' => $id]);
            return view('insertarIssuePostear');

        }catch(\Exception $e) {
            return view('error');
        }

        //return view ('error404');
    }
    /*


    public function modificarAgentePostear(Request $request,$id){

        $nombre = (string)$request->input('nombre');
        $cuartel = (int)$request->input('cuartel');

        try{ 
            if($id==0) throw new \Exception();

            $agente = Agente::where('id',$id);

            if($nombre!="") $agente->update(['nombre'=>$nombre]);
            if($cuartel!=0) $agente->update(['cuartel_id'=>$cuartel]);

            return view('modificarAgentePostear');
        }catch(\Exception $e) {
            return view('error');
        }
    }
    public function insertarTarea(Request $request){
        $agente = Agente::all();
        return view ('insertarTarea')->with('valores',$agente);
    }

    public function insertarTareaPostear(Request $request){
        
        
         $v = \Validator::make($request->all(),['nombre' => 'required|max:100',
         'zona' => 'required|max:100','descripcion' => 'required|max:500',
         'agente_id' => 'required|integer|exists:agentes,id']);
        
        if ($v->fails()){
            return redirect()->back()->withInput()->withErrors($v->errors());
        }
        
                $nombre = (string)$request->input('nombre');
                $zona = (string)$request->input('zona');
                $descripcion = (string)$request->input('descripcion');
                $agente_id = (int)$request->input('agente_id');
                
                
                try{
                    DB::table('tareas')->insert(['nombre'=>$nombre, 'zona'=>$zona, 'descripcion'=>$descripcion,'agente_id'=>$agente_id]);
        
                    $id = DB::table('tareas')->where('nombre',$nombre)->where('zona',$zona)->where('descripcion',$descripcion)->where('agente_id',$agente_id)->first();
        
                    DB::table('agente_tareas')->insert(['tarea_id' => $id->id, 'agente_id'=>$agente_id]);
                
                    return view('insertarTareaPostear');
                }catch(\Exception $e) {
                    return view('error');
                }
            }


            */
    // AQUI ACABA EL CODIGO NUEVO











    public function agentes() {
        $agentes = DB::table('agentes')->paginate(10);
        return view('agentes')->with('valores', $agentes);
    }

    public function cuarteles(){
        $cuarteles = DB::table('cuartels')->paginate(10);
        return view('cuarteles')->with('valores', $cuarteles);
    }

    public function cuartelesPublic(){
        $cuarteles = DB::table('cuartels')->paginate(10);
        return view('cuartelespublic')->with('valores', $cuarteles);
    }

    public function denuncias(){
        $denuncias = DB::table('denuncias')->paginate(10);
        return view('denuncias')->with('valores', $denuncias);
    }
    public function denunciasPublic(){

        $user = \Auth::user();
        $denuncias = DB::table('denuncias')->where('user_id',$user->email)->paginate(10);
        return view('denunciaspublic')->with('valores', $denuncias);
    }

    public function tareas(){
        $tareas = DB::table('tareas')->paginate(10);
        return view('tareas')->with('valores', $tareas);
    }

    public function usuarios(){
        $usuarios = DB::table('users')->paginate(10);
        return view('usuarios')->with('valores', $usuarios);
    }

    public function error(){
        return view('error');
    }

    public function nologin(){
        return view('nologin');
    }

    public function noadmin(){
        return view('noadmin');
    }

    public function borrar(){
        return view('borrar');
    }

    public function error404(){
        return view('error404');
    }

    public function borrarPostear(Request $request){

        //$id = (int)$_POST['id']; 
        //$user = $_REQUEST['res'];
        $id = (int)$request->input('id');
        $op = (int)$request->input('res');

        if($op == 1){
            //71372469 
            $user = User::where('id',$id)->first();
            if(empty($user)){
                print '<script language="JavaScript">'; 
                print 'alert("El usuario no existe");'; 
                print '</script>'; 
                return view('borrar');
            }else{
                $user->delete();
                print '<script language="JavaScript">'; 
                print 'alert("Usuario eliminado correctamente");'; 
                print '</script>'; 
            } 
        }else if($op == 2){
            //1
            $denuncia = Denuncia::where('id',$id)->first();
            if(empty($denuncia)){
                print '<script language="JavaScript">'; 
                print 'alert("La denuncia no existe");'; 
                print '</script>'; 
                return view('borrar');
            }else{
                $denuncia->delete();
                print '<script language="JavaScript">'; 
                print 'alert("Denuncia eliminada correctamente");'; 
                print '</script>'; 
            } 
        }else if($op == 3){
            //1 
            $tarea = Tarea::where('id',$id)->first();
            if(empty($tarea)){
                print '<script language="JavaScript">'; 
                print 'alert("La tarea no existe");'; 
                print '</script>'; 
                return view('borrar');
            }else{
                $tarea->delete();
                print '<script language="JavaScript">'; 
                print 'alert("Tarea eliminada correctamente");'; 
                print '</script>'; 
            }
        }else if($op == 5) {
            $cuartel = Cuartel::where('id',$id)->first();
            if(empty($cuartel)){
                print '<script language="JavaScript">'; 
                print 'alert("El cuartel no existe");'; 
                print '</script>'; 
                return view('borrar');
            }else{
                $cuartel->delete();
                print '<script language="JavaScript">'; 
                print 'alert("cuartel eliminado correctamente");'; 
                print '</script>'; 
            } 
        }else if($op == 4) {
            $agente = Agente::where('id',$id)->first();
            //return view('borrarPostear');
            if(empty($agente)){
                print '<script language="JavaScript">'; 
                print 'alert("El agente no existe");'; 
                print '</script>'; 
                return view('borrar');
            }else{
                $agente->delete();
                print '<script language="JavaScript">'; 
                print 'alert("Agente eliminado correctamente");'; 
                print '</script>'; 
            }
            
        }

        return view('app');
    }


    public function modificar(){
        return view('modificar');
    }
    

    public function modificarUsuarioPostear(Request $request,$id){

        //$id = (int)$_POST['id']; 
        //$user = $_REQUEST['res'];
       
        $name = (string)$request->input('name'); //OJO NO LIARLA Q ESTAMOS HABLANDO DEL MISMO LABEL
        $telefono = (int)$request->input('telefono');
        $direccion = (string)$request->input('direccion');
        
        try{
            if($id==0) throw new \Exception();

            $user = User::where('id',$id);
            if($name!="") $user->update(['name'=>$name]);
            if($telefono!=0) $user->update(['telefono'=>$telefono]);
            if($direccion!="") $user->update(['direccion'=>$direccion]);

            return view('modificarUsuarioPostear');
        }
        catch(\Exception $e) {
            //LaravelSweetAlert::setMessageDanger("Error al modificar los datos");
            return view('error');

        }
    }

    public function modificarUsuario($id){
        return view ('modificarUsuario')->with('valores', $id);
    }


    public function modificarAgentePostear(Request $request,$id){

        $nombre = (string)$request->input('nombre');
        $cuartel = (int)$request->input('cuartel');

        try{ 
            if($id==0) throw new \Exception();

            $agente = Agente::where('id',$id);

            if($nombre!="") $agente->update(['nombre'=>$nombre]);
            if($cuartel!=0) $agente->update(['cuartel_id'=>$cuartel]);

            return view('modificarAgentePostear');
        }catch(\Exception $e) {
            return view('error');
        }
    }

    public function modificarAgente($id){
        return view('modificarAgente')->with('valores', $id);
    }

    public function modificarCuartelPostear(Request $request, $id){
        
        $nombre = (string)$request->input('nombre');
        $direccion = (string)$request->input('direccion');
        $horario = (string)$request->input('horario');
        try{
            if($id==0) throw new \Exception();
            $cuartel = Cuartel::where('id',$id);
            if($nombre!="") $cuartel->update(['nombre'=>$nombre]);
            if($direccion != "") $cuartel->update(['direccion'=>$direccion]);
            if($horario != "") $cuartel->update(['horario'=>$horario]);

            return view('modificarCuartelPostear');
        }catch(\Exception $e) {
            return view('error');
        }
    }

    public function modificarCuartel($id){
        return view('modificarCuartel')->with('valores', $id);
    }

    public function modificarDenunciaPostear(Request $request,$id){

        $nombre = (string)$request->input('nombre');
        $motivo = (string)$request->input('motivo');
        $agente = (int)$request->input('agente');
        $usuario = (int)$request->input('usuario');
        
        try{
            if($id==0) throw new \Exception();

            $denuncia = Denuncia::where('id',$id);

            if($motivo!="") $denuncia->update(['motivo'=>$motivo]);
            if($nombre!="") $denuncia->update(['nombre'=>$nombre]);
            if($agente!=0) $denuncia->update(['agente_id'=>$agente]);
            if($usuario!=0){
                $denuncia->update(['user_id'=>$usuario]);
                $denunciaUsers = DB::table('denuncia_users')->where('denuncia_id',$id);
                $denunciaUsers->update(['user_id'=>$usuario]);
            } 
        
            return view('modificarDenunciaPostear');
        }catch(\Exception $e) {
            return view('error');
        }
    }

    public function modificarDenuncia($id){
        $agente = Agente::all();
        $usuario = User::where('rol',1)->get();
        return view('modificarDenuncia')->with('valores', $id)->with('valors',$agente)->with('vales',$usuario);
    }

    public function modificarTareaPostear(Request $request, $id){

        //$id = (int)$_POST['id']; 
        //$user = $_REQUEST['res'];

        $nombre = (string)$request->input('nombre');
        $zona = (string)$request->input('zona');
        $descripcion = (string)$request->input('descripcion');
        $agente_id = (int)$request->input('agente_id');
        
        
        try{
            if($id==0) throw new \Exception();
            $tarea = Tarea::where('id',$id);

            if($nombre!="") $tarea->update(['nombre'=>$nombre]);
            if($zona!="") $tarea->update(['zona'=>$zona]);
            if($descripcion!="") $tarea->update(['descripcion'=>$descripcion]);
            if($agente_id!=0) $tarea->update(['agente_id'=>$agente_id]);
            
            $agenteTareas = DB::table('agente_tareas')->where('tarea_id',$id);
            
            if($agente_id!=0) $agenteTareas->update(['agente_id'=>$agente_id]);
        
            return view('modificarTareaPostear');
        }catch(\Exception $e) {
            return view('error');
        }
    }

    public function modificarTarea($id){
        $agentes = Agente::all();
        return view('modificarTarea')->with('valores', $id)->with('valors',$agentes);
    }


    public function insertar(){
        return view('insertar');
    }

    public function insertarUsuarioPostear(Request $request){

        //$id = (int)$_POST['id']; 
        //$user = $_REQUEST['res'];

        $v = \Validator::make($request->all(),['nombre' => 'required|max:255',
        'email' => 'required|email|max:100|unique:users',
        'pass' => 'required|min:6|max:20']);

        if ($v->fails()){
            return redirect()->back()->withInput()->withErrors($v->errors());
        }
        
        $pass = (int)$request->input('pass');
        $nombre = (string)$request->input('nombre');
        $dni = (string)$request->input('dni');
        $telefono = (int)$request->input('telefono');
        $direccion = (string)$request->input('direccion');
        $email = (string)$request->input('email');
        
        try{
            $user = new User;
            $user->name = $nombre;
            $user->email = $email;
            $user->DNI = $dni;
            $user->password = $pass;
            $user->direccion = $direccion;
            $user->telefono = $telefono;
            $user->save();

            return view('insertarUsuarioPostear');
        }catch(\Exception $e) {
            return view('error');
        }
    }

    public function insertarUsuario(Request $request){
        return view ('insertarUsuario');
    }


    public function insertarAgentePostear(Request $request){

        //$id = (int)$_POST['id']; 
        //$user = $_REQUEST['res'];

        $v = \Validator::make($request->all(),['id' => 'required|integer|unique:agentes',
        'nombre' => 'required|max:255','cuartel' => 'required|max:4|exists:cuartels,id',
        'usuario_id' => 'required|max:100|exists:users,email']);

        if ($v->fails()){
            return redirect()->back()->withInput()->withErrors($v->errors());
        }

        $id = (int)$request->input('id');

        $nombre = (string)$request->input('nombre');
        $cuartel = (int)$request->input('cuartel');
        $usuario_id = (string)$request->input('usuario_id');
        
        try {
            if($id==0) throw new \Exception();
            DB::table('agentes')->insert(['id' => $id,'nombre'=>$nombre,'cuartel_id'=>$cuartel,'user_id'=>$usuario_id]);
            $user = User::where('email',$usuario_id)->first();
            $user->rol = 2; 
            $user->save();
            return view('insertarAgentePostear');
        }
        catch(\Exception $e) {
            return view('error');
        }
    }

    public function insertarAgente(Request $request){
        $users = Cuartel::all();
        $usuario = User::where('rol',1)->get();
        return view ('insertarAgente')->with('valores',$users)->with('valors',$usuario);
    }


    public function insertarDenunciaPostear(Request $request){

        $v = \Validator::make($request->all(),['nombre' => 'required|max:100',
        'motivo' => 'required|max:255','agente' => 'required|integer|exists:agentes,id',
        'usuario' => 'required|max:100|exists:users,email']);

        if ($v->fails()){
            return redirect()->back()->withInput()->withErrors($v->errors());
        }

        //$id = (int)$_POST['id']; 
        //$user = $_REQUEST['res'];

        $nombre = (string)$request->input('nombre');
        $motivo = (string)$request->input('motivo');
        $importe = (int)$request->input('importe');
        $agente = (int)$request->input('agente');
        $usuario = (string)$request->input('usuario');
        
        try{

            $d = DB::table('denuncias')->insert(['nombre' => $nombre,'motivo' => $motivo,'importe_multa'=> $importe,'user_id'=>$usuario,'agente_id'=>$agente]);

            $id = DB::table('denuncias')->where('nombre',$nombre)->where('motivo',$motivo)->where('importe_multa',$importe)->where('user_id',$usuario)->where('agente_id',$agente)->first();

            DB::table('denuncia_users')->insert(['denuncia_id' => $id->id, 'user_id' => $usuario]);
        
            return view('insertarDenunciaPostear');
        }catch(\Exception $e) {
            return view('error');
        }
    }

    public function insertarDenuncia(Request $request){
        $agente = Agente::all();
        $usuario = User::where('rol',1)->get();
        return view ('insertarDenuncia')->with('valores',$usuario)->with('valors',$agente);
    }


    public function insertarCuartel(Request $request){
        return view ('insertarCuartel');
    }

    public function insertarCuartelPostear(Request $request){

        //$id = (int)$_POST['id']; 
        //$user = $_REQUEST['res'];

        $v = \Validator::make($request->all(),[
        'nombre' => 'required|max:100']);

        if ($v->fails()){
            return redirect()->back()->withInput()->withErrors($v->errors());
        }


        $nombre = (string)$request->input('nombre');
        $direccion = (string)$request->input('direccion');
        $horario = (string)$request->input('horario');
        try{
            $cuartel = new Cuartel;
            $cuartel->nombre = $nombre;
            $cuartel->direccion = $direccion;
            $cuartel->horario = $horario;
            $cuartel->save();
        
            return view('insertarCuartelPostear');
        }catch(\Exception $e) {
            return view('error');
        }
    }

    public function insertarTarea(Request $request){
        $agente = Agente::all();
        return view ('insertarTarea')->with('valores',$agente);
    }

    public function insertarTareaPostear(Request $request){

        //$id = (int)$_POST['id']; 
        //$user = $_REQUEST['res'];

        $v = \Validator::make($request->all(),['nombre' => 'required|max:100',
        'zona' => 'required|max:100','descripcion' => 'required|max:500',
        'agente_id' => 'required|integer|exists:agentes,id']);

        if ($v->fails()){
            return redirect()->back()->withInput()->withErrors($v->errors());
        }

        $nombre = (string)$request->input('nombre');
        $zona = (string)$request->input('zona');
        $descripcion = (string)$request->input('descripcion');
        $agente_id = (int)$request->input('agente_id');
        
        
        try{
            DB::table('tareas')->insert(['nombre'=>$nombre, 'zona'=>$zona, 'descripcion'=>$descripcion,'agente_id'=>$agente_id]);

            $id = DB::table('tareas')->where('nombre',$nombre)->where('zona',$zona)->where('descripcion',$descripcion)->where('agente_id',$agente_id)->first();

            DB::table('agente_tareas')->insert(['tarea_id' => $id->id, 'agente_id'=>$agente_id]);
        
            return view('insertarTareaPostear');
        }catch(\Exception $e) {
            return view('error');
        }
    }


    public function search(Request $request){

        if(empty($peticion)){
            return view('filtrarSearch');
        }else{
            $v = \Validator::make($request->all(),['nombre' => 'required|max:255']);

            if ($v->fails()){
                return redirect()->back()->withInput()->withErrors($v->errors());
            }
            
            $peticion = $request->get('nombre');

            $agentes = DB::table('agentes')->where('nombre','LIKE',"%$peticion%")->get();
            
            return view('search')->with('valores', $agentes);
        }
    }

    public function especial(Request $request){

        $v = \Validator::make($request->all(),['nombre' => 'required|max:255']);

        if ($v->fails()){
            return redirect()->back()->withInput()->withErrors($v->errors());
        }

        $peticion = $request->get('nombre');
        $peticionSec = $request->get('id');
        $op = (int)$request->get('res');

        

        if($op == 1){
            $users = DB::table('users')->where('nombre','LIKE',"%$peticion%")->where('id','LIKE',"%$peticionSec%")->get();
            return view('search')->with('valores', $users);
        }else if($op == 2){
            //$peticionSec = (int)$peticionSec;
            $agentes = Agente::where('nombre','LIKE',"%$peticion%")->where('id','LIKE',"%$peticionSec%")->get();
            return view('search')->with('valores', $agentes);
        }else if($op == 3){
            $cuarteles = DB::table('cuartels')->where('nombre','LIKE',"%$peticion%")->where('id','LIKE',"%$peticionSec%")->get();
            return view('search')->with('valores', $cuarteles);
        }else if($op == 4){
            $denuncias = DB::table('denuncias')->where('nombre','LIKE',"%$peticion%")->where('id','LIKE',"%$peticionSec%")->get();
            return view('search')->with('valores', $denuncias);
        }else if($op == 5){
            $tareas = DB::table('tareas')->where('nombre','LIKE',"%$peticion%")->where('id','LIKE',"%$peticionSec%")->get();
            return view('search')->with('valores', $tareas);
        }else{
            return view('borrarPostear');
        }
    }


    public function agenteUser($id) {
        $agentes = Agente::where('id',$id)->first();
        $users = User::where('email',$agentes->user_id)->first();
        $cuartel = Cuartel::where('id',$agentes->cuartel_id)->first();
        return view('agenteuser')->with('valores', $agentes)->with('valors',$users)->with('valora',$cuartel);;
    }

    public function userProfile($id) {
        $usuario = User::where('id',$id)->first();
        return view('useruser')->with('valores', $usuario);
    }

    public function borrarAgente($id){

        $tarea = Agente::where('id',$id)->first();
        $user = User::where('email',$tarea->user_id)->first();
        $user->rol = 1; $user->save();
        $tarea->delete();

        LaravelSweetAlert::setMessageSuccess("Agente Borrado");

        $agentes = DB::table('agentes')->paginate(10);
        
        return redirect('agentes')->with('valores', $agentes);
    }

    public function borrarCuartel($id){

        $tarea = Cuartel::where('id',$id)->first();
        $tarea->delete();

        LaravelSweetAlert::setMessageSuccess("Cuartel Borrado");

        $cuarteles = DB::table('cuartels')->paginate(10);
        
        return redirect('cuarteles')->with('valores', $cuarteles);
    }

    public function borrarDenuncia($id){

        $tarea = Denuncia::where('id',$id)->first();
        $tarea->delete();

        LaravelSweetAlert::setMessageSuccess("Denuncia Borrada");

        $agentes = DB::table('denuncias')->paginate(10);
        
        return redirect('denuncias')->with('valores', $agentes);
    }

    public function borrarTarea($id){

        $tarea = Tarea::where('id',$id)->first();
        $tareas_id = DB::table('agente_tareas')->where('tarea_id',$id)->first();
        $tareas_id->delete();
        $tarea->delete();

        LaravelSweetAlert::setMessageSuccess("Tarea Borrada");

        $agentes = DB::table('tareas')->paginate(10);
        
        return redirect('tareas')->with('valores', $agentes);
    }

    public function borrarUsuario($id){

        $tarea = User::where('id',$id)->first();
        $tarea->delete();

        LaravelSweetAlert::setMessageSuccess("Usuario Borrado");

        $agentes = DB::table('users')->paginate(10);
        
        return redirect('usuarios')->with('valores', $agentes);
    }


    public function cuartelAgente($id)
    {
        $cuartel = Agente::where('cuartel_id',$id)->paginate(10);
        return view('cuartelagente')->with('valores',$cuartel);
    }

    public function usuarioDenuncia($id)
    {
        $usuario = Denuncia::where('user_id',$id)->paginate(10);
        return view('usuariodenuncia')->with('valores',$usuario);
    }

    public function denunciaAgente($id)
    {
        $usuario = Denuncia::where('agente_id',$id)->paginate(10);
        return view('agentesdenuncias')->with('valores',$usuario);
    }

    public function agentesTareas($id)
    {
        $tareas = Tarea::where('agente_id',$id)->paginate(10);
        return view('agentestareas')->with('valores',$tareas);
    }

    public function tareasAgentes($id)
    {
        $agentes_id = DB::table('agente_tareas')->where('tarea_id','LIKE',"%$id%")->first();
        $agentes = Agente::where('id',$agentes_id->agente_id)->paginate(10);
        return view('tareasagentes')->with('valores',$agentes);
        
    }

    public function finalizarTarea($id){

        try{
            $estado = 'Finalizada';
            $tarea = Tarea::where('id',$id);
            $tarea->update(['estado'=>$estado]);

            LaravelSweetAlert::setMessageSuccess("Tarea Finalizada");

            $agentes = DB::table('tareas')->paginate(10);
            
            return redirect('tareas')->with('valores', $agentes);

        }catch(\Exception $e) {
            abort(500);
        }
    }

    public function pagarDenuncia($id)
    {
        $denuncia = Denuncia::where('id',$id)->first();
        return view('pagardenuncia')->with('valores',$denuncia->importe_multa);
    }

    public function pagarDenuncias(Request $request,$id){

        try{
            $estado = 'Pagada';
            $denuncia = Denuncia::where('id',$id);
            $denuncia->update(['importe_multa'=>$estado]);

            LaravelSweetAlert::setMessageSuccess("Denuncia Pagada");


            $denuncias = Denuncia::where('user_id',\Auth::user()->email)->paginate(10);
            return redirect('denunciasp')->with('valores', $denuncias);

        }catch(\Exception $e) {
            abort(500);
        }
    }


    public function logout()
    {
        \Auth::logout();
        return redirect('/');
    }

    public function pedirCita($id){

        $nombre = DB::table('cuartels')->where('id',$id)->first();

        return view('pedirCita')->with('valores', $nombre->nombre);
    }

    public function pedirCitaPostear($id,Request $request){

        $v = \Validator::make($request->all(),['motivo' => 'required|max:250',
        'horario' => 'required|max:100']);

        if ($v->fails()){
            return redirect()->back()->withInput()->withErrors($v->errors());
        }

        

        $motivo = (string)$request->input('motivo');
        $hora = (string)$request->input('horario');        
        
        try{

            $mensaje = "";
            //08:00-20:00
            $h1 = $hora[0].$hora[1].$hora[3].$hora[4];

            $cuartel = DB::table('cuartels')->where('id',$id)->first();
            $fecha = $cuartel->horario;        

            if($h1 > ($fecha[0].$fecha[1].$fecha[3].$fecha[4]) && $h1 < 
            ($fecha[6].$fecha[7].$fecha[9].$fecha[10])){
                $mensaje = "Cita seleccionada con exito: ".$hora[0].$hora[1].":".$hora[3].$hora[4];
                //$user = DB::table('users')->where('id',\Auth::user()->id)->first();

                User::where('id',\Auth::user()->id)->update(['cita' => $id, 'h_cita' => $hora[0].$hora[1].":".$hora[3].$hora[4],'motivo'=>$motivo]);
            }else{
                $mensaje = "La fecha seleccionada esta fuera de plazo: ".$fecha;
                
            }        

        
            return redirect()->back()->withInput()->withErrors($mensaje);
        }catch(\Exception $e) {
            return view('error');
        }
    }

    public function cancelarCita($id){
        try{

            $user = DB::table('users')->where('id',$id)
            ->update(['cita'=>0,'h_cita'=>NULL,'motivo'=>NULL]);

            LaravelSweetAlert::setMessageSuccess("Cita borrada");

            return redirect()->back();
        }catch(\Exception $e) {
            return view('error');
        }
    }

    public function profile(){

        return view('profiles');
    }

    public function save(Request $request){

        $rules = ['file' => 'required|image|max:1024*1024*5'];
        $messages = [
            'file.required' => 'La imagen es requerida',
            'file.image' => 'Formato no permitido',
            'file.max' => 'El máximo permitido es 5 MB',
        ];
        $validator = \Validator::make($request->all(), $rules, $messages);
        
        if ($validator->fails()){
            return view('profiles')->withErrors($validator);
        }
        else{
        
            //obtenemos el campo file definido en el formulario
            $file = $request->file('file');
        
            //obtenemos el nombre del archivo
            $nombre = $file->getClientOriginalName();
        
            //indicamos que queremos guardar un nuevo archivo en el disco local
            \Storage::disk('local')->put($nombre,  \File::get($file));

            $email = \Auth::user()->email;

            $user = new User();

            $user->where('email','=',$email)->update(['imagen'=>$nombre]);
        }

        //return view('profiles');
        return view('profiles')->withErrors($validator);

    }
    public function tareasporAgente()
    {
        $agente = Agente::where('user_id',\Auth::user()->email)->first();
        $tareas = Tarea::where('agente_id',$agente->id)->paginate(10);
        return view('tareasporagente')->with('valores',$tareas);
    }

     public function cuartelesporAgente()
    {
        $agente = Agente::where('user_id',\Auth::user()->email)->first();
        $cuartel = Cuartel::where('id',$agente->cuartel_id)->paginate(10);
        return view('cuartelesporagente')->with('valores',$cuartel);
    }
    public function citasMostrar(){
        $user = DB::table('users')->where('id',\Auth::user()->id)->paginate(10);
        return view('citas')->with('valores',$user);
    }

public function insertarDenunciaAgente(Request $request){
        $usuario = User::where('rol',1)->get();
        return view ('denunciashagente')->with('valores',$usuario);
    }

    public function insertarDenunciaAgentePostear(Request $request){

        $v = \Validator::make($request->all(),['nombre' => 'required|max:100',
        'motivo' => 'required|max:255', 'usuario' => 'required|max:100|exists:users,email']);

        if ($v->fails()){
            return redirect()->back()->withInput()->withErrors($v->errors());
        }

        //$id = (int)$_POST['id']; 
        //$user = $_REQUEST['res'];

        $nombre = (string)$request->input('nombre');
        $motivo = (string)$request->input('motivo');
        $importe = (int)$request->input('importe');
        $usuario = (string)$request->input('usuario');

        try{
            $agente = Agente::where('user_id',\Auth::user()->email)->first();
            $denuncia = new Denuncia;
            $denuncia->nombre = $nombre;
            $denuncia->motivo = $motivo;
            $denuncia->agente_id = $agente->id;
            $denuncia->user_id = $usuario;
            $denuncia->importe_multa = $importe;
            $denuncia->save();
            
           DB::table('denuncia_users')->insert(['denuncia_id' => $denuncia->id, 'user_id' => $usuario]);
        
            return view('insertarDenunciaPostear');
        }catch(\Exception $e) {
            return view('error');
        }
    }

    
    public function denunciasAgente()
    {
        $agente = Agente::where('user_id',\Auth::user()->email)->first();
        $denuncias = Denuncia::where('agente_id',$agente->id)->paginate(10);
        return view('denunciasporagente')->with('valores',$denuncias);
    }
    

}
