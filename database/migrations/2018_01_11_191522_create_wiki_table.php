<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateWikiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('wiki', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_repo')->unique();
            $table->foreign('id_repo')->references('id')->on('repositorios');

            $table->string('milestones')->default('Milestone 0.0');
            $table->string('clonelink')->default('linkpordefecto');
            $table->string('contenido')->default('Wiki Home');
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
        Schema::dropIfExists('wiki');
    }
}
