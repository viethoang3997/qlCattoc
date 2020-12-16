<?php $__env->startSection('content'); ?>
<!DOCTYPE html>
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<body>
	<div class="container">
		<div><span style="text-align: center;"><h3>Danh sách khách hàng đặt lịch</h3></span></div>
		<div class="button row pull-right">
			<button type="submit" class="btn btn-default" style="background: #006600;color: #FFFFFF"><i class="fa fa-file-excel-o" aria-hidden="true"></i>Xuất Excel</button>
		</div>
		<table class="table table-dark">
			<thead>
				<tr >
					<th>STT</th>
					<th>Tên khách hàng</th>
					<th>Số điện thoại</th>
					<th>Giờ cắt</th>
					<th>Ngày cắt</th>
					<th>Trạng thái</th>
					<th>Hành động</th>
				</tr>
			</thead>
			<tbody>
				<?php $__currentLoopData = $DatLich; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
				<tr>
					<td><?php echo e($key->id); ?> <input type="hidden" value="<?php echo e($key->id); ?>"></td>
					<td><?php echo e($key->fullName); ?></td>
					<td><?php echo e($key->phone); ?></td>
					<td><?php echo e($key->time); ?></td>
					<td><?php echo e($key ->date); ?></td>
					<td><?php echo e($key ->status); ?></td>
					<td>
						<button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal"><i class="fa fa-pencil" aria-hidden="true" style="margin-right: 10px;"></i></button>
						<div class="modal fade" id="myModal" role="dialog">
					    <div class="modal-dialog modal-sm">
					    	<form action="" method="POST">
								<input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>" >
							      <div class="modal-content">
							        <div class="modal-header">
							          <button type="button" class="close" data-dismiss="modal">&times;</button>
							          <h4 class="modal-title">Thay đổi trạng thái</h4>
							        </div>
							        <div class="modal-body">
							        	<select name="status" class="form-control">
							        		<option value="Mới">Mới</option>
							        		<option value="Xác nhận">Xác nhận</option>
							        		<option value="Hủy">Hủy</option>
							        	</select>
							        </div>
							        <div class="modal-footer">
							        	<a href="admin/DatLich/trangthai/<?php echo e($key->id); ?>"  type="submit" class="btn btn-default" style="background: #00CC00; color: #FFFFFF">Lưu lại</a>
							          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
							        </div>
							      </div>
							</form>
					    </div>
					  </div>
					</td>
				</tr>
				<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>	
		</tbody>
	</table>
	
	<div class="pull-right"><?php echo $DatLich -> links(); ?></div>
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
	.btn-group-lg>.btn, .btn-lg {
    padding: 4px 4px;
</style>
<script type="text/javascript">
	$(document).ready(function(){
		// $('#update_status').on('click',function(){
		// 	var data = $('select[name=status] option:checked').val();
		// 	console.log(data);
		// 	$.ajax({
		// 		data : $('select[name=status] option:checked').val(),
		// 		type: 'POST',
		// 		url : 'admin/DatLich/trangthai'+ data,  
		// 		success: function(response){
		// 			console.log(data);
		// 			alert("success");
		// 		}
		// 	});
		// });
	})
</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layout.index', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>