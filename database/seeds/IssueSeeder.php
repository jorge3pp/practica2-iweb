<?php

use Illuminate\Database\Seeder;

class IssueSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('issues')->delete();
        
        $admin = DB::table('users')->where('email','pedroantonino123@gmail.com')->first();

        $repositorio = DB::table('repositorios')->where('nombre', 'IngenieriaWeb Mola')->first();

        
        DB::table('issues')->insert(['nombre' => 'Primer Issue de pedroantonino','estado' => 'abierto','descripcion' => 'La mejor descripcion del mundo entero jejeje','id_usuario' => $admin->id, 'id_repo'=> $repositorio->id]);
        DB::table('issues')->insert(['nombre' => 'Segundo Issue de pedroantonino','estado' => 'cerrado','descripcion' => 'La mejor descripcion del mundo entero jejeje','id_usuario' => $admin->id, 'id_repo'=> $repositorio->id]);
        DB::table('issues')->insert(['nombre' => 'Tercero Issue de pedroantonino','estado' => 'abierto','descripcion' => 'La mejor descripcion del mundo entero jejeje','id_usuario' => $admin->id, 'id_repo'=> $repositorio->id]);
    }
}
