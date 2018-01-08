<?php

use Illuminate\Database\Seeder;

class DenunciaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('denuncias')->delete();

        $agente = DB::table('agentes')->where('id',7139)->first();
        $user = DB::table('users')->where('email','miguel@gmail.com')->first();
        DB::table('denuncias')->insert(['id' => 1,'user_id' => $user->email, 'nombre' => 'Robo','motivo' 
        => 'Esta persona ha denunciado a otra persona por robar pertenencias ajenas.','agente_id' => $agente->id, 'importe_multa'=> 190]);        
        
        //----------------------------------------------------------------------------
        $agente = DB::table('agentes')->where('id',4973)->first();
        $user = DB::table('users')->where('email','miguel@gmail.com')->first();
        DB::table('denuncias')->insert(['id' => 2,'user_id' => $user->email, 'nombre' => 'Robo','motivo' 
        => 'Esta persona ha denunciado a otra persona por robar en un banco.','agente_id' => $agente->id, 'importe_multa'=> 180]);
 
        //----------------------------------------------------------------------------
        $agente = DB::table('agentes')->where('id',8139)->first();
        $user = DB::table('users')->where('email','rodrigomanresa@gmail.com')->first();
        DB::table('denuncias')->insert(['id' => 3,'user_id' => $user->email, 'nombre' => 'Asesinato',
        'motivo' => 'Esta persona ha denunciado a otra persona por asesinar a otra por arma blanca.','agente_id' => $agente->id,'importe_multa'=> 150]);
        //----------------------------------------------------------------------------
        $agente = DB::table('agentes')->where('id',6134)->first();
        $user = DB::table('users')->where('email','bparker@gmail.com')->first();
        DB::table('denuncias')->insert(['id' => 4,'user_id' => $user->email, 'nombre' => 'Maltrato','motivo' => 'Esta persona ha denunciado a otra persona por maltratar animales.','agente_id' => $agente->id,'importe_multa'=> 200]);
        //-----------------------------------------------------------------------------
        $agente = DB::table('agentes')->where('id',5728)->first();
        $user = DB::table('users')->where('email','antoniomanuel@gmail.com')->first();
        DB::table('denuncias')->insert(['id' => 5,'user_id' => $user->email, 'nombre' => 'Tráfico','motivo' => 'Esta persona ha denunciado a otra persona por estacionar en parada de autobús.','agente_id' => $agente->id,'importe_multa'=> 80]);
        //-----------------------------------------------------------------------------
        $agente = DB::table('agentes')->where('id',3679)->first();
        $user = DB::table('users')->where('email','carmelogarcia@gmail.com')->first();
        DB::table('denuncias')->insert(['id' => 6,'user_id' => $user->email, 'nombre' => 'Maltrato','motivo' => 'Esta persona ha denunciado a otra persona por maltratar a una mujer.','agente_id' => $agente->id,'importe_multa'=> 185]);
        //-----------------------------------------------------------------------------
        $agente = DB::table('agentes')->where('id',1675)->first();
        $user = DB::table('users')->where('email','ricardosantos@gmail.com')->first();
        DB::table('denuncias')->insert(['id' => 7,'user_id' => $user->email, 'nombre' => 'Robo','motivo' => 'Esta persona ha denunciado a otra persona por realizar el robo en una carniceria.','agente_id' => $agente->id,'importe_multa'=> 140]);
        //-----------------------------------------------------------------------------
        $agente = DB::table('agentes')->where('id',4134)->first();
        $user = DB::table('users')->where('email','juanmanuelrives@gmail.com')->first();
        DB::table('denuncias')->insert(['id' => 8,'user_id' => $user->email, 'nombre' => 'Robo','motivo' => 'Esta persona ha denunciado a otra persona por apropiación indevida de fondos públicos.','agente_id' => $agente->id,'importe_multa'=> 160]);
        //-----------------------------------------------------------------------------
        $agente = DB::table('agentes')->where('id',1675)->first();
        $user = DB::table('users')->where('email','pablosantos@gmail.com')->first();
        DB::table('denuncias')->insert(['id' => 9,'user_id' => $user->email, 'nombre' => 'Maltrato','motivo' => 'Esta persona ha denunciado a otra persona por maltratar a su hermano.','agente_id' => $agente->id,'importe_multa'=> 170]);
        //----------------------------------------------------------------------------
        $agente = DB::table('agentes')->where('id',8139)->first();
        $user = DB::table('users')->where('email','placidico432@gmail.com')->first();
        DB::table('denuncias')->insert(['id' => 10,'user_id' => $user->email, 'nombre' => 'Asesinato','motivo' => 'Esta persona ha denunciado a otra persona por aseninar con una ballesta.','agente_id' => $agente->id,'importe_multa'=> 140]);
        //----------------------------------------------------------------------------
        $agente = DB::table('agentes')->where('id',1675)->first();
        $user = DB::table('users')->where('email','rodrigomanresa@gmail.com')->first();
        DB::table('denuncias')->insert(['id' => 11,'user_id' => $user->email, 'nombre' => 'Asesinato','motivo' => 'Esta persona ha denunciado a otra persona por asesinar con un coche.','agente_id' => $agente->id,'importe_multa'=> 500]);

        $agente = DB::table('agentes')->where('id',6134)->first();
        $user = DB::table('users')->where('email','antoniomanuel@gmail.com')->first();
        DB::table('denuncias')->insert(['id' => 12,'user_id' => $user->email, 'nombre' => 'Robo','motivo' => 'Esta persona ha denunciado a otra persona por robar en una discoteca.','agente_id' => $agente->id,'importe_multa'=> 193]);

        $agente = DB::table('agentes')->where('id',4134)->first();
        $user = DB::table('users')->where('email','ricardosantos@gmail.com')->first();
        DB::table('denuncias')->insert(['id' => 13,'user_id' => $user->email, 'nombre' => 'Maltrato','motivo' => 'Esta persona ha denunciado a otra persona por maltratar a sus familiares.','agente_id' => $agente->id,'importe_multa'=> 180]);

        $agente = DB::table('agentes')->where('id',4134)->first();
        $user = DB::table('users')->where('email','juanmanuelrives@gmail.com')->first();
        DB::table('denuncias')->insert(['id' => 14,'user_id' => $user->email, 'nombre' => 'Asesinato','motivo' => 'Esta persona ha denunciado a otra persona por asesinar animales.','agente_id' => $agente->id,'importe_multa'=> 180]);

        
    }
}