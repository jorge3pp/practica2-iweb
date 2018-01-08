<?php

use Illuminate\Database\Seeder;

class UsuariosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('usuarios')->delete();
        
         DB::table('usuarios')->insert(['name' => 'Pedro Antonio Moya','email' => 'pedroantonino123@gmail.com',
            'password' => bcrypt('prueba123')]);
    
            DB::table('usuarios')->insert(['name' => 'Agente Pedro','email' => 'pedro@gmail.com',
            'password' => bcrypt('prueba123')]);
    
            DB::table('usuarios')->insert(['name' => 'Placido Antonio Lopez','email' => 'placidico432@gmail.com',
            'password' => bcrypt('prueba123')]);
    
            DB::table('usuarios')->insert(['name' => 'Jorge Poveda Perez','email' => 'jorge_elda_1996@gmail.com',
            'password' => bcrypt('prueba123')]);
    
            DB::table('usuarios')->insert(['name' => 'Jorge Garcia Serrano','email' => 'jorgicoserrano96@gmail.com',
            'password' => bcrypt('prueba123')]);
    
    
            DB::table('usuarios')->insert(['name' => 'Miguel Pérez','email' => 'miguel@gmail.com',
            'password' => bcrypt('prueba123')]);
    
            //$pass_cifrada = bcrypt('administrador123');
            
            DB::table('usuarios')->insert(['name' => 'Administrador','email' => 'Admin@admin.com',
            'password' => bcrypt('administrador123'),]);
    
            DB::table('usuarios')->insert(['name' => 'Juan Ramos Ávila','email' => 'juanra_avila@gmail.com',
            'password' => bcrypt('prueba123')]);
    
            DB::table('usuarios')->insert(['name' => 'Manuel Pérez Hernandez','email' => 'manuperez12@gmail.com',
            'password' => bcrypt('prueba123')]);
    
            DB::table('usuarios')->insert(['name' => 'Manuel Poveda','email' => 'manuelpoveda@gmail.com',
            'password' => bcrypt('prueba123')]);
    
            DB::table('usuarios')->insert(['name' => 'Antonio Garrido','email' => 'antoniogarrido@gmail.com',
            'password' => bcrypt('prueba123')]);
    
            DB::table('usuarios')->insert(['name' => 'Samuel L Jackson','email' => 'samulj@gmail.com',
            'password' => bcrypt('prueba123')]);
    
            DB::table('usuarios')->insert(['name' => 'Matt Damon','email' => 'mdamon@gmail.com',
            'password' => bcrypt('prueba123')]);
    
            DB::table('usuarios')->insert(['name' => 'Brad Pitt','email' => 'bpitt@gmail.com',
            'password' => bcrypt('prueba123')]);
    
            DB::table('usuarios')->insert(['name' => 'Bryan Parker','email' => 'bparker@gmail.com',
            'password' => bcrypt('prueba123')]);
    
            DB::table('usuarios')->insert(['name' => 'Antonio Manuel Navarro','email' => 'antoniomanuel@gmail.com',
            'password' => bcrypt('prueba123')]);
    
            DB::table('usuarios')->insert(['name' => 'Carmelo Garcia','email' => 'carmelogarcia@gmail.com',
            'password' => bcrypt('prueba123')]);
    
            DB::table('usuarios')->insert(['name' => 'Ricardo Santos','email' => 'ricardosantos@gmail.com',
            'password' => bcrypt('prueba123')]);
    
            DB::table('usuarios')->insert(['name' => 'Juan Manuel Rives','email' => 'juanmanuelrives@gmail.com',
            'password' => bcrypt('prueba123')]);
    
            DB::table('usuarios')->insert(['name' => 'Pablo Santos','email' => 'pablosantos@gmail.com',
            'password' => bcrypt('prueba123')]);
    
            DB::table('usuarios')->insert(['name' => 'Rodrigo Manresa','email' => 'rodrigomanresa@gmail.com',
            'password' => bcrypt('prueba123')]);
    }
}
