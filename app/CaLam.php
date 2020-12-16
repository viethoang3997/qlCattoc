<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CaLam extends Model
{
    protected $table='calam';
    protected $fillable=['id','fullName','nameType','date'];
   	protected $primaryKey='id';
    public $timestamps= false;
}
