@extends('admin.layout.index')
@section('content')
<!DOCTYPE html>
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
	<div class="row" >
	    <div class="col-md-4" >
	     @if(count($errors)>0)
	        <div class="alert alert-danger">
	            @foreach($errors -> all() as $err )
	               {{$err}} <br>
	            @endforeach
	        </div>
	      @endif

	      @if(session('Thongbao'))
	         <div class="alert alert-success">
	             {{session('Thongbao')}}
	             
	         </div>
	      @endif
	    </div>
 	 </div>
	<div class="container">
		<div><span style="text-align: center;"><h3>Danh sách sản phẩm</h3></span></div>
		<div class="button row pull-right">
			<button type="submit" class="btn btn-default" style="background: #006600;color: #FFFFFF"><i class="fa fa-file-excel-o" aria-hidden="true"></i>Xuất Excel</button>
			<a href="admin/SanPham/Them"><button type="submit" class="btn btn-default" style="background: #FF9900;color: #FFFFFF">Thêm mới</button></a>
		</div>
		<table class="table table-dark" width="100%">
			<thead>
				<tr >
					<th width="5%">STT</th>
					<th width="25%">Tên sản phẩm</th>
					<th width="35%">Giới thiệu</th>
					<th width="10%">Giá</th>
					<th width="15%">Ảnh</th>
					<th>Hành động</th>
				</tr>
			</thead>
			<tbody>
				@foreach($SanPham as $key)
				<tr>
					<td>{!! isset($key ->id) ? $key->id: '' !!}</td>
					<td>{!! isset($key ->title) ? $key->title :'' !!}</td>
					<td>{!! isset($key ->introduce) ? substr($key->introduce,0,150):'' !!}</td>
					<td>{!! isset($key ->price) ? number_format($key->price,2) :'' !!}</td>
					<td><img src="upload/images/{{$key ->images}}" width="150px" height="150px"></td>
					<td>
						<a href="admin/SanPham/ChiTiet/{{$key->id}}"><i class="fa fa-eye" aria-hidden="true" style="margin-right: 10px;"> </i></a>
						<a href="admin/SanPham/Sua/{{$key->id}}"><i class="fa fa-pencil" aria-hidden="true" style="margin-right: 10px;"></i></a>
						<a href="admin/SanPham/xoa/{{$key->id}}"><i class="fa fa-trash" aria-hidden="true"></i></a>
					</td>
				</tr>
				@endforeach
		</tbody>
	</table>
	<div class="pull-right" >{!!$SanPham ->links()!!}</div>
	</div>
</body>
</html>
<style type="text/css">
	th {
	    text-align: center;
	}
	td{
		text-align: center;
	}
	.button{
		display: inline-block;
		margin-bottom: 30px;
	}
</style>
@endsection
