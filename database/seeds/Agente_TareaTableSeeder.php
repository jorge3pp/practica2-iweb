<?php

use Illuminate\Database\Seeder;

class Agente_TareaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('agente_tareas')->delete();

        $tarea = DB::table('tareas')->where('id',1)->first();
        $agente = DB::table('agentes')->where('id',7139)->first();


        DB::table('agente_tareas')->insert(['tarea_id' => $tarea->id,'agente_id' => $agente->id]);
        
        //-----------------------------------------------------------------
        $tarea = DB::table('tareas')->where('id',2)->first();
        $agente = DB::table('agentes')->where('id',2675)->first();

        DB::table('agente_tareas')->insert(['tarea_id' => $tarea->id,'agente_id' => $agente->id]);

        //------------------------------------------------------------------
        $tarea = DB::table('tareas')->where('id',3)->first();
        $agente = DB::table('agentes')->where('id',4973)->first();

        DB::table('agente_tareas')->insert(['tarea_id' => $tarea->id,'agente_id' => $agente->id]);

        //-------------------------------------------------------------------
        $tarea = DB::table('tareas')->where('id',4)->first();
        $agente = DB::table('agentes')->where('id',4973)->first();

        DB::table('agente_tareas')->insert(['tarea_id' => $tarea->id,'agente_id' => $agente->id]);

        //-------------------------------------------------------------------
        $tarea = DB::table('tareas')->where('id',5)->first();
        $agente = DB::table('agentes')->where('id',6134)->first();

        DB::table('agente_tareas')->insert(['tarea_id' => $tarea->id,'agente_id' => $agente->id]);

        //-------------------------------------------------------------------
        $tarea = DB::table('tareas')->where('id',6)->first();
        $agente = DB::table('agentes')->where('id',5728)->first();

        DB::table('agente_tareas')->insert(['tarea_id' => $tarea->id,'agente_id' => $agente->id]);

        //-------------------------------------------------------------------
        $tarea = DB::table('tareas')->where('id',7)->first();
        $agente = DB::table('agentes')->where('id',5728)->first();

        DB::table('agente_tareas')->insert(['tarea_id' => $tarea->id,'agente_id' => $agente->id]);

        //-------------------------------------------------------------------
        $tarea = DB::table('tareas')->where('id',8)->first();
        $agente = DB::table('agentes')->where('id',1675)->first();

        DB::table('agente_tareas')->insert(['tarea_id' => $tarea->id,'agente_id' => $agente->id]);

        //-------------------------------------------------------------------
        $tarea = DB::table('tareas')->where('id',9)->first();
        $agente = DB::table('agentes')->where('id',8139)->first();

        DB::table('agente_tareas')->insert(['tarea_id' => $tarea->id,'agente_id' => $agente->id]);

        //-------------------------------------------------------------------
        $tarea = DB::table('tareas')->where('id',10)->first();
        $agente = DB::table('agentes')->where('id',6139)->first();

        DB::table('agente_tareas')->insert(['tarea_id' => $tarea->id,'agente_id' => $agente->id]);
        
    }
}
