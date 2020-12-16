<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>gdnv</title>
<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href= "style.css" >
	<script>
	function openTab(evt, tabName) {
    	var i, tabcontent, tablinks;
    	tabcontent = document.getElementsByClassName("tabcontent");
    	for (i = 0; i < tabcontent.length; i++) {
        	tabcontent[i].style.display = "none";
    	}
    	tablinks = document.getElementsByClassName("tablinks");
    	for (i = 0; i < tablinks.length; i++) {
        	tablinks[i].className = tablinks[i].className.replace("active", "");
    	}
    	document.getElementById(tabName).style.display = "block";
    	evt.currentTarget.className += " active";
		}
</script>
</head>
<body>
<div class="topnv">
  <a  href="#">Trang chủ</a>
  <a class="gdnv" href="gdnv.php">Nhân sự</a>
  <a href="#">Lịch đặt</a>
  <a href="#">Dịch vụ</a>
  <a href="#">Doanh thu</a>
</div>


<div class="employee-container">
	<div class="employee-info">
    
		<div class="employee-info-image">
			<img src="image/mai-davika.jpg" width="200px" height="200px">
			<div>
				<button onclick="window.location.href='upanh.php' " style="margin-left: 30px; margin-top:10px;">
					Thay đổi ảnh
				</button>
			</div>
		</div>
     
		<div class="employee-info-introduce">
			<h3>
				Mai Davika
			</h3>
			<div id="team">
				Teamcrop - Sale
			</div>
			<div id="position">
				Nhân viên - Nhân viên chính thức
			</div>
			<div id="email">
				maidavika@gmail.com
			</div>
			<div id="phone">
				0123458888
			</div>
		</div>
	</div>
	<div class="employee-forms">
		<div class="tab">
			<button class="tablinks" onclick="openTab(event,'so-yeu-li-lich')" ><span style="color:#F00">Sơ yếu lý lịch</span></button>
			<button class="tablinks" onclick="openTab(event,'cham-cong')" ><span style="color:#F00">Chấm công</span></button>
			<button class="tablinks" onclick="openTab(event,'luong')" ><span style="color:#F00">Lương</span></button>
			<button class="tablinks" onclick="openTab(event,'doanh-so')" ><span style="color:#F00">Doanh số</span></button>
		</div>

		<!-- tab contents -->
		<div id="so-yeu-li-lich" class="tabcontent">
			<div class="fields">
				<div class="labels">
					<span style="color:#F00">Họ tên:</span>
				</div>
				<div class="inputs">
					<input type="text" name="name">
				</div>
			</div>
			<div class="fields">
				<div class="labels">
					<span style="color:#F00">Địa chỉ:</span>
				</div>
				<div class="inputs">
					<input type="text" name="address">
				</div>
			</div>
			<div class="fields">
				<div class="labels">
					<span style="color:#F00">Ngày sinh:</span>
				</div>
				<div class="inputs">
					<input type="date" name="birthday">
				</div>
			</div>
            <div class="fields">
				<div class="labels">
                     <span style="color:#F00">Số điện thoại:</span>
				</div>
				<div class="inputs">
					<input type="text" name="phone">
				</div>
			</div>
            <div class="fields">
				<div class="labels">
					<span style="color:#F00">Địa chỉ Email:</span>
				</div>
				<div class="inputs">
					<input type="text" name="email">
				</div>
			</div>

			<div class="fields">
				<button onclick="window.location.href= '' ">
					Lưu
				</button>
                <button style="margin-left:10px" onclick="window.location.href= '' ">
					Xóa
				</button>
			</div>
           
		</div>
		<div id="cham-cong" class="tabcontent">
			<div class="fields">
				<div class="labels">
					<span style="color:#F00">Công theo ngày:</span>
				</div>
				<div class="inputs">
					<input type="text" name="c1">
				</div>
			</div>
            <div class="fields">
				<div class="labels">
					<span style="color:#F00">Tổng công trong tháng:</span>
				</div>
				<div class="inputs">
					<input type="text" name="c2">
				</div>
			</div>
            <div class="fields">
				<button style="margin-left:400px" onclick="window.location.href= '' ">
					Cập nhật
				</button>
                
			</div>
		</div>
		<div id="luong" class="tabcontent">
			<div class="fields">
				<div class="labels">
					<span style="color:#F00">Tổng lương:</span>
				</div>
				<div class="inputs">
					<input type="text" name="name">
				</div>
			</div>
			<div class="fields">
				<button style="margin-left:400px" onclick="window.location.href= '' ">
					Cập nhật
				</button>
                
			</div>
		</div>
		<div id="doanh-so" class="tabcontent">
			<div class="fields">
				<div class="labels">
					Doanh số trong ngày:
				</div>
				<div class="inputs">
					<input type="text" name="d1">
				</div>
			</div>
            <div class="fields">
				<div class="labels">
					Tổng doanh số:
				</div>
				<div class="inputs">
					<input type="text" name="d2">
				</div>
			</div>
            <div class="fields">
				<button style="margin-left:400px" onclick="window.location.href= '' ">
					Cập nhật
				</button>
                
			</div>
		</div>
		<!-- end of tabcontent -->
	</div>
</div>
</body>
<style type="text/css">
	
/* employee */
.employee-container{
width: 100%;
height: 200px;
margin: 0 auto;
padding-left: 10px;
padding-top: 10px;
}
	.employee-info {
		width: 100%;
		height: 300px;
	}
		.employee-info-image {
			width: 200px;
			height: 200px;
			float: left;
		}
		.employee-info-introduce {
			width: 900px;
			height: 200px;
			float: left;
			padding-left: 15px;
		}

			#team {
				color: #555555;
			}
			#position {
				color: #555555;
				margin-top: 5px;
			}
			#email {
				color: #111111;
				margin-top: 5px;
			}
			#phone {
				color: #111111;
				margin-top: 5px;
			}
	.employee-forms {
		width: 80%;
		height: 500px;
		
	}

		.tab {
   		overflow: hidden;
   		border: 1px solid #ccc;
   		background color:#FFF;
		background-image:url(image/nau.jpg);
		}
		.tab button {
   		background-color: inherit;
   		float: left;
  		border: none;
   		outline: none;
   		cursor: pointer;
   		padding: 14px 16px;
  		transition: 0.3s;
  		width: 200px;
  		font-size: 19px;
		}
		.tab button:hover {
    	background-color: #ddd;
		}
		.tab button.active {
  	 	background-color: #ccc;
		}

		.tabcontent {
    	display: none;
   		padding: 30px 12px;
    	border: 1px solid #ccc;
    	border-top: none;
    	height: 300px;
		background-image:url(image/bk1.jpg);
		}	

		.fields {
			width: 1000px;
			height: 50px;
			float: left;
		}
		.labels {
			padding-top: 3px;
			width: 200px;
			height: 50px;
			float: left;
			padding-left: 50px;
			
		}
		.inputs {
			width: 500px;
			height: 50px;
			float: left;
		}
		.inputs input {
			width: 400px;
			height: 30px;
			border-radius: 4px;
			font-size: 17px;
			padding-left: 5px;
			border-style: solid;
		}
		.fields button {
			width: 100px;
			height: 30px;
			background-color:#FF0;
			color:#F00;
			font-size: 19px;
			margin-left: 250px;
			border-radius: 4px;
		}

body {
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
}

.topnv {
  overflow: hidden;
  background-color: #333;
}

.topnv a {
  float: left;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

.topnv a:hover {
  background-color: #ddd;
  color: black;
}

.topnv a.gdnv {
  background-color: #4CAF50;
  color: white;
}		
/* end of employee */


</style>
</html>