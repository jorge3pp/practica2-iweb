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
        DB::table('issue')->delete();
        
        $admin = DB::table('users')->where('email','pedroantonino123@gmail.com')->first();

        $repositorio = DB::table('repositorios')->where('nombre', 'IngenieriaWeb Mola')->first();

        DB::table('issue')->insert(['nombre' => 'Primer Issue de pedroantonino','estado' => 'abierto','id_usuario' => $admin->id, 'id_repo'=> $repositorio->id]);
    }
}
