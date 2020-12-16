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
		<span style="text-align: center;"><h3>Sửa hóa đơn</h3></span>
		<form action="" method="POST">
			<input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
			<div class="row">
				<div class="col-md-5">
					<div class="form-group">
						<label>Tên khách hàng</label>
						<input type="text" name="fullName" value="<?php echo e($HoaDon->fullName); ?>" class="form-control" readonly="readonly">
					</div>
				</div>
				<div class="col-md-5">
					<div class="form-group">
						<label>Số điện thoại</label>
						<input type="text" name="phone" value="<?php echo e($HoaDon->phone); ?>" class="form-control" readonly="readonly">
					</div>
				</div>
				<div class="col-md-5">
					<div class="form-group">
						<label>Ngày cắt</label>
						<input type="text" name="date" value="<?php echo e($HoaDon->date); ?>" class="form-control" readonly="readonly">
					</div>
				</div>
				<div class="col-md-5">
					<div class="form-group">
						<label>Thời gian cắt</label>
						<input type="text" name="time" value="<?php echo e($HoaDon->time); ?>" class="form-control" readonly="readonly">
					</div>
				</div>
				<div class="col-md-5">
					<div class="form-group">
						<label>Tên nhân viên</label>
						<input type="text" name="fullNameStaff" class="form-control" value="">
					</div>
				</div>
				<div class="col-md-5">
					<div class="form-group">
						<label>Tên dịch vụ</label>
						<input type="text" name="service" class="form-control" value="">
					</div>
				</div>
				<div class="col-md-5">
					<div class="form-group">
						<label>Sản phẩm</label>
						<input type="text" name="product" class="form-control" value="">
					</div>
				</div>
				<div class="col-md-5">
					<div class="form-group">
						<label>Tổng tiền</label>
						<input type="text" name="quantity" class="form-control" value="">
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
</html>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layout.index', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>