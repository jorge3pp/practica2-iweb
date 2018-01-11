<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->delete();
        /*
	
     DB::table('users')->insert(['name' => 'Pedro Antonio Moya','email' => 'pedroantonino123@gmail.com',
        'DNI' => '76154863M','password' => bcrypt('prueba123'),'rol' => 2, 'telefono' => 601024789, 
        'direccion' => 'C/ Gran Huerto 35 Valencia']);

        DB::table('users')->insert(['name' => 'Agente Pedro','email' => 'pedro@gmail.com',
        'DNI' => '1222312M','password' => bcrypt('prueba123'),'rol' => 2, 'telefono' => 601004789,
        'direccion' => 'C/ Gran Huerto 35 Valencia']);

        DB::table('users')->insert(['name' => 'Placido Antonio Lopez','email' => 'placidico432@gmail.com',
        'DNI' => '72468135R','password' => bcrypt('prueba123'), 'telefono' => 716475147,
        'direccion' => 'C/ Gran Huerto 40 Cox']);

        DB::table('users')->insert(['name' => 'Jorge Poveda Perez','email' => 'jorge_elda_1996@gmail.com',
        'DNI' => '51435204J','password' => bcrypt('prueba123'), 'telefono' => 620482525,
        'direccion' => 'C/ Pequeño Huerto 35 Valencia']);

        DB::table('users')->insert(['name' => 'Jorge Garcia Serrano','email' => 'jorgicoserrano96@gmail.com',
        'DNI' => '30415982L','password' => bcrypt('prueba123'), 'rol' => 2, 'telefono' => 632521084,
        'direccion' => 'C/ Gran Camino 35 Castellon']);


        DB::table('users')->insert(['name' => 'Miguel Pérez','email' => 'miguel@gmail.com',
        'DNI' => '54678912M','password' => bcrypt('prueba123'),
        'telefono' => 601674789,'direccion' => 'C/ Orihuela Nº16']);

        //$pass_cifrada = bcrypt('administrador123');
        */
        DB::table('users')->insert(['name' => 'Administrador','email' => 'Admin@admin.com',
        'password' => bcrypt('administrador123')]);
        /*
        DB::table('users')->insert(['name' => 'Juan Ramos Ávila','email' => 'juanra_avila@gmail.com',
        'DNI' => '30418882L','password' => bcrypt('prueba123'), 'rol' => 2, 'telefono' => 632891084,
        'direccion' => 'C/ Camino Enmedio 15 Alicante']);

        DB::table('users')->insert(['name' => 'Manuel Pérez Hernandez','email' => 'manuperez12@gmail.com',
        'DNI' => '30415977L','password' => bcrypt('prueba123'), 'rol' => 2, 'telefono' => 632521084,
        'direccion' => 'C/ Gran Casino 15 Castellon']);

        DB::table('users')->insert(['name' => 'Manuel Poveda','email' => 'manuelpoveda@gmail.com',
        'DNI' => '39915982L','password' => bcrypt('prueba123'), 'rol' => 2, 'telefono' => 637874159,
        'direccion' => 'C/ San Nicolas 35 Valencia']);

        DB::table('users')->insert(['name' => 'Antonio Garrido','email' => 'antoniogarrido@gmail.com',
        'DNI' => '30415872L','password' => bcrypt('prueba123'), 'rol' => 2, 'telefono' => 65849500,
        'direccion' => 'C/ San Mateo 35 Valencia']);

        DB::table('users')->insert(['name' => 'Samuel L Jackson','email' => 'samulj@gmail.com',
        'DNI' => '30481982L','password' => bcrypt('prueba123'), 'rol' => 2, 'telefono' => 635847520,
        'direccion' => 'C/ San Miguel 35 Valencia']);

        DB::table('users')->insert(['name' => 'Matt Damon','email' => 'mdamon@gmail.com',
        'DNI' => '37715982L','password' => bcrypt('prueba123'), 'rol' => 2, 'telefono' => 698745641,
        'direccion' => 'C/ Gran Camino 35 Castellon']);

        DB::table('users')->insert(['name' => 'Brad Pitt','email' => 'bpitt@gmail.com',
        'DNI' => '30419582L','password' => bcrypt('prueba123'), 'rol' => 2, 'telefono' => 698745641,
        'direccion' => 'C/ San Gabriel 35 Valencia']);

        DB::table('users')->insert(['name' => 'Bryan Parker','email' => 'bparker@gmail.com',
        'DNI' => '30418776L','password' => bcrypt('prueba123'), 'telefono' => 698745686,
        'direccion' => 'C/ San Judas Tadeo 35 Valencia']);

        DB::table('users')->insert(['name' => 'Antonio Manuel Navarro','email' => 'antoniomanuel@gmail.com',
        'DNI' => '41288675L','password' => bcrypt('prueba123'), 'telefono' => 614848206,
        'direccion' =>  'C/ Carlos I 35 Valencia']);

        DB::table('users')->insert(['name' => 'Carmelo Garcia','email' => 'carmelogarcia@gmail.com',
        'DNI' => '30495182L','password' => bcrypt('prueba123'), 'telefono' => 632521084,
        'direccion' => 'C/ Fernado V 35 Valencia']);

        DB::table('users')->insert(['name' => 'Ricardo Santos','email' => 'ricardosantos@gmail.com',
        'DNI' => '30489512L','password' => bcrypt('prueba123'), 'telefono' => 7861478998,
        'direccion' => 'C/ San Teodoro 39 Valencia']);

        DB::table('users')->insert(['name' => 'Juan Manuel Rives','email' => 'juanmanuelrives@gmail.com',
        'DNI' => '31282768L','password' => bcrypt('prueba123'), 'telefono' => 698744741,
        'direccion' => 'C/ Santa Isabel 35 Valencia']);

        DB::table('users')->insert(['name' => 'Pablo Santos','email' => 'pablosantos@gmail.com',
        'DNI' => '51403982L','password' => bcrypt('prueba123'), 'telefono' => 695142595,
        'direccion' => 'C/ Las Virturdes 35 Valencia']);

        DB::table('users')->insert(['name' => 'Rodrigo Manresa','email' => 'rodrigomanresa@gmail.com',
        'DNI' => '28951403L','password' => bcrypt('prueba123'), 'telefono' => 714848204,
        'direccion' => 'C/ San Bartolome 35 Valencia']);
        */
    }
}
