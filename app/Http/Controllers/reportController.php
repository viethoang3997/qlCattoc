<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\BaoCao;

class reportController extends Controller
{
    public function reportCustomer()
    {
    	$BaoCao = BaoCao::all();
    	return view('admin.Report.reportCustomer',['Customer'=>$BaoCao]);
    }
    public function reportRevenue()
    {
    	$BaoCao = BaoCao::all();
    	return view('admin.Report.reportRevenue',['Revenue'=>$BaoCao]);
    }
    public function reportStaff()
    {
    	$BaoCao = BaoCao::all();
    	return view('admin.Report.reportStaff',['Staff'=>$BaoCao]);
    }
}
