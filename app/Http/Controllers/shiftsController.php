<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\CaLam;
use App\NhanVien;

class shiftsController extends Controller
{
    public function selectAll()
    {
    	$CaLam = CaLam::all();
        $CaLam = CaLam::paginate(10);
    	return view('admin.Shifts.list',['CaLam'=>$CaLam]);
    }
    public function getNew()
    {
    	$NhanVien = NhanVien::all();
    	return view('admin.Shifts.new',['NhanVien'=>$NhanVien]);
    }
    public function postNew(Request $request)
    {
    	$CaLam = new CaLam();
    	$CaLam ->fullName = $request ->fullName;
    	$CaLam ->nameType = $request ->nameType;
    	$CaLam ->date = $request ->date;
    	$CaLam ->save();
    	return redirect('admin/CaLam/danhsach') ->with('Thongbao','Thêm mới ca làm thành công');

    }
    public function getDelete($id)
    {
        $CaLam = CaLam::find($id);
        $CaLam -> delete();
        return redirect('admin/CaLam/danhsach')->with('Thongbao','Xóa ca làm thành công');
    }
}
