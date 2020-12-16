<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ThoiGian;

class timeController extends Controller
{
    public function selectAll()
    {
    	$ThoiGian = ThoiGian::all();
        $ThoiGian = ThoiGian::paginate(10);
    	return view('admin.Time.list',['ThoiGian'=>$ThoiGian]);
    }
    public function getNew()
    {
    	return view('admin.Time.new');
    }
    public function postNew(Request $request)
    {
        $this -> validate($request,
            [
                'title' => 'required|unique:thoigian,title',
            ],
            [
                'title.required' => 'Bạn chưa nhập thời gian',
                'title.unique' => 'Thời gian đã tồn tại',
            ]);
    	$ThoiGian = new ThoiGian();
    	$ThoiGian -> title = $request-> title;
    	$ThoiGian ->save();
    	return redirect('admin/ThoiGian/danhsach')->with('Thongbao','Thêm thời gian thành công');
    }
    public function getEdit($id)
    {
    	$ThoiGian = ThoiGian::find($id);
    	return view('admin.Time.edit',['ThoiGian'=>$ThoiGian]);
    }
    public function postEdit(Request $request,$id)
    {
        $this -> validate($request,
            [
                'title' => 'required|unique:thoigian,title',
            ],
            [
                'title.required' => 'Bạn chưa nhập tên chế độ',
                'title.unique' => 'Chế độ đã tồn tại'
            ]);
    	$ThoiGian = ThoiGian::find($id);
    	$ThoiGian ->title = $request ->title;
    	$ThoiGian ->save();
    	return redirect('admin/ThoiGian/danhsach')->with('Thongbao','Sửa thời gian thành công');
    }
    public function getDelete($id)
    {
    	$ThoiGian = ThoiGian::find($id);
    	$ThoiGian ->delete();
    	return redirect('admin/ThoiGian/danhsach')->with('Thongbao','Xóa thời gian thành công');
    }
}
