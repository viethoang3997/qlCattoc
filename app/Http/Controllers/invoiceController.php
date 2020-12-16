<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\DatLich;
use App\HoaDon;

class invoiceController extends Controller
{
    public function selectAll()
    {
    	$HoaDon = HoaDon::all();
    	return view('admin.Invoice.list',['HoaDon'=>$HoaDon]);
    }
    public function getEdit($id)
    {
    	$HoaDon = HoaDon::find($id);
    	return view('admin.Invoice.edit',['HoaDon'=>$HoaDon]);
    }
    public function postEdit(Request $request,$id)
     {
    // 	$HoaDon = HoaDon::find($id);
    // 	$HoaDo
    }
}
