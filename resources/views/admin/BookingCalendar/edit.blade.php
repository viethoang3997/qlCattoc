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
	<div class="container" style="width: 90%">
		<span style="text-align: center;"><h3>Sửa chức vụ</h3></span>
		<form action="admin/ChucVu/Sua/{{$ChucVu->id}}" method="POST">
			<input type="hidden" name="_token" value="{{csrf_token()}}"/>
			<div class="row">
				<div class="col-md-6">
					<div class="form-group">
						<label>Mã chức vụ</label>
						<input type="text" name="maChucVu" value="{{$ChucVu->Ma_chuc_vu}}" class="form-control" readonly="readonly">
					</div>
				</div>
				<div class="col-md-6">
					<div class="form-group">
						<label>Tên chức vụ *</label>
						<input type="text" name="ten" class="form-control" value="{{$ChucVu->Ten}}">
					</div>
				</div>
				<div class="col-md-6">
					<div class="form-group">
						<label>Trạng thái</label>
						<select class="input_text form-control" name="TrangThai">
							<option value="1" {{ $ChucVu->Trang_thai == 1 ? 'selected' : '' }}>Hoạt động</option>
							<option value="2" {{ $ChucVu->Trang_thai == 2 ? 'selected' : '' }}>Không hoạt động  </option>
						</select>
					</div>
				</div>
				<div class="col-md-6">
					<div class="form-group">
						<label>Ghi chú</label>
						<textarea class="form-control" rows="2" name="GhiChu" >{{$ChucVu -> Ghi_chu}}</textarea>
					</div>
				</div>
			</div>
			<div style="margin-left: 806px;margin-top: 20px;">
				<button type="reset" class="btn btn-default" style="background: #FF0000;color: #FFFFFF" >Đóng</button>
           		<button type="submit" class="btn btn-default" style="background: #00CC00;color: #FFFFFF">Lưu lại</button>
			</div>
		</form>
	</div>
</body>
</html>
@endsection