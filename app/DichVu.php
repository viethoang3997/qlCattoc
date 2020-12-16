<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DichVu extends Model
{
    protected $table='dichvu';
    protected $fillable=['id','title','content','price','images'];
   	protected $primaryKey='id';
    public $timestamps= false;
}
