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
            $table->string('lang');
            $table->integer('administrador');
            $table->integer('estrellas')->default(0);
            $table->integer('contador_seguidores')->default(1);
            // privPub == 0 se trata de un repo privado
            // privPub == 1 se trata de un repo publico
            $table->integer('privPub');
            $table->foreign('administrador')->references('id')->on('users')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('lang')->references('proglang')->on('lang');
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
