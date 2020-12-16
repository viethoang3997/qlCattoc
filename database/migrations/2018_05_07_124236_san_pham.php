<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class SanPham extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('SanPham',function(Blueprint $table){
            $table ->bigIncrements('id');
            $table ->string('title');
            $table ->text('introduce');
            $table ->text('details');
            $table ->text('guide');
            $table ->string('image');
            $table ->float('price');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('SanPham');
    }
}
