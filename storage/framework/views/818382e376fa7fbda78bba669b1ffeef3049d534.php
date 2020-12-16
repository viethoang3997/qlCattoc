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
	<div class="row " >
	    <div class="col-md-4" >
	     <?php if(count($errors)>0): ?>
	        <div class="alert alert-danger">
	            <?php $__currentLoopData = $errors -> all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $err): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
	               <?php echo e($err); ?> <br>
	            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
	        </div>
	      <?php endif; ?>

	      <?php if(session('Thongbao')): ?>
	         <div class="alert alert-success">
	             <?php echo e(session('Thongbao')); ?>

	             
	         </div>
	      <?php endif; ?>
	    </div>
    </div>
	<div class="container">
		<div><span style="text-align: center;"><h3>Danh sách thời gian đặt lịch</h3></span></div>
		<div class="button row pull-right">
			<button type="submit" class="btn btn-default" style="background: #006600;color: #FFFFFF"><i class="fa fa-file-excel-o" aria-hidden="true"></i>Xuất Excel</button>
			<a href="admin/ThoiGian/Them"><button type="button" data-toggle="modal" data-target="#myModal" class="btn btn-default" style="background: #FF9900;color: #FFFFFF">Thêm mới</button></a>
		</div>
		<table class="table table-dark" width="50%" align="center">
			<thead>
				<tr >
					<th width="20%">STT</th>
					<th width="20%">Thời gian</th>
					<th width="20%">Hành động</th>
				</tr>
			</thead>
			<tbody>
				<?php $__currentLoopData = $ThoiGian; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
				<tr>
					<td><?php echo isset($key ->id) ? $key->id: ''; ?></td>
					<td><?php echo isset($key->title)? $key->title: ''; ?></td>
					<td>
						<a href="admin/ThoiGian/Sua/<?php echo e($key->id); ?>"><i class="fa fa-pencil" aria-hidden="true" style="margin-right: 10px;"></i></a>
						<a href="admin/ThoiGian/xoa/<?php echo e($key->id); ?>"><i class="fa fa-trash" aria-hidden="true"></i></a>
					</td>
				</tr>
				<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
			</tbody>
		</table>
		<div class="pull-right"><?php echo $ThoiGian -> links(); ?></div>
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