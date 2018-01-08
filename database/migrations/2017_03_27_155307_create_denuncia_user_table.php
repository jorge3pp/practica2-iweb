<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDenunciaUserTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('denuncia_users', function (Blueprint $table) {
            $table->string('user_id');
            $table->integer('denuncia_id');
            $table->string('importe_multa')->nullable()->default('pendiente');
            $table->foreign('user_id')->references('email')->on('users')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('denuncia_id')->references('id')->on('denuncias')->onUpdate('cascade')->onDelete('cascade');
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
        Schema::dropIfExists('denuncia_users');
    }
}
