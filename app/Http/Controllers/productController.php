<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\SanPham;

class productController extends Controller
{
    public function selectAll()
    {
    	$SanPham = SanPham::all();
        $SanPham = SanPham::paginate(10);
    	return view('admin.Product.list',['SanPham'=>$SanPham]);
    }
    public function getNew()
    {
    	return view('admin.Product.new');
    }
    public function getDetails($id)
    {
        $SanPham = SanPham::find($id);
        return view('admin.Product.detail',['SanPham' =>$SanPham]);
    }
    public function postNew(Request $request)
    {
        $this->validate($request,[
            'title'=>'required',
            'introduce'=>'required',
            'details'=>'required',
            'guide'=>'required',
            'price'=>'required|integer|min:1'
        ],[
            'title.required'=>'Bạn chưa nhập tên sản phẩm',
            'introduce.required'=>'Bạn chưa nhập giới thiệu',
            'details.required'=>'Bạn chưa nhập thông tin chi tiết',
            'guide.required'=>'Bạn chưa nhập hướng dẫn sử dụng',
            'price.required'=>'Bạn chưa nhập giá',
            'price.integer'=>'Giá phải là số',
            'price.min'=>'Giá phải lớn hơn 0'
        ]);
    	$SanPham = new SanPham();
    	$SanPham ->title = $request ->title;
    	$SanPham ->introduce = $request ->introduce;
    	$SanPham ->details = $request ->details;
    	$SanPham ->guide = $request ->guide;
    	$SanPham ->price = $request ->price;
        if($request->hasFile('images')){
            $file = $request ->file('images');
            $file_name = $file ->getClientOriginalName();
            $Hinh = str_random(4).'_'.$file_name;
            while (file_exists("upload/images/".$Hinh)) 
            {
               $Hinh = str_random(4).'_'.$file_name;
            }
            $file ->move('upload/images',$file_name);
            $SanPham ->images= $file_name;
        }
        else
        {
            $SanPham->images = '';
        }
    	$SanPham ->save();
    	return redirect('admin/SanPham/danhsach')->with('Thongbao','Thêm mới sản phẩm thành công');
    }
    public function getEdit($id)
    {
    	$SanPham = SanPham::find($id);
    	return view('admin.Product.edit',['SanPham'=>$SanPham]);
    }
    public function postEdit(Request $request,$id)
    {
        $this->validate($request,[
            'title'=>'required',
            'introduce'=>'required',
            'details'=>'required',
            'guide'=>'required',
            'price'=>'required|integer|min:1'
        ],[
            'title.required'=>'Bạn chưa nhập tên sản phẩm',
            'introduce.required'=>'Bạn chưa nhập giới thiệu',
            'details.required'=>'Bạn chưa nhập thông tin chi tiết',
            'guide.required'=>'Bạn chưa nhập hướng dẫn sử dụng',
            'price.required'=>'Bạn chưa nhập giá',
            'price.integer'=>'Giá phải là số',
            'price.min'=>'Giá phải lớn hơn 0'
        ]);
    	$SanPham = SanPham::find($id);
    	$SanPham ->title = $request ->title;
    	$SanPham ->introduce = $request ->introduce;
    	$SanPham ->details = $request ->details;
    	$SanPham ->guide = $request ->guide;
    	$SanPham ->price = $request ->price;
        if($request->hasFile('images')){
            $file = $request ->file('images');
            $file_name = $file ->getClientOriginalName();
            $Hinh = str_random(4).'_'.$file_name;
            while (file_exists("upload/images/".$Hinh)) 
            {
               $Hinh = str_random(4).'_'.$file_name;
            }
            $file ->move('upload/images',$file_name);
            $SanPham ->images= $file_name;
        }
    	$SanPham ->save();
    	return redirect('admin/SanPham/danhsach')->with('Thongbao','Sửa sản phẩm thành công');
    }
    public function getDelete($id)
    {
    	$SanPham = SanPham::find($id);
    	$SanPham ->delete();
    	return redirect('admin/SanPham/danhsach')->with('Thongbao','Xóa sản phẩm thành công');
    }
}
