<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SanPham extends Model
{
    protected $table='sanpham';
    protected $fillable=['id','title','introduce','details','guide','price','images'];
   	protected $primaryKey='id';
    public $timestamps= false;
}
