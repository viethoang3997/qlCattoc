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
		<span style="text-align: center;"><h3>Thêm mới bảng lương</h3></span>
		<form action="" method="POST">
			<input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
			<div class="row">
				<div class="col-md-6">
					<div class="form-group">
						<label>Mã nhân viên</label>
						<input type="text" name="ma" class="form-control">
					</div>
					<div class="form-group">
						<label>Loại</label>
						<select class="input_text form-control" name="Loai">
							<option value="0">--Chọn--</option>
							<option value="1">Trả theo ngày</option>
							<option value="2">Trả theo tháng</option>
							<option value="3">Trả theo quý</option>
							<option value="4">Trả theo năm</option>
						</select>
					</div>
					<div class="form-group">
						<label>Tiêu đề phiếu</label>
						<input type="text" name="Tieude" class="form-control">
					</div>
					<div class="form-group">
						<label>Trạng thái</label>
						<select class="input_text form-control" name="TrangThai">
							<option value="0">Có hiệu lực</option>
							<option value="1">Không hiệu lực</option>
						</select>
					</div>
				</div>
				<div class="col-md-6">
					<div class="form-group">
						<label>Tên nhân viên</label>
						<input type="text" name="Ten" class="form-control">
					</div>
					<div class="form-group">
						<label>Tổng lương</label>
						<input type="text" name="TongLuong" class="form-control">
					</div>
					<div class="form-group">
						<label>Thứ tự trong kỳ lương</label>
						<input type="text" name="ThuTu" class="form-control">
					</div>
				</div>
				<div class="col-md-12">
					<label>Ghi chú</label>
					<textarea rows="5" class="form-control" name="GhiChu"></textarea>
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