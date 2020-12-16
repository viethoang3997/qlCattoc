<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class NhanVien extends Model
{
    protected $table='nhanvien';
    protected $fillable=['id','fullName','birthday','gender','address','phone','email','experience','images'];
   	protected $primaryKey='id';
    public $timestamps= false;
}
