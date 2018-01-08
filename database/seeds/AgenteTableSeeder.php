<?php

use Illuminate\Database\Seeder;


class AgenteTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('agentes')->delete();

        //----------------------------------------------------------------------
        $cuartel = DB::table('cuartels')->where('nombre','Alicante')->first();

        $users = DB::table('users')->where('email','pedroantonino123@gmail.com')->first();
        DB::table('agentes')->insert(['id' => 7139,'nombre' => 'Pedro Antonio Moya','cuartel_id' => $cuartel->id ,'user_id' => $users->email]);
        
        $users = DB::table('users')->where('email','jorgicoserrano96@gmail.com')->first();
        DB::table('agentes')->insert(['id' => 2675,'nombre' => 'Jorge Garcia Serrano','cuartel_id' => $cuartel->id ,'user_id' => $users->email]);

        //--------------------------------------------------------------------------------------------
        $cuartel = DB::table('cuartels')->where('nombre','Valencia')->first();

        $users = DB::table('users')->where('email','pedro@gmail.com')->first();
        DB::table('agentes')->insert(['id' => 4973,'nombre' => 'Agente Pedro','cuartel_id' => $cuartel->id ,'user_id' => $users->email]);
        
        $users = DB::table('users')->where('email','juanra_avila@gmail.com')->first();
        DB::table('agentes')->insert(['id' => 8139,'nombre' => 'Juan Ramos Ávila','cuartel_id' => $cuartel->id ,'user_id' => $users->email]);
        
        //----------------------------------------------------------------------------------------------------------------
        $cuartel = DB::table('cuartels')->where('nombre','Castellon')->first();

        $users = DB::table('users')->where('email','manuperez12@gmail.com')->first();
        DB::table('agentes')->insert(['id' => 3679,'nombre' => 'Manuel Pérez Hernandez','cuartel_id' => $cuartel->id ,'user_id' => $users->email]);
        
        $users = DB::table('users')->where('email','manuelpoveda@gmail.com')->first();
        DB::table('agentes')->insert(['id' => 6134,'nombre' => 'Manuel Poveda','cuartel_id' => $cuartel->id ,'user_id' => $users->email]);


        //---------------------------------------------------------------------------------------------------------------------
         $cuartel = DB::table('cuartels')->where('nombre','Murcia')->first();

        $users = DB::table('users')->where('email','antoniogarrido@gmail.com')->first();
        DB::table('agentes')->insert(['id' => 5728,'nombre' => 'Antonio Garrido','cuartel_id' => $cuartel->id ,'user_id' => $users->email]);
        
        $users = DB::table('users')->where('email','samulj@gmail.com')->first();
        DB::table('agentes')->insert(['id' => 6139,'nombre' => 'Samuel L Jackson','cuartel_id' => $cuartel->id ,'user_id' => $users->email]);

        //---------------------------------------------------------------------------------------------------------------------
         $cuartel = DB::table('cuartels')->where('nombre','Albacete')->first();

        $users = DB::table('users')->where('email','mdamon@gmail.com')->first();
        DB::table('agentes')->insert(['id' => 1675,'nombre' => 'Matt Damon','cuartel_id' => $cuartel->id ,'user_id' => $users->email]);
        
        $users = DB::table('users')->where('email','bpitt@gmail.com')->first();
        DB::table('agentes')->insert(['id' => 4134,'nombre' => 'Brad Pitt','cuartel_id' => $cuartel->id ,'user_id' => $users->email]);

        
        
    }
}