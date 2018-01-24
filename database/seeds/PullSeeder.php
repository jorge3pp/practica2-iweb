<?php

use Illuminate\Database\Seeder;

class PullSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('p_rs')->delete();
        
        $admin = DB::table('users')->where('email','pedroantonino123@gmail.com')->first();

        $repositorio = DB::table('repositorios')->where('nombre', 'IngenieriaWeb Mola')->first();

        
        DB::table('p_rs')->insert(['nombre' => 'Primer PR en pedroantonino','estado' => 'abierto','descripcion' => 'La mejor descripcion del mundo entero','id_usuario' => $admin->id, 'id_repo'=> $repositorio->id, 'id_issue' => '0']);
        DB::table('p_rs')->insert(['nombre' => 'Segundo PR en pedroantonino','estado' => 'abierto','descripcion' => 'La mejor descripcion del mundo entero jejeje','id_usuario' => $admin->id, 'id_repo'=> $repositorio->id, 'id_issue' => '0']);
        DB::table('p_rs')->insert(['nombre' => 'Tercer PR en pedroantonino','estado' => 'cerrado','descripcion' => 'La mejor descripcion del mundo entero jejeje','id_usuario' => $admin->id, 'id_repo'=> $repositorio->id, 'id_issue' => '0']);
        //DB::table('issues')->insert(['nombre' => 'Segundo Issue de pedroantonino','estado' => 'cerrado','descripcion' => 'La mejor descripcion del mundo entero jejeje','id_usuario' => $admin->id, 'id_repo'=> $repositorio->id]);
        //B::table('issues')->insert(['nombre' => 'Tercero Issue de pedroantonino','estado' => 'abierto','descripcion' => 'La mejor descripcion del mundo entero jejeje','id_usuario' => $admin->id, 'id_repo'=> $repositorio->id]);
    }
}
