<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateWikiRepoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('wikiRepo', function (Blueprint $table) {
            $table->integer('id_wiki')->unique();
            $table->integer('id_repo')->unique();

            $table->foreign('id_wiki')->references('id')->on('wiki');
            $table->foreign('id_repo')->references('id')->on('repositorios');

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
        Schema::dropIfExists('wikiRepo');
    }
}
