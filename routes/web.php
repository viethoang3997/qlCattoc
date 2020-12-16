<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('home', function () {
    return view('admin.home');
});
Route::get('admin/dangnhap','DangNhapController@getDangNhapAdmin');
Route::post('admin/dangnhap','DangNhapController@postDangNhapAdmin');
Route::group(['prefix'=>'admin'],function(){
	Route::group(['prefix'=>'ThoiGian'],function(){
		Route::get('danhsach','timeController@selectAll');
		Route::get('Them','timeController@getNew');
		Route::post('Them','timeController@postNew');
		Route::get('Sua/{id}','timeController@getEdit');
		Route::post('Sua/{id}','timeController@postEdit');
	 	Route::get('xoa/{id}','timeController@getDelete');
		});
	Route::group(['prefix'=>'NhanVien'],function(){
		Route::get('danhsach','staffController@selectAll');
		Route::get('Them','staffController@getNew');
		Route::post('Them','staffController@postNew');
		Route::get('ChiTiet','staffController@getDetails');
		Route::post('CheckEmail','staffController@checkEmail');
		Route::get('Sua/{id}','staffController@getEdit');
		Route::post('Sua/{id}','staffController@postEdit');
	 	Route::get('xoa/{id}','staffController@getDelete');
		});
	Route::group(['prefix'=>'SanPham'],function(){
		Route::get('danhsach','productController@selectAll');
		Route::get('Them','productController@getNew');
		Route::post('Them','productController@postNew');
		Route::get('ChiTiet/{id}','productController@getDetails');
		Route::post('Sua/{id}','productController@postEdit');
		Route::post('Sua/{id}','productController@postEdit');
	 	Route::get('xoa/{id}','productController@getDelete');
		});
	Route::group(['prefix'=>'DichVu'],function(){
		Route::get('danhsach','serviceController@selectAll');
		Route::get('Them','serviceController@getNew');
		Route::post('Them','serviceController@postNew');
		Route::get('Sua/{id}','serviceController@getEdit');
		Route::post('Sua/{id}','serviceController@postEdit');
	 	Route::get('xoa/{id}','serviceController@getDelete');
	 	Route::get('ExportExcel','serviceController@getExportExcel');
		});
	Route::group(['prefix'=>'CaLam'],function(){
		Route::get('danhsach','shiftsController@selectAll');
		Route::get('Them','shiftsController@getNew');
		Route::post('Them','shiftsController@postNew');
	 	Route::get('xoa/{id}','shiftsController@getDelete');
		});
	Route::group(['prefix'=>'DatLich'],function(){
		Route::get('danhsach','BookingController@selectAll');
		Route::get('Them','BookingController@getNew');
		Route::post('Them','BookingController@postNew');
		Route::post('trangthai/{id}','BookingController@postEdit');
		Route::get('chuyendoi','BookingController@convertData');
	 	Route::get('ajaxShowTime','BookingController@ajaxShowTime');
		});
	Route::group(['prefix'=>'BaoCao'],function(){
		Route::get('khachhang','reportController@reportCustomer');
		Route::get('nhanvien','reportController@reportStaff');
		Route::get('doanhthu','reportController@reportRevenue');
		});
	Route::group(['prefix'=>'HoaDon'],function(){
		Route::get('danhsach','invoiceController@selectAll');
		Route::get('Sua/{id}','invoiceController@getEdit');
		});
});
