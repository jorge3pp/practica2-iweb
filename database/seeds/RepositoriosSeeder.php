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
        $admin2 = DB::table('users')->where('email' ,'Admin@admin.com')->first();

        DB::table('repositorios')->insert(['nombre' => 'IngenieriaWeb Mola','administrador' => $admin->id, 'estrellas'=> 0,
            'contador_seguidores' => 1, 'privPub' => '0' , 'lang' => 'C++']);
        
        DB::table('repositorios')->insert(['nombre' => 'Repositorio publico','administrador' => $admin->id, 'estrellas'=> 1234,
            'contador_seguidores' => 123, 'privPub' => '1' , 'lang' => 'Java']);

        DB::table('repositorios')->insert(['nombre' => 'Repositorio publico 2','administrador' => $admin->id, 'estrellas'=> 341,
            'contador_seguidores' => 4, 'privPub' => '1' , 'lang' => 'PHP']);

        DB::table('repositorios')->insert(['nombre' => 'Repositorio publico 3','administrador' => $admin2->id, 'estrellas'=> 311,
        'contador_seguidores' => 6, 'privPub' => '1' , 'lang' => 'C#']);

            /*
            Me va a tocar hacer una tabla aparte llamada lista_usuarios_repo y guardar ahi un usuario y un repositorio por tupla. Para hacer la lista
            solo tendria que hacer un select * from lista_usuarios_repo where id_repo=repo // para conseguir la lista de users de un repo y viceversa 
            */
            
    }
}
