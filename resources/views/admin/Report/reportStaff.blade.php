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
		<div><span style="text-align: center;"><h3>BÁO CÁO NHÂN VIÊN</h3></span></div>
		<div class="button row pull-right">
			<button type="submit" class="btn btn-default" style="background: #006600;color: #FFFFFF"><i class="fa fa-file-excel-o" aria-hidden="true"></i>Xuất Excel</button>
		</div>
		<table class="table table-dark" width="100%">
			<thead>
				<tr >
					<th width="5%">STT</th>
					<th width="10">Tháng</th>
					<th width="25%">Tên nhân viên</th>
					<th width="35%">Số điện thoại</th>
					<th width="10%">Tổng ca làm</th>
					<th width="15%">Tổng khách hàng</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td>1</td>
					<td>Tháng 1</td>
					<td>Nguyễn Văn A</td>
					<td>01663009898</td>
					<td>35</td>
					<td>100</td>
				</tr>
				<tr>
					<td>2</td>
					<td>Tháng 1</td>
					<td>Nguyễn Văn B</td>
					<td>01663009898</td>
					<td>45</td>
					<td>120</td>
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
