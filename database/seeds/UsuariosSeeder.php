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
        
         DB::table('usuarios')->insert(['nombre_usuario' => 'Pedro Antonio Moya','email' => 'pedroantonino123@gmail.com',
            'password' => bcrypt('prueba123')]);
    
            DB::table('usuarios')->insert(['nombre_usuario' => 'Agente Pedro','email' => 'pedro@gmail.com',
            'password' => bcrypt('prueba123')]);
    
            DB::table('usuarios')->insert(['nombre_usuario' => 'Placido Antonio Lopez','email' => 'placidico432@gmail.com',
            'password' => bcrypt('prueba123')]);
    
            DB::table('usuarios')->insert(['nombre_usuario' => 'Jorge Poveda Perez','email' => 'jorge_elda_1996@gmail.com',
            'password' => bcrypt('prueba123')]);
    
            DB::table('usuarios')->insert(['nombre_usuario' => 'Jorge Garcia Serrano','email' => 'jorgicoserrano96@gmail.com',
            'password' => bcrypt('prueba123')]);
    
    
            DB::table('usuarios')->insert(['nombre_usuario' => 'Miguel Pérez','email' => 'miguel@gmail.com',
            'password' => bcrypt('prueba123')]);
    
            //$pass_cifrada = bcrypt('administrador123');
            
            DB::table('usuarios')->insert(['nombre_usuario' => 'Administrador','email' => 'Admin@admin.com',
            'password' => bcrypt('administrador123'),]);
    
            DB::table('usuarios')->insert(['nombre_usuario' => 'Juan Ramos Ávila','email' => 'juanra_avila@gmail.com',
            'password' => bcrypt('prueba123')]);
    
            DB::table('usuarios')->insert(['nombre_usuario' => 'Manuel Pérez Hernandez','email' => 'manuperez12@gmail.com',
            'password' => bcrypt('prueba123')]);
    
            DB::table('usuarios')->insert(['nombre_usuario' => 'Manuel Poveda','email' => 'manuelpoveda@gmail.com',
            'password' => bcrypt('prueba123')]);
    
            DB::table('usuarios')->insert(['nombre_usuario' => 'Antonio Garrido','email' => 'antoniogarrido@gmail.com',
            'password' => bcrypt('prueba123')]);
    
            DB::table('usuarios')->insert(['nombre_usuario' => 'Samuel L Jackson','email' => 'samulj@gmail.com',
            'password' => bcrypt('prueba123')]);
    
            DB::table('usuarios')->insert(['nombre_usuario' => 'Matt Damon','email' => 'mdamon@gmail.com',
            'password' => bcrypt('prueba123')]);
    
            DB::table('usuarios')->insert(['nombre_usuario' => 'Brad Pitt','email' => 'bpitt@gmail.com',
            'password' => bcrypt('prueba123')]);
    
            DB::table('usuarios')->insert(['nombre_usuario' => 'Bryan Parker','email' => 'bparker@gmail.com',
            'password' => bcrypt('prueba123')]);
    
            DB::table('usuarios')->insert(['nombre_usuario' => 'Antonio Manuel Navarro','email' => 'antoniomanuel@gmail.com',
            'password' => bcrypt('prueba123')]);
    
            DB::table('usuarios')->insert(['nombre_usuario' => 'Carmelo Garcia','email' => 'carmelogarcia@gmail.com',
            'password' => bcrypt('prueba123')]);
    
            DB::table('usuarios')->insert(['nombre_usuario' => 'Ricardo Santos','email' => 'ricardosantos@gmail.com',
            'password' => bcrypt('prueba123')]);
    
            DB::table('usuarios')->insert(['nombre_usuario' => 'Juan Manuel Rives','email' => 'juanmanuelrives@gmail.com',
            'password' => bcrypt('prueba123')]);
    
            DB::table('usuarios')->insert(['nombre_usuario' => 'Pablo Santos','email' => 'pablosantos@gmail.com',
            'password' => bcrypt('prueba123')]);
    
            DB::table('usuarios')->insert(['nombre_usuario' => 'Rodrigo Manresa','email' => 'rodrigomanresa@gmail.com',
            'password' => bcrypt('prueba123')]);
    }
}
