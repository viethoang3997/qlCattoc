<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BaoCao extends Model
{
    protected $table='calam';
    protected $fillable=['id','title','idStaff','date'];
   	protected $primaryKey='id';
    public $timestamps= false;
}
