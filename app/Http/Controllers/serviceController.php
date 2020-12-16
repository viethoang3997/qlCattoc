<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\DichVu;
use Maatwebsite\Excel\Facades\Excel;
class serviceController extends Controller
{
    public function selectAll()
    {
    	$DichVu = DichVu::all();
        $DichVu = DichVu::paginate(10);
    	return view('admin.Service.list',['DichVu'=>$DichVu]);
    }
    public function getNew()
    {
    	return view('admin.Service.new');
    }
    public function postNew(Request $request)
    {
        $this ->validate($request,[
            'title'=>'required',
            'content' =>'required',
            'price'=>'required|integer|min:1'
        ],[
            'title.required' =>'Tên dịch vụ không được để trống',
            'content.required' =>'Ghi chú không được để trống',
            'price.required'=>'Bạn chưa nhập giá dịch vụ',
            'price.integer'=>'Giá phải là số',
            'price.min'=>'Giá phải lớn hơn 1'
        ]);
    	$DichVu = new DichVu();
    	$DichVu ->title = $request ->title;
    	$DichVu ->content = $request ->content;
    	$DichVu ->price = $request ->price;
        if($request->hasFile('images')){
            $file = $request ->file('images');
            $file_name = $file ->getClientOriginalName();
            $Hinh = str_random(4).'_'.$file_name;
            while (file_exists("upload/images/".$Hinh)) 
            {
               $Hinh = str_random(4).'_'.$file_name;
            }
            $file ->move('upload/images',$file_name);
            $DichVu ->images= $file_name;
        }
        else
        {
            $DichVu->images = '';
        }
    	$DichVu ->save();
    	return redirect('admin/DichVu/danhsach')->with('Thongbao','Thêm mới dịch vụ thành công');
    }
    public function getEdit($id)
    {
    	$DichVu = DichVu::find($id);
    	return view('admin.Service.edit',['DichVu'=>$DichVu]);
    }
    public function postEdit(Request $request,$id)
    {
        $this ->validate($request,[
            'title'=>'required',
            'content' =>'required',
            'price'=>'required|integer|min:1'
        ],[
            'title.required' =>'Tên dịch vụ không được để trống',
            'content.required' =>'Ghi chú không được để trống',
            'price.required'=>'Bạn chưa nhập giá dịch vụ',
            'price.integer'=>'Giá phải là số',
            'price.min'=>'Giá phải lớn hơn 1'
        ]);
    	$DichVu = DichVu::find($id);
    	$DichVu ->title = $request ->title;
    	$DichVu ->content = $request ->content;
    	$DichVu ->price = $request ->price;
        if($request->hasFile('images')){
            $file = $request ->file('images');
            $file_name = $file ->getClientOriginalName();
            $Hinh = str_random(4).'_'.$file_name;
            while (file_exists("upload/images/".$Hinh)) 
            {
               $Hinh = str_random(4).'_'.$file_name;
            }
            $file ->move('upload/images',$file_name);
            $DichVu ->images= $file_name;
        }
    	$DichVu ->save();
    	return redirect('admin/DichVu/danhsach')->with('Thongbao','Sửa dịch vụ thành công');
    }
    public function getDelete($id)
    {
    	$DichVu = DichVu::find($id);
    	$DichVu ->delete();
    	return redirect('admin/DichVu/danhsach')->with('Thongbao','Xóa dịch vụ thành công');
    }

    public function getExportExcel()
    {
        $DichVu = DichVu::all()->toarray();
        Excel::create('Export Data',function($excel) use($DichVu){
            $excel->sheet('Sheet 1',function($sheet) use($DichVu){
                $sheet->fromArray($DichVu);
            });
        })->export('xlsx');
    }
}
