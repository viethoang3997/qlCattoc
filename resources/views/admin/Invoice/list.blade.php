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
	<div class="container">
		<div><span style="text-align: center;"><h3>Hóa đơn cho khách hàng</h3></span></div>
		<div class="button row pull-right">
			<button type="submit" class="btn btn-default" style="background: #006600;color: #FFFFFF"><i class="fa fa-file-excel-o" aria-hidden="true"></i>Xuất Excel</button>
		</div>
		<table class="table table-dark">
			<thead>
				<tr >
					<th>STT</th>
					<th >Tên khách hàng</th>
					<th>Số điện thoại</th>
					<th>Ngày cắt</th>
					<th>Thời gian cắt</th>
					<th>Tên nhân viên</th>
					<th>Dịch vụ </th>
					<th>Sản phẩm</th>
					<th>Tổng tiền</th>
					<th>Hành động</th>
				</tr>
			</thead>
			<tbody>
				@foreach($HoaDon as $key)
					<tr>
						<td>{!! isset($key ->id) ? $key->id: '' !!}</td>
						<td>{!! isset($key ->fullName) ? $key->fullName: '' !!}</td>
						<td>{!! isset($key ->phone) ? $key->phone: '' !!}</td>
						<td>{!! isset($key ->date) ? $key->date: '' !!}</td>
						<td>{!! isset($key ->time) ? $key->time: '' !!}</td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td>
							<a href="admin/HoaDon/Sua/{{$key->id}}"><i class="fa fa-pencil" aria-hidden="true" style="margin-right: 10px;"></i></a>
							<a href="#"><i class="fa fa-trash" aria-hidden="true"></i></a>
						</td>
					</tr>
				@endforeach
		</tbody>
	</table>
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
		margin-bottom: 10px;
	}
</style>
@endsection