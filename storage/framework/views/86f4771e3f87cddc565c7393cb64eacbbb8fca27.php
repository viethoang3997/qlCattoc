<?php $__env->startSection('content'); ?>
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
		<div><span style="text-align: center;"><h3>Danh sách nhân viên</h3></span></div>
		<div class="button row pull-right">
			<button type="submit" class="btn btn-default" style="background: #006600;color: #FFFFFF"><i class="fa fa-file-excel-o" aria-hidden="true"></i>Xuất Excel</button>
			<button type="submit" class="btn btn-default" style="background: #FF9900;color: #FFFFFF">Thêm mới</button>
		</div>
		<table class="table table-dark">
			<thead>
				<tr >
					<th>STT</th>
					<th >Mã nhân viên</th>
					<th>Tên nhân viên</th>
					<th>Cấp bậc nhân viên</th>
					<th>Chức vụ</th>
					<th>Email</th>
					<th>Ngày tạo</th>
					<th>Trạng thái</th>
					<th>Hành động</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td>1</td>
					<td>NV001</td>
					<td>Nguyễn Văn Test1</td>
					<td>Trưởng phòng</td>
					<td>Maketing</td>
					<td>nguyenvantest1@gmail.com</td>
					<td>11:11 24/03/2018</td>
					<td><i class="fa fa-circle" aria-hidden="true" style="color: #00DD00;margin-right: 5px;"></i>Có hiệu lực</td>
					<td>
						<a href="#"><i class="fa fa-pencil" aria-hidden="true" style="margin-right: 10px;"></i></a>
						<a href="#"><i class="fa fa-trash" aria-hidden="true"></i></a>
					</td>
				</tr>
				<tr>
					<td>2</td>
					<td>NV002</td>
					<td>Nguyễn Văn Test2</td>
					<td>Quản lý</td>
					<td>Maketing</td>
					<td>nguyenvantest2@gmail.com</td>
					<td>11:11 24/03/2018</td>
					<td><i class="fa fa-circle" aria-hidden="true" style="color: #00DD00;margin-right: 5px;"></i>Có hiệu lực</td>
					<td>
						<a href="#"><i class="fa fa-pencil" aria-hidden="true" style="margin-right: 10px;"></i></a>
						<a href="#"><i class="fa fa-trash" aria-hidden="true"></i></a>
					</td>
				</tr>
				<tr>
					<td>3</td>
					<td>NV003</td>
					<td>Nguyễn Văn Test3</td>
					<td>Nhân viên</td>
					<td>Maketing</td>
					<td>nguyenvantest@gmail.com</td>
					<td>11:11 24/03/2018</td>
					<td><i class="fa fa-circle" aria-hidden="true" style="color: #00DD00;margin-right: 5px;"></i>Có hiệu lực</td>
					<td>
						<a href="#"><i class="fa fa-pencil" aria-hidden="true" style="margin-right: 10px;"></i></a>
						<a href="#"><i class="fa fa-trash" aria-hidden="true"></i></a>
					</td>
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
	.button {
		display: inline-block;
		margin-bottom: 10px;
	}
</style>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layout.index', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>