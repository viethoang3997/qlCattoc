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
	<div class="container" style="width: 90%">
		<span style="text-align: center;"><h3>Thêm mới hóa đơn</h3></span>
		<form action="" method="POST">
			<input type="hidden" name="_token" value="{{csrf_token()}}">
			<div class="row">
				<div class="col-md-12">
					<div class="form-group">
						<label>Tên khách hàng</label>
						<input type="text" name="fullName" value="{{$HoaDon->fullName}}" class="form-control" readonly="readonly">
					</div>
					<div class="form-group">
						<label>Số điện thoại</label>
						<input type="text" name="phone" value="{{$HoaDon->phone}}" class="form-control" readonly="readonly">
					</div>
				</div>
				<div class="col-md-12">
					<div class="form-group">
						<label>Ngày cắt</label>
						<input type="text" name="date" value="{{$HoaDon ->date}}" class="form-control" readonly="readonly">
					</div>
					<div class="form-group">
						<label>Thời gian cắt</label>
						<input type="text" name="time" value="{{$HoaDon ->time}}" class="form-control" readonly="readonly">
					</div>
				</div>
				<div class="col-md-12">
					<div class="form-group">
						<label>Tên nhân viên</label>
						<input type="text" name="" class="form-control">
					</div>
					<div class="form-group">
						<label>Tên dịch vụ</label>
						<input type="text" name="" class="form-control">
					</div>
				</div>
				<div class="col-md-6">
					<div class="form-group">
						<label>Tổng tiền</label>
						<input type="text" name="" class="form-control">
					</div>
				</div>
			</div>
			<div style="margin-left: 806px;margin-top: 20px;">
				<button type="reset" class="btn btn-default" style="background: #FF0000; color: #FFFFFF"  >Đóng</button>
           		<button type="submit" class="btn btn-default" style="background: #00CC00; color: #FFFFFF">Lưu lại</button>
			</div>
		</form>
	</div>
</body>
</html>
@endsection