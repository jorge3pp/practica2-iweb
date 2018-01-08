<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAgenteTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('agentes', function (Blueprint $table) {
            $table->integer('id');
            $table->string('nombre');
            $table->integer('cuartel_id');
            $table->string('user_id');
            $table->primary('id');
            $table->timestamps();
            $table->foreign('cuartel_id')->references('id')->on('cuartels')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('user_id')->references('id')->on('users')->onUpdate('cascade')->onDelete('cascade');     
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('agentes');
    }
}
