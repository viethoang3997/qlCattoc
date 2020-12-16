<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DangNhapController extends Controller
{
    public function getDangNhapAdmin()
    {
    	return view('admin.login');
    }
    public function postDangNhapAdmin(Request $request)
    {
    	$this ->validate($request ,
    	[
    		'email'=>'required',
    		'password'=>'required|min:2|max:32'
    	],[
    		'email.required' =>'Bạn chưa nhập email',
    		'pasword.required'=>'Bạn chưa nhập mật khẩu',
    		'password.min'=>'Mật khẩu không được nhỏ hơn 2 ký tự',
    		'password.max'=>'Mật khẩu không được lớn hơn 32 ký tự'
    	]);
    	if(Auth::attempt(['email'=>$request->email,'password'=>$request->password]))
    		{
    			return redircet('admin/NhanVien/danhsach');
    		}
    		else
    		{
    			return redirect('admin/NhanVien/danhsach')->with('thongbao','Đăng nhập thành công');
    		}
    }
}
