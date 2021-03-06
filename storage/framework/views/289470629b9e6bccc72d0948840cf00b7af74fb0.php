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
				<?php $__currentLoopData = $NhanVien; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
				<tr>
					<td><?php echo e($key->id); ?></td>
					<td><?php echo e($key->Ma_nhan_vien); ?></td>
					<td><?php echo e($key->Ho_ten); ?></td>
					<td><?php echo e($key -> Chuc_vu); ?></td>
					<td><?php echo e($key ->Cap_bac); ?></td>
					<td><?php echo e($key->email); ?></td>
					<td></td>
					<td><i class="fa fa-circle" aria-hidden="true" style="color: #00DD00;margin-right: 5px;"></i>Có hiệu lực</td>
					<td>
						<a href="admin/NhanVien/Sua/<?php echo e($key->id); ?>"><i class="fa fa-pencil" aria-hidden="true" style="margin-right: 10px;"></i></a>
						<a href="admin/NhanVien/xoa/<?php echo e($key->id); ?>"><i class="fa fa-trash" aria-hidden="true"></i></a>
					</td>
				</tr>
				<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
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