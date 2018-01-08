<?php

use Illuminate\Database\Seeder;

class Denuncia_UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('denuncia_users')->delete();

        $denuncia = DB::table('denuncias')->where('id',1)->first();
        $user = DB::table('users')->where('email','miguel@gmail.com')->first();
        
        DB::table('denuncia_users')->insert(['denuncia_id' => $denuncia->id,'user_id' => $user->email]);

        $denuncia = DB::table('denuncias')->where('id',2)->first();
         $user = DB::table('users')->where('email','miguel@gmail.com')->first();
        
        DB::table('denuncia_users')->insert(['denuncia_id' => $denuncia->id,'user_id' => $user->email]);

        $denuncia = DB::table('denuncias')->where('id',3)->first();
        $user = DB::table('users')->where('email','rodrigomanresa@gmail.com')->first();

        DB::table('denuncia_users')->insert(['denuncia_id' => $denuncia->id,'user_id' => $user->email]);

        $denuncia = DB::table('denuncias')->where('id',4)->first();
        $user = DB::table('users')->where('email','bparker@gmail.com')->first();
        DB::table('denuncia_users')->insert(['denuncia_id' => $denuncia->id,'user_id' => $user->email]);

         $denuncia = DB::table('denuncias')->where('id',5)->first();
        $user = DB::table('users')->where('email','antoniomanuel@gmail.com')->first();
        DB::table('denuncia_users')->insert(['denuncia_id' => $denuncia->id,'user_id' => $user->email]);

         $denuncia = DB::table('denuncias')->where('id',6)->first();
        $user = DB::table('users')->where('email','carmelogarcia@gmail.com')->first();
        DB::table('denuncia_users')->insert(['denuncia_id' => $denuncia->id,'user_id' => $user->email]);

         $denuncia = DB::table('denuncias')->where('id',7)->first();
        $user = DB::table('users')->where('email','ricardosantos@gmail.com')->first();
        DB::table('denuncia_users')->insert(['denuncia_id' => $denuncia->id,'user_id' => $user->email]);

         $denuncia = DB::table('denuncias')->where('id',8)->first();
        $user = DB::table('users')->where('email','juanmanuelrives@gmail.com')->first();
        DB::table('denuncia_users')->insert(['denuncia_id' => $denuncia->id,'user_id' => $user->email]);

         $denuncia = DB::table('denuncias')->where('id',9)->first();
        $user = DB::table('users')->where('email','pablosantos@gmail.com')->first();
        DB::table('denuncia_users')->insert(['denuncia_id' => $denuncia->id,'user_id' => $user->email]);

         $denuncia = DB::table('denuncias')->where('id',10)->first();
        $user = DB::table('users')->where('email','placidico432@gmail.com')->first();
        DB::table('denuncia_users')->insert(['denuncia_id' => $denuncia->id,'user_id' => $user->email]);

         $denuncia = DB::table('denuncias')->where('id',11)->first();
        $user = DB::table('users')->where('email','rodrigomanresa@gmail.com')->first();
        DB::table('denuncia_users')->insert(['denuncia_id' => $denuncia->id,'user_id' => $user->email]);

         $denuncia = DB::table('denuncias')->where('id',12)->first();
        $user = DB::table('users')->where('email','antoniomanuel@gmail.com')->first();
        DB::table('denuncia_users')->insert(['denuncia_id' => $denuncia->id,'user_id' => $user->email]);

        $denuncia = DB::table('denuncias')->where('id',13)->first();
        $user = DB::table('users')->where('email','ricardosantos@gmail.com')->first();
        DB::table('denuncia_users')->insert(['denuncia_id' => $denuncia->id,'user_id' => $user->email]);

        $denuncia = DB::table('denuncias')->where('id',14)->first();
        $user = DB::table('users')->where('email','juanmanuelrives@gmail.com')->first();
        DB::table('denuncia_users')->insert(['denuncia_id' => $denuncia->id,'user_id' => $user->email]);
    }
}
