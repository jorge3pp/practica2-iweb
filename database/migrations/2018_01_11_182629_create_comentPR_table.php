<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateComentPRTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comentPR', function (Blueprint $table) {
            $table->increments('id');
            $table->string('contenido');
            $table->date('fecha');
            $table->string('reacciones');


            $table->integer('id_pr');
            $table->foreign('id_pr')->references('id')->on('p_rs');

            $table->integer('id_usuario');
            $table->foreign('id_usuario')->references('id')->on('users');

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
        Schema::dropIfExists('comentPR');
    }
}
