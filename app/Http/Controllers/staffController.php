<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\collection;
use Illuminate\Http\Response;
use App\NhanVien;

class staffController extends Controller
{
    public function selectAll()
    {
    	$NhanVien = NhanVien::all();
    	return view('admin.Staff.list',['NhanVien'=>$NhanVien]);
    }
    public function getNew()
    {
    	return view('admin.Staff.new');
    }
    public function getDetails()
    {
        return view('admin.Staff.detail');
    }
    public function postNew(Request $request)
    {
         $this -> validate($request,
            [
                'fullName' => 'required',
                'address' => 'required',
                'phone' => 'required|unique:nhanvien,phone',
                'email' => 'required|email|unique:nhanvien,email',
                'experience' => 'required'
            ],
            [
                'fullName.required' => 'Bạn chưa nhập tên nhân viên',
                'address.required' => 'Bạn chưa nhập địa chỉ',
                'phone.required' => 'Bạn chưa nhập số điện thoại',
                'phone.unique' => 'Số điện thoại đã tồn tại',
                'email.required' => 'Bạn chưa nhập email',
                'email.unique' => 'Email của bạn đã tồn tại',
                'email.email'=>'Email không đúng định dạng',
                'experience.required' => 'Bạn chưa nhập kinh nghiệm',

            ]);
    	$NhanVien = new NhanVien();
    	$NhanVien ->fullName = $request ->fullName;
    	$NhanVien ->birthday = $request ->birthday;
    	$NhanVien ->gender = $request ->gender;
    	$NhanVien ->address = $request ->address;
    	$NhanVien ->phone = $request ->phone;
    	$NhanVien ->email =$request ->email;
    	$NhanVien ->experience = $request->experience;
        if($request->hasFile('images')){
            $file = $request ->file('images');
            $file_name = $file ->getClientOriginalName();
            $Hinh = str_random(4).'_'.$file_name;
            while (file_exists("upload/images/".$Hinh)) 
            {
               $Hinh = str_random(4).'_'.$file_name;
            }
            $file ->move('upload/images',$file_name);
            $NhanVien ->images= $file_name;
        }
        else
        {
            $NhanVien->images = '';
        }
    	$NhanVien ->save();
    	return redirect('admin/NhanVien/danhsach')->with('Thongbao','Thêm mới nhân viên thành công');
    }
    public function getEdit($id)
    {
    	$NhanVien = NhanVien::find($id);
    	return view('admin.Staff.edit',['NhanVien'=>$NhanVien]);
    }
    public function postEdit(Request $request,$id)
    {
        $this -> validate($request,
            [
                'fullName' => 'required',
                'address' => 'required',
                'phone' => 'required|unique:nhanvien,phone',
                'email' => 'required|email|unique:nhanvien,email',
                'experience' => 'required'
            ],
            [
                'fullName.required' => 'Bạn chưa nhập tên nhân viên',
                'address.required' => 'Bạn chưa nhập địa chỉ',
                'phone.required' => 'Bạn chưa nhập số điện thoại',
                'phone.unique' => 'Số điện thoại đã tồn tại',
                'email.required' => 'Bạn chưa nhập email',
                'email.unique' => 'Email của bạn đã tồn tại',
                'email.email'=>'Email không đúng định dạng',
                'experience.required' => 'Bạn chưa nhập kinh nghiệm',

            ]);
    	$NhanVien = NhanVien::find($id);
    	$NhanVien ->fullName = $request ->fullName;
    	$NhanVien ->birthday = $request ->birthday;
    	$NhanVien ->gender = $request ->gender;
    	$NhanVien ->address = $request ->address;
    	$NhanVien ->phone = $request ->phone;
    	$NhanVien ->email =$request ->email;
    	$NhanVien ->experience = $request->experience;
        if($request->hasFile('images')){
            $file = $request ->file('images');
            $file_name = $file ->getClientOriginalName();
            $Hinh = str_random(4).'_'.$file_name;
            while (file_exists("upload/images/".$Hinh)) 
            {
               $Hinh = str_random(4).'_'.$file_name;
            }
            $file ->move('upload/images',$file_name);
            $NhanVien ->images= $file_name;
        }
    	$NhanVien ->save();
    	return redirect('admin/NhanVien/danhsach')->with('Thongbao','Sửa nhân viên thành công');
    }
    public function getDelete($id)
    {
    	$NhanVien = NhanVien::find($id);
    	$NhanVien ->delete();
    	return redirect('admin/NhanVien/danhsach')->with('Thongbao','Xóa nhân viên thành công');
    }

    public function checkEmail(){
        $email = $_POST["email"];
        $NhanVien = NhanVien::find('$email');
        $dong =  $NhanVien->count();
        return Response($dong);
    }   

}
