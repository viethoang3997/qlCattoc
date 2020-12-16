<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Đặt lịch cắt </title>
	<link rel="stylesheet" href="<?php echo e(asset('css/main.css')); ?>">
	 <link rel="stylesheet" href="https://necolas.github.io/normalize.css/7.0.0/normalize.css">
	 <style type="text/css">
	 	.inp-click{
	 				position: relative;
	 			    float: left;
				    display: block;
				    max-width: calc(20% - 4px );
				    text-align: center;
				    font-size: 20px;
				    padding: 25px;
				    margin: 2px;
				    border-bottom: 2px solid green;
				    cursor: pointer;
	 			}
		 	.ajaxShow:after{
		 		content: '';
		 		display: table;
		 		clear: both;
		 	}
	 	.inp-click:hover, .inp-click:focus{
	 		background-color: #888888 ; 
	 		font-weight: bold;
	 		color: white;
	 	}
	 	.day-book a:after{
	 		content: '';
	 		display: table;
	 		clear: both;
	 	}
	 	.day-book a:hover p{
	 		background: #333;
	 		color: white;
	 	}
	 	.day-book a.active, .day-book a.active p {
			background: #333;
			color: white; 
	 	}
	 </style>
</head>
<body>
 <?php 
 	class Utils
	{
		public static function printDay($dayAdded)
		{		date_default_timezone_set("Asia/Bangkok");			
				$today= date('Y/m/d', strtotime("+ $dayAdded days"));	
				$DoW= date("w", strtotime("+ $dayAdded days"));
				$thu = "";
				//echo gettype($DoW);
				switch ($DoW)
				{
					case "1":
						$thu = "Thứ Hai";
						break;
					case "2":
						$thu = "Thứ Ba";
						break;
					case "3":
						$thu = "Thứ Tư";
						break;
					case "4":
						$thu = "Thứ Năm";
						break;
					case "5":
						$thu = "Thứ Sáu";
						break;
					case "6":
						$thu = "Thứ Bảy";
						break;
					default :
						$thu = "Chủ Nhật";
						break;
				}
			echo $today;
			echo "<br>".$thu;
		    
											
		}
	}
?>
	<div class="container">
		<div class="header">
			<marquee>HairBeauti - Hân hạnh được phục vụ quý khách</marquee>
		</div> <!-- End header -->
		<div class="content">
			<div class="main">
			
				<img src="../../images/title_booking_v5.jpg" alt="Đặt lịch siêu tốc" width="100%">
				<span >(CHỈ 3 BƯỚC, KHÔNG CẦN ĐĂNG NHẬP) </span> 
				<br>
				<em class="warning">
					Vui lòng nhập đúng tên và số điện thoại để salon thông báo những tin tức mới nhất về dịch vụ và thời gian cắt.
				</em>
					
				<div class="wp-booking " align="left">
					<h3 class="h3-text">
						BƯỚC 1 : ĐIỀN THÔNG TIN : 
					</h3>
					<form action="" method="POST" id="upload" enctype="multipart/form-data">
					<input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
						<input type="text" name="fullName" placeholder="HỌ VÀ TÊN">
						<input type="text" name="phone" placeholder="SỐ ĐIỆN THOẠI" style="margin-top: 15px;">
						<input type="text" name="date" hidden="hidden" value="" >
						<h3 class="h3-text">
							BƯỚC 2 : CHỌN NGÀY CẮT : 
						</h3>
						<div class="day-book">				
							<ul >
									<li>
										<a href="javascript:;" class="date-parent" title="Hôm nay" >Hôm nay
											<p class="date" name="date" value="<?php  Utils::printDay(0); ?>">	<?php  Utils::printDay(0); ?></p>
										</a>	
									</li>
									<li>
										<a href="javascript:; " class="date-parent" title="Ngày mai"   >Ngày Mai
										<p class="date" name="date" value="<?php Utils::printDay(1);?>">
											 <?php Utils::printDay(1);?>
										</p>
	                                   
	                                    </a>
									</li>
									<li>
										<a href="javascript:;" class="date-parent" title="Ngày kia" >Ngày Kia
	                                    	<p class="date" name="date" value="<?php  Utils::printDay(2);  ?>" ><?php  Utils::printDay(2);  ?></p>
	                                    </a>
									</li>
							</ul>
						</div>
						<h3 class="h3-text">
							BƯỚC 3 : CHỌN THỜI GIAN CẮT: 
						</h3>
						 	<div class="ajaxShow" style="margin-top:2px;border-bottom: 3px solid green;display: block; ">
   					    </div>
						<p style="text-align: center;" >

							Combo Cắt tóc/Gội đầu của HairBeauti cam kết mang lại sự sạch sẽ tối đa nên anh cứ thoải mái chọn khung giờ để cắt tóc xong đi chơi, đi làm ngay!
						</p>
	                   
						<input type="submit" name="submit" value="ĐẶT LỊCH CẮT" class="btn-sm">
					</form>
					<p class="text-note"><b>Xin các anh lưu ý: </b><br> *  Giờ phục vụ có thể muộn <font style="color: red;">5-10 phút</font> vì một số lý do bất khả kháng, mong anh thông cảm giúp chúng em. <br> * Mỗi lượt đặt lịch chỉ cho 1 người. Nếu đi theo nhóm, các anh vui lòng đặt nhiều lần với đúng sđt từng người. <br>* Nếu tới muộn quá 5 phút anh vui lòng đặt lại lịch khác với lễ tân. <br>* Để chuyển lịch cắt, anh đặt lại bình thường với SĐT cũ</p>
				</div>
			
			</div>
		</div> <!-- end content -->
		<div class="footer">
			2017 © VietNam. All Rights Reserved. Coded,Edited & Designed by Luân, Hoàng, Tuyền 
		</div>
	</div>

