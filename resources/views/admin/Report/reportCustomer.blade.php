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
		<div><span style="text-align: center;"><h3>BÁO CÁO KHÁCH HÀNG</h3></span></div>
		<div class="button row pull-right">
			<button type="submit" class="btn btn-default" style="background: #006600;color: #FFFFFF"><i class="fa fa-file-excel-o" aria-hidden="true"></i>Xuất Excel</button>
		</div>
		<table class="table table-dark" width="100%">
			<thead>
				<tr >
					<th width="5%">STT</th>
					<th width="25%">Tên khách hàng</th>
					<th width="35%">Số điện thoại</th>
					<th width="10%">Số lần sử dụng dịch vụ</th>
					<th width="15%">Tổng tiền</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td>1</td>
					<td>Nguyễn Văn A</td>
					<td>01663009898</td>
					<td>3</td>
					<td>1.500.000</td>
				</tr>
				<tr>
					<td>2</td>
					<td>Nguyễn Văn B</td>
					<td>01663009898</td>
					<td>4</td>
					<td>2.500.000</td>
				</tr>
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
