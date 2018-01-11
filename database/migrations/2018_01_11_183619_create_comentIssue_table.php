<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateComentIssueTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comentIssue', function (Blueprint $table) {
            $table->increments('id');
            $table->string('contenido');
            $table->date('fecha');
            $table->string('reacciones');

            $table->integer('id_usuario');
            $table->foreign('id_usuario')->references('id')->on('users');
            
            $table->integer('id_issue');
            $table->foreign('id_issue')->references('id')->on('issue');

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
        Schema::dropIfExists('comentIssue');
    }
}
