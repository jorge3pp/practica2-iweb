<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEstadisticasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('estadisticas', function (Blueprint $table) {
            $table->increments('id');
            //$table->string('contribuidores'); UTILZAREMOS LISTA_USUARIOS DEL REPO
            $table->string('trafico');
            //$table->string('commits'); UTILIZAREMOS COMMITS WHERE ID_REPO= 
            $table->string('frecuencia_cod');
            $table->string('trabajo_ramas');

            $table->integer('id_repo');
            $table->foreign('id_repo')->references('id')->on('repositorios');

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
        Schema::dropIfExists('estadisticas');
    }
}
