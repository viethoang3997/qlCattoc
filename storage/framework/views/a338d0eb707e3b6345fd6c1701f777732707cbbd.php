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
	<div class="container" style="width: 90%">
		<span style="text-align: center;"><h3>Thêm mới ca làm việc</h3></span>
		<form action="" method="POST">
			<input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
			<div class="row">
				<div class="col-md-6">
					<div class="form-group">
						<label>Tên ca làm việc</label>
						<select name="type" class="form-control">
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
						<input type="date" name="date" class="form-control">
					</div>
				</div>
				<div class="col-md-6">
					<div class="form-group">
						<select class="selectpicker" multiple title="Choose one of the following...">
						  <option>Mustard</option>
						  <option>Ketchup</option>
						  <option>Relish</option>
						</select>

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

<?php $__env->stopSection(); ?>
							
<?php echo $__env->make('admin.layout.index', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>