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
		<span style="text-align: center;"><h3>Thêm mới ca làm việc</h3></span>
		<form action="" method="POST">
			<input type="hidden" name="_token" value="{{csrf_token()}}">
			<div class="row">
				<div class="col-md-6">
					<div class="form-group">
						<label>Tên ca làm việc</label>
						<select name="type" class="form-control" id="type">
							<option value="0">Chọn ca làm</option>
							<option value="1">Ca 7:00 -> 11:30</option>
							<option value="2">Ca 13:00 -> 17:30</option>
							<option value="3">Ca từ 17:30 -> 21:30</option>
						</select>
					</div>
				</div>
				<div class="col-md-6">
					<div class="form-group">
						<label>Ngày làm việc</label>
						<input type="date" name="date" id="date" class="form-control">
					</div>
				</div>
				<div class="row">
					<div class="col-md-5">
					    <h3>Danh sách nhân viên</h3>
					    <table class="table table-bordered table-responsive" id="table1">
					        <thead>
					        <tr>
					            <th>STT</th>
					            <th>Tên nhân viên</th>
					            <th>Ngày sinh</th>
					            <th>
					            </th>
					        </tr>
					        </thead>
					        <tbody>
					        @foreach($NhanVien as $a => $key)
					        <tr>
					            <td>{{$key -> id}}</td>
					            <td>
					               {{$key -> fullName}}
					            </td>
					            <td>{{$key->birthday}}</td>
					            <td data="{{$key -> fullName}}">
					                <input class="style-checkbox" type="checkbox" id="<?php echo $a; ?>" name="check-tab<?php echo $a; ?>"/>
					            </td>
					        </tr>
					        @endforeach
					        </tbody>
					    </table>
					</div>
					<div class="col-md-1">
					    <a href="javascript:;" class="btn btn-info" style="margin-top: 58px;" onclick="tab1_To_tab2()"><i class="fa fa-angle-double-right" aria-hidden="true"></i></a>
					    <a href="javascript:;" class="btn btn-warning" style="margin-top: 5px;" onclick="tab2_To_tab1()"><i class="fa fa-angle-double-left" aria-hidden="true"></i></a>
					</div>
					<div class="col-md-5">
					    <h3>Danh sách nhân viên theo ca</h3>
					    <table class="table table-bordered table-responsive" id="table2">
					        <thead>
					        <tr>
					            <th>STT</th>
					            <th>Tên nhân viên</th>
					            <th>Ca làm</th>
					            <th>Ngày làm</th>
					            <th></th>
					        </tr>
					        </thead>
					        <tbody>
					        	
					        </tbody>
					    </table>
					</div>
					<div class="clearfix"></div>
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
<script type="text/javascript">
	
	function tab1_To_tab2()
    {
        var	varType = $('#type').val(), date = $('#date').val();
        var nameType = $('option[value="'+varType+'"]').html();
        if(varType && date){
        	var content = '';
        	$('.style-checkbox').each(function(){
        		if($(this).prop('checked')){
        			var id = $(this).attr('id');
        			var fullName =  $(this).parent().attr('data');
        			content = content+'<tr><td> <input type="hidden" name="id" value="'+id+'"/></td><td> <input type="hidden" name="fullName" value="'+fullName+'"/>'+fullName+'</td><td>  <input type="hidden" name="nameType" value="'+nameType+'"/>'+nameType+'</td><td><input type="hidden" name="date" value="'+date+'"/>'+date+'</td><td><input class="right-checkbox" type="checkbox"/></td></tr>';
    
        		}
        	});
        	$('#table2 tbody').append(content);
        	getStt();
        }else{
        	alert('Chưa chọn ca làm và thời gian');
        }
    }

    function tab2_To_tab1()
    {
       $('#table2 .right-checkbox').each(function(){
	       	if($(this).prop('checked')){
	       		$(this).parents('tr:first').remove();
	       	}
       });
       getStt();
    }
    function getStt(){
    	var number = 1;
    	$('#table2 tbody tr').each(function(){
    		$(this).find('td:first').html(number);
    		number = number + 1;
    	});
    }
</script>
</html>
@endsection
							