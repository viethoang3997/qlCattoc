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
		<span style="text-align: center;"><h3>Thêm mới nhân viên</h3></span>
		<form action="" method="POST">
			<input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
			<div class="row">
				<div class="col-sm-5">
					<div class="form-group">
						<label>Họ Tên *</label>
						<input type="text" name="Hoten" class="form-control" placeholder="Điền họ tên">
					</div>
					<div class="form-group">
						<label>Giới tính</label>
						<select class="input_text form-control" name="GioiTinh">
							<option value="0">Chọn</option>
			                <option value="1">Nam</option>
			                <option value="2">Nữ</option>
		                </select>
					</div>
					<div class="form-group">
						<label>Email</label>
						<input type="text" name="email" class="form-control" placeholder="Điền email">
					</div>
					<div class="form-group">
						<label>Điện thoại</label>
						<input type="text" name="sdt" class="form-control" placeholder="Điền số điện thoại">
					</div>
				</div>
				<div class="col-sm-5">
					<div class="form-group">
						<label>Ngày sinh</label>
						<input type="date" name="NgaySinh" class="form-control">
					</div>
					<div class="form-group">
						<label>Địa chỉ</label>
						<input type="text" name="DiaChi" class="form-control" placeholder="Điền địa chỉ">
					</div>
					<div class="form-group">
						<label>Trạng thái</label>
						<select class="input_text form-control" name="TrangThai">
							<option value="0">Chọn</option>
							<option value="1">Có hiệu lực</option>
							<option value="2">Không hiệu lực</option>
						</select>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-sm-10">
					<label>Ghi chú</label>
					<textarea class="form-control" rows="5" name="GhiChu" ></textarea>
				</div>
			</div>
			<div style="margin-left: 806px;margin-top: 20px;">
				<button type="reset" class="btn btn-default" style="background: #FF0000; color: #FFFFFF" >Đóng</button>
           		<button type="submit" class="btn btn-default" style="background: #00CC00;color: #FFFFFF">Lưu lại</button>
			</div>
		</form>
	</div>
</body>
</html>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layout.index', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>