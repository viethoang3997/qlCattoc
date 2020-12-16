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
	<div class="container" style="width: 90%">
		<span style="text-align: center;"><h3>Sửa nhân viên </h3></span>
		<form action="admin/NhanVien/Sua/{{$NhanVien->id}}" method="POST" id="upload" enctype="multipart/form-data">
			<input type="hidden" name="_token" value="{{csrf_token()}}">
			<div class="row">
				<div class="col-sm-9">
					<div class="col-sm-12">
						<div class="form-group">
							<label>Mã</label>
							<input type="text" name="id" class="form-control" value="{{$NhanVien->id}}" readonly="readonly">
						</div>
					</div>
					<div class="col-sm-6">
						<div class="form-group">
							<label>Họ Tên *</label>
							<input type="text" name="fullName" class="form-control" value="{{$NhanVien->fullName}}">
						</div>
					</div>
					<div class="col-sm-6">
						<div class="form-group">
							<label>Giới tính</label>
							<select class="input_text form-control" name="gender">
								<option value="0">Chọn</option>
				                <option value="1" {{$NhanVien->gender == 1 ? 'selected' : ''}}>Nam</option>
				                <option value="2" {{$NhanVien->gender == 2 ? 'selected' : ''}}>Nữ</option>
			                </select>
						</div>
					</div>
					<div class="col-sm-6">
						<div class="form-group">
							<label>Ngày sinh</label>
							<input type="date" name="birthday" class="form-control" value="{{$NhanVien->birthday}}">
						</div>
					</div>
					<div class="col-sm-6">
						<div class="form-group">
							<label>Quê quán</label>
							<input type="text" name="address" class="form-control" value="{{$NhanVien->address}}">
						</div>
					</div>
					<div class="col-sm-6">
						<div class="form-group">
							<label>Số điện thoại</label>
							<input type="text" name="phone" class="form-control" value="{{$NhanVien->phone}}">
						</div>
					</div>
					<div class="col-sm-6">
						<div class="form-group">
							<label>Email</label>
							<input type="text" name="email" class="form-control" value="{{$NhanVien->email}}">
						</div>
					</div>
					<div class="col-sm-12">
						<div class="form-group">
							<label>Kinh nghiệm</label>
							<textarea id="demo" class="form-control ckeditor" rows="5" name="experience" >{{$NhanVien -> experience}}</textarea>
						</div>
					</div>
				</div>
				<div class="form-group col-md-3">
					<div class="add--img">
						<div class="image-title">Add Image</div>
						<div class="form-group form--img">
							<input type="file" name="images" class="file" id="imageUpload" multiple="" onchange="previewImage(event);">
							<button class="browse btn btn-img" type="button">
								<img src="upload/images/{{$NhanVien ->images}}" width="150px" height="150px">
							</button>
						</div>
						<div class="box-preview-img"></div>
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
<script type="text/javascript">
	$(document).on('click','.browse',function(){
		var file = $(this).parent().parent().find('.file');
		file.trigger('click');
	});
	$(document).on('change','.file',function(){
		$(this).parent().find('.form-control').val($(this).val().replace(/C:\\fakepath\\/i,''));
	});
	function previewImage(event){
		var files = document.getElementById('imageUpload').files;
		var filename = document.getElementById('imageUpload').value;
		var a= filename.replace(/^.*[\\\/]/,'');
		$('#upload .box-preview-img').show();
		$('upload .box-preview-img').html('');
		for(i=0;i<files.length;i++)
		{
			$('#upload .box-preview-img').append('<img src="" id="' +i+'" width="150px" height="150px">');
			$('#upload .box-preview-img img:eq('+i+')').attr('src',URL.createObjectURL(event.target.files[i]));
			$('#upload .box-preview-img').append('<input name="img_default" value="'+a+'">');
		}
	}
</script>
</html>
@endsection