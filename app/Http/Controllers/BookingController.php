<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\DatLich;
use App\ThoiGian;
use App\HoaDon;
use DB;
use Illuminate\Http\Response;
class BookingController extends Controller
{
    public function selectAll()
    {
    	$DatLich = DatLich::all();
        $DatLich = DatLich::paginate(10);
    	return view('admin.BookingCalendar.list',['DatLich'=>$DatLich]);
    }
    public function getNew()
    {
    	return view('admin.BookingCalendar.new');
    }
    public function postNew(Request $request)
    {
        $DatLich= new DatLich();
        $DatLich -> fullName= $request ->fullName;
        $DatLich-> phone = $request->phone;
        $DatLich -> date = $request ->date;
        $DatLich -> time = $request ->time;
        $DatLich -> status ='Mới';
        $DatLich->save();
        return redirect('home')->with('Thongbao','Bạn đã đặt lịch thành công');
    }
    public function ajaxShowTime()
    {
        $thoigian = ThoiGian::pluck('title');
        return Response()->json($thoigian);
    }
    public function postEdit(Request $request,$id)
    {
        $status = $request ->status;
        $DatLich->update([
            'status' => $status,
        ]);
        return redirect('admin/DatLich/danhsach')->with('Thongbao','Thay đổi trạng thái thành công');
    }
    public function convertData()
    {
        $convert = DatLich::all()->where('status','Xác nhận');

        foreach ($convert as $value) {
            if($value['status'] == 'Xác nhận')
            {
                $HoaDon = new HoaDon;
                $HoaDon ->fullName = $value->fullName;
                $HoaDon ->phone = $value->phone;
                $HoaDon->time = $value->time;
                $HoaDon->date = $value->date;
                $HoaDon ->idStaff = '1';
                $HoaDon ->idService = '1';
                $HoaDon ->idProduct = '1';
                $HoaDon ->quantity = '0';
                $HoaDon ->save();
            }
        }
        
    }
}