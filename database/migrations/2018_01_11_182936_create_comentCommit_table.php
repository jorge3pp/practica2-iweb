<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateComentCommitTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comentCommit', function (Blueprint $table) {
            $table->increments('id');
            $table->string('contenido');
            $table->date('fecha');
            $table->string('reacciones');

            $table->integer('id_usuario');
            $table->foreign('id_usuario')->references('id')->on('users');
            
            $table->integer('id_commit');
            $table->foreign('id_commit')->references('id')->on('commit');

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
        Schema::dropIfExists('comentCommit');
    }
}
