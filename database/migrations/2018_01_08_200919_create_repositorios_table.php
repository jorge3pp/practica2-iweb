<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRepositoriosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('repositorios', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre');
            $table->integer('administrador');
            $table->integer('estrellas');
            $table->integer('contador_seguidores');
            // privPub == 0 se trata de un repo privado
            // privPub == 1 se trata de un repo publico
            $table->integer('privPub')->default(0);
            $table->foreign('administrador')->references('id')->on('usuarios')->onUpdate('cascade')->onDelete('cascade');
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
        Schema::dropIfExists('repositorios');
    }
}