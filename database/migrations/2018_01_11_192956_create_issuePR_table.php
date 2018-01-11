<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateIssuePRTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('issuePR', function (Blueprint $table) {
            $table->integer('id_issue')->unique();
            $table->integer('id_pr')->unique();

            $table->foreign('id_issue')->references('id')->on('issue');
            $table->foreign('id_pr')->references('id')->on('pulls');

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
        Schema::dropIfExists('issuePR');
    }
}
