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
        $pull = DB::table('pulls')->where('nombre','Primer PR en pedroantonino')->first();

        //DB::table('commit')->insert(['nombre' => 'Cambios en la vista','cambios' => 'Vista de los productos','id_usuario' => $autor->id, 'id_pr' => $pull->id ]);
    
    }
}
