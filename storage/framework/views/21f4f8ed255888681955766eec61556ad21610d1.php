<?php $__env->startSection('content'); ?>
<!DOCTYPE html>
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

  <style type="text/css">
  	.file{display: hidden;}
  </style>
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
		<span style="text-align: center;"><h3>Thêm dịch vụ</h3></span>
		<form action="" method="POST" id="upload" enctype="multipart/form-data">
			<input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
			<div class="row">
				<div class="col-md-9">
					<div class="col-md-6">
						<div class="form-group">
							<label>Tên dịch vụ *</label>
							<input type="text" name="title" class="form-control" placeholder="Tên dịch vụ">
						</div>
					</div>
					<div class="col-md-6">
						<div class="form-group">
							<label>Giá</label>
							<input type="text" name="price" class="form-control" placeholder="Điền giá">
						</div>
					</div>
					<div class="col-md-12">
						<div class="form-group">
							<label>Ghi chú</label>
							<textarea id="demo" class="form-control ckeditor" rows="5" name="content" ></textarea>
						</div>
					</div>
				</div>
				<div class="form-group col-md-3">
					<div class="add--img">
						<div class="image-title">Add Image</div>
						<div class="form-group form--img">
							<input type="file" name="images" class="file" id="imageUpload" multiple="" onchange="previewImage(event);">
							<button class="browse btn btn-img" type="button">
							</button>
						</div>
						<div class="box-preview-img"></div>
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
<script type="text/javascript">
	$(document).on('click','.browse',function(){
		var file = $(this).parent().parent().find('.file');
		file.trigger('click');
	});
	$(document).on('change','.file',function(){
		$(this).parent().find('.form-control').val($(this).val().replace(/C:\\fakepath\\/i,''));
	});
</script>
<script>
	function previewImage(event){
		var files = document.getElementById('imageUpload').files;
		var filename = document.getElementById('imageUpload').value;
		var a= filename.replace(/^.*[\\\/]/,'');
		$('#upload .box-preview-img').show();
		$('upload .box-preview-img').html('');
		for(i=0;i<files.length;i++)
		{
			$('#upload .box-preview-img').append('<img src="" id="' +i+'" width="150px" height="150px">');
			$('#upload .box-preview-img img:eq('+i+')').attr('src',URL.createObjectURL(event.target.files[i]));
			$('#upload .box-preview-img').append('<input name="img_default" value="'+a+'">');
		}
	}
</script>
</html>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layout.index', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>