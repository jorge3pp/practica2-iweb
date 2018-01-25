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
use App\Wiki;
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
        
        if($repositorio->administrador == $user->id || $user->email == 'Admin@admin.com') {
            return view('1datosRepositorio')->with('valor',$repositorio);
        }
        else {
            return view('error_permisos_repositorio');
        }
        
    }

    public function repositoriosDestacados() {
        $repositorios = DB::table('repositorios')->where('privPub','1')->paginate(10);

        $users = DB::table('users')->get();
        return view('1repositoriosDestacados')->with('valores',$repositorios)->with('users', $users);
    }

    public function datosRepositorioPublico($id) {
        $user = \Auth::user();
        $repositorio = DB::table('repositorios')->where('id',$id)->first();
        if($repositorio->privPub == '1' || $repositorio->administrador == $user->id || $user->email == 'Admin@admin.com') {
            return view('1datosRepositorioPublico')->with('valor',$repositorio);
        }
        else {
            return view('error_permisos_repositorio');
        }
        
    }

    public function issueRepositorio($id) {
        $user = \Auth::user();
        
        $repositorio = DB::table('repositorios')->where('id',$id)->first();
        
        if( $repositorio->privPub == '1')  {
            $issues = DB::table('issues')->where('id_repo',$id)->paginate(10);
            return view('1issue_repositorio')->with('valores',$issues)->with('repositorio',$repositorio);
        }

        else {
            if ($repositorio->administrador == $user->id || $user->email == 'Admin@admin.com' ) {
                $issues = DB::table('issues')->where('id_repo',$id)->paginate(10);
                return view('1issue_repositorio')->with('valores',$issues)->with('repositorio',$repositorio);

            }
            else {
                return view('error_permisos_repositorio');
            }
            
        }

    }

    public function issueRepositorioCerrados($id) {
        $user = \Auth::user();
        $repositorio = DB::table('repositorios')->where('id',$id)->first();
        
        if( $repositorio->privPub == '1')  {
            $issues = DB::table('issues')->where('id_repo',$id)->paginate(10);
            return view('1issue_repositorio_cerrados')->with('valores',$issues)->with('repositorio',$repositorio);
        }

        else {
            if ($repositorio->administrador == $user->id || $user->email == 'Admin@admin.com' ) {
                $issues = DB::table('issues')->where('id_repo',$id)->paginate(10);
                return view('1issue_repositorio_cerrados')->with('valores',$issues)->with('repositorio',$repositorio);

            }
            else {
                return view('error_permisos_repositorio');
            }
            
        }
    }

    public function crearIssue(Request $request, $id){
        $user = \Auth::user();
        $repositorio = DB::table('repositorios')->where('id',$id)->first();
        if($repositorio->administrador == $user->id || $user->email == 'Admin@admin.com') {
            return view ('1crearIssue')->with('valor',$id);
        }
        else {
            return view('error_permisos_repositorio');
        }
        
    }

    public function anadirTipoRepo() {
        return view('1anadirTiposRepositorio');
    }
    

    public function anadirTipoRepoPostear(Request $request){
        $user = \Auth::user();

        $v = \Validator::make($request->all(),['nombre' => 'required|max:10']);

        if ($v->fails()){
            return redirect()->back()->withInput()->withErrors($v->errors());
        }
        
        $nombre = (string)$request->input('nombre');

        try{
            DB::table('lang')->insert(['proglang'=>$nombre]);
            LaravelSweetAlert::setMessageSuccess("Creado nuevo repositorio");
            return view('1anadirTiposRepositorioPostear');

        }catch(\Exception $e) {
            return view('error');
        }
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
            DB::table('issues')->insert(['nombre'=>$nombre,'estado' => 'abierto', 'descripcion'=>$descripcion,'id_usuario'=>$user->id, 'id_repo' => $id]);
            return view('insertarIssuePostear');

        }catch(\Exception $e) {
            return view('error');
        }
    }


    public function cerrarIssue($id){
        
        try{
            
            $estado = 'cerrado';
            $issue = Issue::where('id',$id);
            $issue->update(['estado'=>'cerrado']);
            
            LaravelSweetAlert::setMessageSuccess("El Issue seleccionado ha sido cerrado correctamente");
            
            $issueaux = DB::table('issues')->where('id',$id)->first();
            $issues = DB::table('issues')->where('id_repo',$issueaux->id_repo)->paginate(10);
            return view('1issue_repositorio_cerrados')->with('valores',$issues);
        
        }
        catch(\Exception $e) {

        }
    }
    
    

    public function cerrarPullrequest($id){
        $issues = Issue::all();
        $pulls = DB::table('p_rs')->where('id',$id)->paginate(10);
        return view('1cerrarPullrequest')->with('valores',$pulls)->with('issues',$issues);
    }
    
    public function cerrarPullrequestPostear(Request $request,$id)  {
        
        try {
            $issueaux = (string)$request->input('issue');
            $issue = Issue::where('id',$issueaux);
            $issue->update(['estado'=>'cerrado']);

            DB::table('p_rs')->where('id', $id)->update(['estado' => 'cerrado']);
            DB::table('p_rs')->where('id', $id)->update(['id_issue' => $issueaux]);

            LaravelSweetAlert::setMessageSuccess("El PR seleccionado ha sido cerrado correctamente");
            return view('cerrarPullrequestPostear');

        }
        catch(\Exception $e) {
            
            DB::table('p_rs')->where('id', $id)->update(['estado' => 'cerrado']);

            LaravelSweetAlert::setMessageSuccess("El PR seleccionado ha sido cerrado correctamente");
            return view('cerrarPullrequestPostear');
        }

    }
    


    public function detallesIssue($id) {
        $issue = DB::table('issues')->where('id',$id)->first();
        return view('1detallesIssue')->with('valor',$issue);
    }

    public function detallesPullrequest($id) {
        $pull = DB::table('p_rs')->where('id',$id)->first();
        return view('1detallesPullrequest')->with('valor',$pull);
    }

    public function detallesPullrequestCerrado($id) {
        $pull = DB::table('p_rs')->where('id',$id)->first();
        $issue = Issue::where('id',$pull->id_issue);
        return view('1detallesPullrequestCerrado')->with('valor',$pull)->with('valors',$issue);
    }
    
    public function pullrequestRepositorio($id) {
        $pulls = DB::table('p_rs')->where('id_repo',$id)->paginate(10);
        $repo = DB::table('repositorios')->where('id',$id)->first();
        return view('1pr_repositorio')->with('valores',$pulls)->with('repo',$repo);
    }

    public function pullrequestRepositorioCerrados($id) {
        $pulls = DB::table('p_rs')->where('id_repo',$id)->paginate(10);
        $repo = DB::table('repositorios')->where('id',$id)->first();
        return view('1pr_repositorio_cerrados')->with('valores',$pulls)->with('repo',$repo);
    }

    public function crearPullrequest(Request $request, $id){
        $user = \Auth::user();
        $repositorio = DB::table('repositorios')->where('id',$id)->first();
        if($repositorio->administrador == $user->id) {
            return view ('1crearPullrequest')->with('valor',$id);
        }
        else {
            return view('error_permisos_repositorio');
        }
        
    }

    
    
    public function crearPullrequestPostear(Request $request, $id){
        $user = \Auth::user();

        $v = \Validator::make($request->all(),['nombre' => 'required|max:100',
        'descripcion' => 'required|max:500']);

        if ($v->fails()){
            return redirect()->back()->withInput()->withErrors($v->errors());
        }
        
        $nombre = (string)$request->input('nombre');
        $descripcion = (string)$request->input('descripcion');

        try{
            DB::table('p_rs')->insert(['nombre'=>$nombre,'estado' => 'abierto', 'descripcion'=>$descripcion,'id_usuario'=>$user->id, 'id_repo' => $id, 'id_issue' => '0']);
            return view('insertarPullrequestPostear');

        }catch(\Exception $e) {
            return view('error');
        }
    }


   
  
    public function formNuevoProyecto(){
        $langs = DB::table('lang')->get();
        return view('1nuevoRepositorio')->with('langs', $langs);
    }

    public function nuevoProyectoPostear(Request $request){
        
        //$id = (int)$_POST['id']; 
        //$user = $_REQUEST['res'];
        $v = \Validator::make($request->all(),[
            'nombre' => 'required|max:255',
            'acceso' => 'required']);
        
                if ($v->fails()){
                    return redirect()->back()->withInput()->withErrors($v->errors());
                }
                
                $administrador = \Auth::user()->id;
                $nombre = (string)$request->input('nombre');
                $acceso = (int)$request->input('acceso');
                $lang = (string)$request->input('lang');

                try {
                    $repo = new Repositorio;
                    $repo->nombre = $nombre;
                    $repo->privPub = $acceso;
                    if($lang!=''){
                        $repo->lang = $lang;
                    }
                    $repo->administrador = $administrador;
                    $repo->save();

                    DB::table('wiki')->insert(['id_repo' => $repo->id, 'clonelink' => "localhost:8000/repositorios/$repo->id/storage/descargararchivo/$repo->id"]);
                    
/*

                    $user = User::find($administrador);

                    $repo = new Repositorio;
                    $repo->nombre = $nombre;
                    $repo->privPub = $acceso;
                    $repo->administrador = $administrador;
                    $user->repositories()->save($repo);

                    DB::table('repositorios')->insert(['nombre'=>$nombre,'administrador'=>$administrador,'privPub'=>$acceso]);

                    $r = Repositorio::where('nombre',$nombre)->where('administrador',$administrador)->where('privPub',$acceso)->first();

                    DB::table('lista_usuarios_repo')->insert(['id_usuario' => $administrador, 'id_repo' => $r->id]);

*/
                    return view('1nuevoRepositorioPostear');
                }
                catch(\Exception $e) {
                    return view('error');
                }
    }

            
    public function mostrarWiki($id) {
        $wiki = DB::table('wiki')->where('id_repo',$id)->first();
        $repositorio = DB::table('repositorios')->where('id',$id)->first();
        return view('1mostrarWiki')->with('wiki',$wiki)->with('valor',$repositorio);
    }

    public function modificarWikiPostear(Request $request,$id){
               
                $contenido = (string)$request->input('contenido'); //OJO NO LIARLA Q ESTAMOS HABLANDO DEL MISMO LABEL
                $milestone = (string)$request->input('milestone');
                
                try{
                    if($id==0) throw new \Exception();
                    $repositorio = DB::table('repositorios')->where('id',$id)->first();
                    $wiki = DB::table('wiki')->where('id_repo',$id)->first();
                    if($contenido!="") DB::table('wiki')->where('id',$wiki->id)->update(['contenido'=>$contenido]);
                    if($milestone!="") DB::table('wiki')->where('id',$wiki->id)->update(['milestones'=>$milestone]);
                    return view('1mostrarWiki')->with('wiki',$wiki)->with('valor',$repositorio);
                }
                catch(\Exception $e) {
                    //LaravelSweetAlert::setMessageDanger("Error al modificar los datos");
                    return view('error');
        
                }
            }

    public function modificarWiki($id){
        $repositorio = DB::table('repositorios')->where('id',$id)->first();
        $wiki = DB::table('wiki')->where('id_repo',$id)->first();

        return view ('1modificarWiki')->with('wiki', $wiki)->with('repo', $repositorio);
    }



    public function modificarRepositorios() {
        return view('1modificarRepositorios');
    }


    public function actualizarRepositorios(){
        $repositorios = Repositorio::all();
        $usuarios = User::all();
        return view('1actualizarRepositorios')->with('valores',$repositorios)->with('usuarios',$usuarios);
    }

    public function actualizarRepositoriosPostear(Request $request)  {
        
        try {
            $repositorioaux = (string)$request->input('repositorio');
            $nuevoadministrador = (string)$request->input('administrador');

            if($repositorioaux!="" && $nuevoadministrador!="") {
                DB::table('repositorios')->where('id', $repositorioaux)->update(['administrador' => $nuevoadministrador]);
            }
            
            LaravelSweetAlert::setMessageSuccess("Los datos han sido modificados correctamente");
            return view('1modificarRepositorios');

        }
        catch(\Exception $e) {
            return view('error');
        }

    }

    public function borrarRepositorios(){
        $repositorios = Repositorio::all();

        return view('borrarRepositorio')->with('repositorios',$repositorios);
    }

    public function borrarRepositoriosPostear(Request $request)  {
        
        try {
            $repoid = (int)$request->input('repo');

            if($repoid!="") {
                DB::table('repositorios')->where('id', $repoid)->delete();
            }
            
            LaravelSweetAlert::setMessageSuccess("Los datos han sido borrados correctamente");
            return view('1modificarRepositorios');

        }
        catch(\Exception $e) {
            return view('error');
        }

    }

    public function repositoriosAdmin() {
        $repositorios = DB::table('repositorios')->paginate(10);
        return view('1repositoriosAdmin')->with('valores',$repositorios);
    }

    public function crearRepositorioAdmin(){
        $langs = DB::table('lang')->get();
        $usuarios = User::all();

        return view('1nuevoRepositorioAdmin')->with('langs', $langs)->with('usuarios',$usuarios);
    }

    public function crearRepositorioAdminPostear(Request $request){
        
        $v = \Validator::make($request->all(),[
            'nombre' => 'required|max:255',
            'acceso' => 'required']);
        
                if ($v->fails()){
                    return redirect()->back()->withInput()->withErrors($v->errors());
                }
                
                $administrador = (string)$request->input('administrador');
                $nombre = (string)$request->input('nombre');
                $acceso = (int)$request->input('acceso');
                $lang = (string)$request->input('lang');

                try {
                    $repo = new Repositorio;
                    $repo->nombre = $nombre;
                    $repo->privPub = $acceso;
                    if($lang!=''){
                        $repo->lang = $lang;
                    }
                    $repo->administrador = $administrador;
                    $repo->save();

                    DB::table('wiki')->insert(['id_repo' => $repo->id]);
                    
                    return view('1nuevoRepositorioPostear');
                }
                catch(\Exception $e) {
                    return view('error');
                }
    }
    

    public function commitsRepositorio($id) {
        
        $commits = DB::table('commit')->where('id_repo',$id)->paginate(10);
        $repo = DB::table('repositorios')->where('id',$id)->first();
        $users = DB::table('users')->get();
        return view('1commits')->with('valores',$commits)->with('repo',$repo)->with('users',$users);
    }


    // AQUI ACABA EL CODIGO NUEVO

























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


    public function userProfile($id) {
        $usuario = User::where('id',$id)->first();
        return view('useruser')->with('valores', $usuario);
    }

    public function borrarUsuario($id){

        $tarea = User::where('id',$id)->first();
        $tarea->delete();

        LaravelSweetAlert::setMessageSuccess("Usuario Borrado");

        $agentes = DB::table('users')->paginate(10);
        
        return redirect('usuarios')->with('valores', $agentes);
    }


    public function logout()
    {
        \Auth::logout();
        return redirect('/');
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

}
