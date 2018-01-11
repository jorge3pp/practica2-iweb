<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateListaUsurepo extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lista_usuarios_repo', function (Blueprint $table) {
            $table->integer('id_usuario');
            $table->integer('id_repo');
            $table->foreign('id_usuario')->references('id')->on('users');
            $table->foreign('id_repo')->references('id')->on('repositorios');
            $table->primary('id_usuario','id_repo');
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
        Schema::dropIfExists('lista_usuarios_repo');
    }
}
