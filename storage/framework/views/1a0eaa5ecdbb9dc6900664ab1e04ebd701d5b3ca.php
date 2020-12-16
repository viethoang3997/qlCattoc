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
  <div class="row" >
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
	<div class="container" style="width: 90%">
    <span style="text-align: center;"><h3>Thêm thời gian</h3></span>
    <form action="" method="POST" >
      <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
      <div class="row">
          <div class="col-md-10">
            <div class="form-group">
              <label>Thời gian *</label>
              <input type="text" name="title" class="form-control" placeholder="Tên thời gian">
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
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layout.index', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>