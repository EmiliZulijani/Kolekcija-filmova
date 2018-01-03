<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddDataToZanr extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //Insert Data

        DB::table('zanr')->insert([
            ['id'=>'1','naziv'=>'akcijski'],
            ['id'=>'2','naziv'=>'krimić'],
            ['id'=>'3','naziv'=>'drama'],
            ['id'=>'4','naziv'=>'triler'],
            ['id'=>'5','naziv'=>'komedija'],
            ['id'=>'6','naziv'=>'biografski'],
            ['id'=>'7','naziv'=>'avanturistički'],
            ['id'=>'8','naziv'=>'sci-fi'],
            ['id'=>'9','naziv'=>'povijesni']
          ]);


    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
