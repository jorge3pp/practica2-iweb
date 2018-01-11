<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCommitTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('commit', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre');
            $table->string('cambios');

            $table->integer('id_usuario');
            $table->foreign('id_usuario')->references('id')->on('usuarios');

            $table->integer('id_pr');
            $table->foreign('id_pr')->references('id')->on('pulls')->nullable();

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
        Schema::dropIfExists('commit');
    }
}
