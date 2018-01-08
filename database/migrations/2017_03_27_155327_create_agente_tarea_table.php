<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAgenteTareaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('agente_tareas', function (Blueprint $table) {
            $table->integer('agente_id');
            $table->integer('tarea_id');
            $table->foreign('agente_id')->references('id')->on('agentes')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('tarea_id')->references('id')->on('tareas')->onUpdate('cascade')->onDelete('cascade');
            $table->string('estado')->nullable()->default('Sin finalizar');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('agente_tareas');
    }
}
