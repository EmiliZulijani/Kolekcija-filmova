<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFilmoviTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('filmovi', function (Blueprint $table) {
            $table->engine='InnoDB';
            $table->charset='utf8';
            $table->collation='utf8_general_ci';
            $table->increments('id')->unsigned();
            $table->string('naslov');
            $table->integer('id_zanr')->unsigned();
            $table->foreign('id_zanr')->references('id')->on('zanr');
            $table->integer('godina');
            $table->smallInteger('trajanje');
            $table->string('slika');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('filmovi');
    }
}
