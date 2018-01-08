<?php

use Illuminate\Database\Seeder;

class TareaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tareas')->delete();
        //---------------------------------------------------------
        $agente = DB::table('agentes')->where('id',7139)->first();
        DB::table('tareas')->insert(['nombre' => 'Control de alcolemia','descripcion' => 'Control de alcolemia rutinario en sector C3','zona' => 'Alicante','agente_id' => $agente->id]);
        //---------------------------------------------------------
        $agente = DB::table('agentes')->where('id',2675)->first();
        DB::table('tareas')->insert(['nombre' => 'Control de trafico','descripcion' => 'Control de trafico rutinario en secto G5','zona' => 'Alicante','agente_id' => $agente->id]);
        //---------------------------------------------------------
        $agente = DB::table('agentes')->where('id',4973)->first();
        DB::table('tareas')->insert(['nombre' => 'Enseñanza vial','descripcion' => 'Actividad educativa en el colegio de primaria Laude Newton College','zona' => 'Elche','agente_id' => $agente->id]);
        //---------------------------------------------------------
        $agente = DB::table('agentes')->where('id',4973)->first();
        DB::table('tareas')->insert(['nombre' => 'Control','descripcion' => 'Control de tráfico en la zona de la Plaza de Toros','zona' => 'Centro de Alicante','agente_id' => $agente->id]);
        //---------------------------------------------------------
        $agente = DB::table('agentes')->where('id',6134)->first();
        DB::table('tareas')->insert(['nombre' => 'Control de Tráfico','descripcion' => 'Control de tráfico en la zona del Conservatorio Superior','zona' => 'Murcia','agente_id' => $agente->id]);
        //---------------------------------------------------------
        $agente = DB::table('agentes')->where('id',5728)->first();
        DB::table('tareas')->insert(['nombre' => 'Control','descripcion' => 'Control en los accesos al estado de futbol del Albacete Balompie','zona' => 'Albacete','agente_id' => $agente->id]);
        //---------------------------------------------------------
        $agente = DB::table('agentes')->where('id',5728)->first();
        DB::table('tareas')->insert(['nombre' => 'Enseñanza vial','descripcion' => 'Actividad educativa en el colegio de primaria Jesuitas','zona' => 'Alicante','agente_id' => $agente->id]);
        //---------------------------------------------------------
        $agente = DB::table('agentes')->where('id',1675)->first();
        DB::table('tareas')->insert(['nombre' => 'Control','descripcion' => 'Controlar el acceso a las entradas de la ciudad deportiva del Villareal','zona' => 'Castellon','agente_id' => $agente->id]);
        //---------------------------------------------------------
        $agente = DB::table('agentes')->where('id',8139)->first();
        DB::table('tareas')->insert(['nombre' => 'Control','descripcion' => 'Radar móvil a la altura de la salida 340 direccion Elche','zona' => 'Autovia AP-7','agente_id' => $agente->id]);
        //---------------------------------------------------------
        $agente = DB::table('agentes')->where('id',6139)->first();
        DB::table('tareas')->insert(['nombre' => 'Control','descripcion' => 'Control antidrogas a la altura de Crevillente','zona' => 'Nacional 340 km 64','agente_id' => $agente->id]);
    }
}
