<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRamasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ramas', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre');
            $table->string('codigo');


            $table->integer('id_usuario');
            $table->foreign('id_usuario')->references('id')->on('users');

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
        Schema::dropIfExists('ramas');
    }
}
