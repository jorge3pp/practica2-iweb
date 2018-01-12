<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
use App\Agente;
use App\Cuartel;
use App\Denuncia;

Route::get('/','WebController@app');


Route::get('/cuartelesp','WebController@cuartelesPublic');


Route::group(['middleware' => 'partePrivadaUser'], function() {
    Route::get('/denunciasp','WebController@denunciasPublic');
    Route::get('/usuariodenuncia/{id}','WebController@usuarioDenuncia');
    Route::get('/pagar/denuncia/{id}','WebController@pagarDenuncia');
    Route::post('/pagar/denuncia/{id}','WebController@pagarDenuncias');
    Route::get('/pedircita/{id}','WebController@pedirCita');
    Route::post('/pedircita/{id}','WebController@pedirCitaPostear');
    Route::get('/profile', 'WebController@profile');
    Route::post('/profile/storage_img', 'WebController@save');
    Route::get('citasp','WebController@citasMostrar');
    Route::get('/cancelarCita/{id}','WebController@cancelarCita');

    Route::get('/tareas','WebController@tareas');

    Route::get('/tareasporagente','WebController@tareasporAgente');
    Route::get('/cuartelesporagente','WebController@cuartelesporAgente');
    Route::get('/denunciasporagente','WebController@denunciasAgente');
    Route::get('/denunciasporagente/insertar','WebController@insertarDenunciaAgente');
    Route::post('/denunciasporagente/insertar','WebController@insertarDenunciaAgentePostear');

    //RUTAS NUEVAS

    Route::get('/repositorios','WebController@repositoriosUsuario');
    Route::get('/repositorios/{id}','WebController@repositoriosUsuario');

    Route::get('/new','WebController@formNuevoProyecto');
    Route::post('/new','WebController@nuevoProyectoPostear');
});

Route::group(['middleware' => 'partePrivadaAdmin'], function() {

    Route::get('/usuarios','WebController@usuarios');
    Route::get('/borrar','WebController@borrar');
    
    Route::get('/agentes','WebController@agentes');
    Route::get('/denuncias','WebController@denuncias');
    Route::get('/modificar','WebController@modificar');

    Route::get('/modificar/usuario','WebController@modificarUsuario');
    Route::post('/modificar/usuario','WebController@modificarUsuarioPostear');
    Route::get('/modificar/cuartel','WebController@modificarCuartel');
    Route::post('/modificar/cuartel','WebController@modificarCuartelPostear');
    Route::get('/modificar/denuncia','WebController@modificarDenuncia');
    Route::post('/modificar/denuncia','WebController@modificarDenunciaPostear');
    Route::get('/modificar/tarea','WebController@modificarTarea');
    Route::post('/modificar/tarea','WebController@modificarTareaPostear');
    Route::get('/insertar','WebController@insertar');
    Route::get('/insertar/usuario','WebController@insertarUsuario');
    Route::post('/insertar/usuario','WebController@insertarUsuarioPostear');
    Route::get('/insertar/agente','WebController@insertarAgente');
    Route::post('/insertar/agente','WebController@insertarAgentePostear');
    Route::get('/insertar/cuartel','WebController@insertarCuartel');
    Route::post('/insertar/cuartel','WebController@insertarCuartelPostear');
    Route::get('/insertar/denuncia','WebController@insertarDenuncia');
    Route::post('/insertar/denuncia','WebController@insertarDenunciaPostear');
    Route::get('/insertar/tarea','WebController@insertarTarea');
    Route::post('/insertar/tarea','WebController@insertarTareaPostear');
    Route::get('/modificar/agente/{id}','WebController@modificarAgente');

    Route::post('/modificar/agente/{id}','WebController@modificarAgentePostear');
    Route::get('/modificar/cuartel/{id}','WebController@modificarCuartel');
    Route::post('/modificar/cuartel/{id}','WebController@modificarCuartelPostear');
    Route::get('/modificar/denuncia/{id}','WebController@modificarDenuncia');
    Route::post('/modificar/denuncia/{id}','WebController@modificarDenunciaPostear');
    Route::get('/modificar/tarea/{id}','WebController@modificarTarea');
    Route::post('/modificar/tarea/{id}','WebController@modificarTareaPostear');
    Route::get('/modificar/usuario/{id}','WebController@modificarUsuario');

    Route::post('/modificar/usuario/{id}','WebController@modificarUsuarioPostear');
    Route::post('/modificar/tarea/{id}','WebController@modificarTareaPostear');

    Route::get('/finalizar/tarea/{id}','WebController@finalizarTarea');

    Route::get('usuarios/{id}','WebController@usuarioDenuncia');
    Route::get('/agentes/{id}','WebController@agenteUser');
    Route::get('/search','WebController@search');
    

    Route::get('/cuarteles','WebController@cuarteles');

    Route::get('/agentes/borrado/{id}','WebController@borrarAgente');

    Route::get('/cuarteles/borrado/{id}','WebController@borrarCuartel');

    Route::get('/denuncias/borrado/{id}','WebController@borrarDenuncia');

    Route::get('/tareas/borrado/{id}','WebController@borrarTarea');

    Route::get('/usuarios/borrado/{id}','WebController@borrarUsuario');


});

//Route::get('/borrar','WebController@borrar');

Route::get('/nologin','WebController@nologin');

Route::get('/noadmin','WebController@noadmin');

//Route::post('/borrar','WebController@borrarPostear');

Route::get('/error','WebController@error');

Route::get('/error404','WebController@error404');


    
Route::get('/especial','WebController@especial');



Route::get('cuarteles/{id}','WebController@cuartelAgente');
Route::get('/agentes/denuncias/{id}','WebController@denunciaAgente');
Route::get('/agentes/tareas/{id}','WebController@agentesTareas');
Route::get('/agentestareaserror');

Route::get('/tareas/agentes/{id}','WebController@tareasAgentes');



Auth::routes();

Route::get('/home', 'HomeController@index');

Route::get('auth/logout', 'WebController@logout');