<script src="<?php echo e(asset('admin_asset/bower_components/jquery/dist/jquery.min.js')); ?>"></script>
<script type="text/javascript">
	$(document).ready(function(){
		$.ajax({ 
			 url: 'ajaxShowTime',
	         type: 'get',
	         dataType: 'json',
	         success: function(response) {
	         	var array1 = response;
	         	console.log(response);
	         	array1.forEach(function(element) {
				  console.log(element);
				  $('.ajaxShow').append("<input class='inp-click' onclick=\"myFunction(\'"+element+"\')\" value='"+element+"' onfocus='focusFunction(this)' />");
				});
	         	 
             }
		});
	});

	function focusFunction(x) {
		$('.inp-click').attr('style','');
	    x.style.background = '#888888' ;
	}

	function myFunction(a) {
		$('input[name="time"]').attr('name','');
		$('.ajaxShow').append("<input name='time' class='thoigian' hidden='hidden' value=\""+a+"\" />");
		console.log(a);
		};
	$('.date-parent').on('click',function(){
		$('.date-parent').removeClass('active');
		$(this).addClass('active');
		var dateTime= $(this).children('p').attr('value') ;
		var date =  dateTime.split('<br>')[0];
		$('input[name="date"]').attr('value',date);
		//console.log('Date : '+ date + ' Thứ :' + dayOfWeek);
		
	})
	
</script>
</body>
<style type="text/css">
	*{
	box-sizing: border-box;
}
body{
	text-align: center;
	margin: 0px;
}
.container{
	margin: auto;
	text-align: center;
	background-color: #333;
}
.text-note{
	height: 210px;
	padding-top: 5px;
	padding-left: 12px;
	line-height: 25px;

}
marquee{
	font-size: 25px;
	font-family: inherit;
	}
.header{
	background:url(../img/homes/bg-v3.png);
	color: white;
}
.content{

	background-color: #eeeeee;
	margin-left: 15%;
	margin-right: 15%;
	padding-bottom: 30px;

}
.content:before, .content:after {
	content: '';
	display: table;

}
.content:after{
	clear: both;
}
img{
	
}
.main{
	float: left;
	border: 1px solid #eeeeee;

}

p{
	background-color: white;
	height: 100px;
	font-size: 18px;
	padding: 15px 5px;


}
.main>span{
	font-size: 30px;
}
.main .warning{
	color: red;
	font-size: 20px;
}
input{
	width: 100%;
	height: 40px;
	padding-left: 10px;
	border: 0px;
}
.wp-booking{
	width: 50%;
	margin-left: 25%;
}
h3{
	font-size: 25px;

}
/*input:hover,input:focus, input:active{
	border: 2px solid #333;
}*/
li{

	list-style: none;
}
.day-boook:before, .day-book:after{
	content: '';
	display: table;
}
.day-book:after{
	clear: both;
}
.day-book{
padding: 0px;
}
ul{
    display: block;
    list-style-type: disc;
    -webkit-margin-before: 1em;
    -webkit-margin-after: 1em;
    -webkit-margin-start: 0px;
    -webkit-margin-end: 0px;
    -webkit-padding-start: 0px;
}
 ul li{
	float: left;
	list-style: none;
	background-color: white;
	margin-left: 2px;
	width: 32.8%;
}

ul li a{
	text-decoration: none;
	color:#333;
	line-height: 60px;
	text-align: center;
	display: block;
	font-size: 25px;


}
a:hover, a:focus, a:active{
	background-color: #333;
	color: white;
	font-size: 28px;
}
.btn-sm{
	border: 0px;
	margin-top: 15px;
	background-color:#0ace21;
	font-size: 20px;
	font-weight: bold;
	color: white;
}
.footer{
	background-color: #000;
	color: white;
	border-top: 3px solid #fcd344;
	padding-top: 10px;
	line-height: 30px;

}
</style>
</html>