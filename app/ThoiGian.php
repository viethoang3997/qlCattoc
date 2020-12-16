<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ThoiGian extends Model
{
    protected $table='thoigian';
    protected $fillable=['id','title'];
   	protected $primaryKey='id';
    public $timestamps= false;
}
