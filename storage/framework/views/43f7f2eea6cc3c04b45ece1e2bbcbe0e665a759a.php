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
		<span style="text-align: center;"><h3>Sửa cấp bậc</h3></span>
		<form action="admin/CapBac/Sua/<?php echo e($CapBac->id); ?>" method="POST">
			<input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
			<div class="row">
				<div class="col-md-6">
					<div class=" form-group">
						<label>Mã cấp bậc</label>
						<input type="text" name="maCapBac" class="form-control" value="<?php echo e($CapBac->Ma_cap_bac); ?>" readonly="readonly">
					</div>
				</div>
				<div class="col-md-6">
					<div class="form-group">
						<label>Tên cấp bậc *</label>
						<input type="text" name="ten" class="form-control" value="<?php echo e($CapBac->Ten); ?>">
					</div>
				</div>
				<div class="col-md-6">
					<div class="form-group">
						<label>Trạng thái</label>
						<select name="TrangThai" class="form-control" id="status">
							<option value="1" <?php echo e($CapBac->Trang_thai == 1 ? 'selected' : ''); ?>>Hoạt động</option>
							<option value="2" <?php echo e($CapBac->Trang_thai == 2 ? 'selected' : ''); ?>>Không hoạt động  </option>
						</select>
					</div>
				</div>
				
				<div class="col-md-6">
					<div class="form-group">
						<label>Ghi chú</label> 
						<textarea class="form-control" rows="2" name="GhiChu" ><?php echo e($CapBac -> Ghi_chu); ?></textarea>
					</div>
				</div>
			</div>
			<div style="margin-left: 806px;margin-top: 20px;">
				<button type="reset" class="btn btn-default" style="background: #FF0000;color: #FFFFFF" >Đóng</button>
           		<button type="submit" class="btn btn-default" style="background: #00CC00;color: #FFFFFF">Lưu lại</button>
			</div>
		</form>
	</div>
</body>
</html>
<script type="text/javascript">
	$("#thanh_pho").find(":selected").val()
</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layout.index', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>