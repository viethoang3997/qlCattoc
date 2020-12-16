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
		<div><span style="text-align: center;"><h3>Danh sách bảng lương</h3></span></div>
		<div class="button row pull-right">
			<button type="submit" class="btn btn-default" style="background: #006600;color: #FFFFFF"><i class="fa fa-file-excel-o" aria-hidden="true"></i>Xuất Excel</button>
		</div>
		<table class="table table-dark">
			<thead>
				<tr >
					<th>STT</th>
					<th>Mã nhân viên</th>
					<th >Tên nhân viên</th>
					<th>Lương cứng</th>
					<th>Thưởng</th>
					<th>Thưởng doanh số </th>
					<th>Tổng lương</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td>1</td>
					<td>NV001</td>
					<td>Nguyễn Văn Test1</td>
					<td>10000000</td>
					<td>1.000.000</td>
					<td>500000</td>
					<td>16000000</td>
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