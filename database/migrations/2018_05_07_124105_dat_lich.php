<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class DatLich extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('DatLich',function(Blueprint $table){
            $table ->bigIncrements('id');
            $table ->string('fullName');
            $table ->string('phone');
            $table ->date('date');
            $table ->time('time');
            $table ->integer('status');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('DatLich');
    }
}
