<?php

use Illuminate\Database\Seeder;

class ListaUsuariosRepoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('lista_usuarios_repo')->delete();
        

        $user = DB::table('users')->where('email','pedroantonino123@gmail.com')->first();
        
        $repo = DB::table('repositorios')->where('nombre','IngenieriaWeb Mola')->first();

        DB::table('lista_usuarios_repo')->insert(['id_usuario' => $user->id,'id_repo' => $repo->id]);


        $repo = DB::table('repositorios')->where('nombre','Repositorio publico')->first();

        DB::table('lista_usuarios_repo')->insert(['id_usuario' => $user->id,'id_repo' => $repo->id]);


        $repo = DB::table('repositorios')->where('nombre','Repositorio publico 2')->first();

        DB::table('lista_usuarios_repo')->insert(['id_usuario' => $user->id,'id_repo' => $repo->id]);
    }
}
