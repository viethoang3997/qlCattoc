<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DatLich extends Model
{
    protected $table='test';
    protected $fillable=['id','fullName','phone','time','date'];
   	protected $primaryKey='id';
    public $timestamps= false;
}
