<?php

use Illuminate\Database\Seeder;

class CommitSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('commit')->delete();
        
        $autor = DB::table('users')->where('email','pedroantonino123@gmail.com')->first();
        $repositorio = DB::table('repositorios')->where('nombre', 'IngenieriaWeb Mola')->first();

        DB::table('commit')->insert(['nombre' => 'Cambios en la vista','cambios' => 'Vista de los productos','id_usuario' => $autor->id, 'id_repo' => $repositorio->id ]);
        DB::table('commit')->insert(['nombre' => 'Cambios en el routes','cambios' => 'Get y Post del modificar articulo','id_usuario' => $autor->id, 'id_repo' => $repositorio->id ]);
        
    }
}
