<?php

use Illuminate\Database\Seeder;

class RepositoriosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('repositorios')->delete();
        
        $admin = DB::table('users')->where('email','pedroantonino123@gmail.com')->first();

        DB::table('repositorios')->insert(['nombre' => 'IngenieriaWeb Mola','administrador' => $admin->id, 'estrellas'=> 0,
            'contador_seguidores' => 1 ]);
        
        DB::table('repositorios')->insert(['nombre' => 'Repositorio publico','administrador' => $admin->id, 'estrellas'=> 1234,
            'contador_seguidores' => 123, 'privPub' => '1' ]);

            /*
            Me va a tocar hacer una tabla aparte llamada lista_usuarios_repo y guardar ahi un usuario y un repositorio por tupla. Para hacer la lista
            solo tendria que hacer un select * from lista_usuarios_repo where id_repo=repo // para conseguir la lista de users de un repo y viceversa 
            */
            
    }
}
