<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDenunciaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('denuncias', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre');
            $table->string('motivo');
            $table->integer('agente_id');
            $table->string('user_id');
            $table->string('importe_multa')->nullable()->default('pendiente');
            $table->timestamps();
            $table->foreign('agente_id')->references('id')->on('agentes')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('user_id')->references('email')->on('users')->onUpdate('cascade')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('denuncias');
    }
}
