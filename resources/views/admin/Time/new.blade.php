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
    <span style="text-align: center;"><h3>Thêm thời gian</h3></span>
    <form action="" method="POST" >
      <input type="hidden" name="_token" value="{{csrf_token()}}">
      <div class="row">
          <div class="col-md-10">
            <div class="form-group">
              <label>Thời gian *</label>
              <input type="text" name="title" class="form-control" placeholder="Tên thời gian">
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
