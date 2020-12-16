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
		<div><span style="text-align: center;"><h3>Danh sách ca làm việc</h3></span></div>
		<div class="button row pull-right">
			<button type="submit" class="btn btn-default" style="background: #006600;color: #FFFFFF"><i class="fa fa-file-excel-o" aria-hidden="true"></i>Xuất Excel</button>
			<a href="admin/CaLam/Them"><button type="submit" class="btn btn-default" style="background: #FF9900;color: #FFFFFF">Thêm mới</button></a>
		</div>
		<table class="table table-dark">
			<thead>
				<tr >
					<th>STT</th>
					<th >Tên ca làm</th>
					<th>Tên nhân viên</th>
					<th>Ngày làm việc</th>
					<th>Hành động</th>
				</tr>
			</thead>
			<tbody>
				<?php $__currentLoopData = $CaLam; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
				<tr>
					<td><?php echo e($key->id); ?></td>
					<td><?php echo e($key->nameType); ?></td>
					<td><?php echo e($key->fullName); ?></td>
					<td><?php echo e($key->date); ?></td>
					<td>
						<a href="admin/CaLam/xoa/<?php echo e($key->id); ?>"><i class="fa fa-trash" aria-hidden="true"></i></a>
					</td>
				</tr>
				<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
		</tbody>
	</table>
	<div class="pull-right"><?php echo $CaLam->links(); ?>

	</div>
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
		margin-bottom: 30px;
	}
</style>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layout.index', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>