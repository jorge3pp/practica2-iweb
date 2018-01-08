<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('email')->unique();
            $table->string('DNI')->unique();
            $table->string('password');
            $table->string('direccion');
            $table->integer('telefono');
            $table->integer('rol')->nullable()->default('1');
            $table->string('imagen')->nullable();
            $table->integer('cita')->nullable()->default(0);
            $table->string('h_cita')->nullable();
            $table->string('motivo')->nullable();
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
