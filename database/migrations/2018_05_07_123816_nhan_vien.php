<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class NhanVien extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('NhanVien',function(Blueprint $table){
            $table ->bigIncrements('id');
            $table ->string('fullName');
            $table ->date('birthday');
            $table ->text('address');
            $table ->string('phone',12);
            $table ->string('email');
            $table ->text('content');
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
        Schema::drop('NhanVien');
    }
}
