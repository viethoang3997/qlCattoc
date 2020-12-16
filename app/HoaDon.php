<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class HoaDon extends Model
{
    protected $table='hoadon';
    protected $fillable=['id','fullName','phone','time','date','idStaff','idService','idProduct','quantity'];
   	protected $primaryKey='id';
    public $timestamps= false;
}
