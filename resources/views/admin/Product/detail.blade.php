<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<link rel="stylesheet" type="text/css" href= "css123.css" >
<meta charset="utf-8">

<link href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css" rel="stylesheet"> 
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css"> <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
<script type="text/javascript" src="jquery-3.2.1.min.js"></script>

</head>

<body>
<div class="container"> 
 <div class="card"> 
  <div class="container-fliud"> 
   <div class="wrapper row"> 
    <div class="preview col-md-6"> 
     <div class="preview-pic tab-content"> 
      <div class="tab-pane active" id="pic-1"><img src="upload/images/{!!$SanPham ->images!!}" alt="">
      </div> 
      <div class="tab-pane" id="pic-2"><img src="image123/byvilain_golddigger.jpg" alt="">
      </div> 
      <div class="tab-pane" id="pic-3"><img src="image123/by-vilain-gold-digger-abea7422-149e-460e-8ec0-fa03d13e8fbf.jpg" alt="">
      </div> 
      <div class="tab-pane" id="pic-4"><img src="image123/sap-vuot-toc-by-vilain-dynamite-clay-20.jpg" alt="">
      </div> 
      <div class="tab-pane" id="pic-5"><img src="image123/sap-vuot-toc-by-vilain-silver-fox-limited-edition.jpg" alt="">
      </div> 
     </div>  
    </div> 
    <div class="details col-md-6"> 
     <h3 class="product-title">{!! $SanPham ->title !!}</h3> 
     <div class="rating"> 
      <div class="stars"> <span class="fa fa-star checked"></span> <span class="fa fa-star checked"></span> <span class="fa fa-star checked"></span> <span class="fa fa-star checked"></span> <span class="fa fa-star"></span> 
      </div> <span class="review-no">123 đánh giá</span> 
     </div> 
     <p class="product-description">{!! $SanPham ->introduce !!}</p> 
     <h4 class="price">{!! $SanPham ->price !!}</h4> 
     
     <p class="vote"><strong>91%</strong> of người mua hài lòng với sản phẩm này <strong>(87 bình chọn)</strong>
     </p> 
     <h5 class="sizes">Tình Trạng: <span style="color: red">Còn hàng</span> 
     </h5> 
     <h5 class="colors">Mã sản phẩm: <span style="color: red">HB222</span>  
     </h5> 
     <div class="product-select">
				<button onclick="window.location.href='#' " id="load1" style="background-color: #FF9933;">
					HƯỚNG DẪN SỬ DỤNG
				</button>
				<button onclick="window.location.href='#' " id="load2" style="background-color: #00BB00;">
					CHI TIẾT SẢN PHẨM
				</button>
			</div>
      
     <div class="action"> <a href="#" target="_blank">            <button class="add-to-cart btn btn-default" type="button">MUA NGAY</button>            </a> <a href="#" target="_blank">            <button class="like btn btn-default" type="button"><span class="fa fa-heart"></span></button>            </a>
     <div class="product-fb">
				<button id= "button-like"  onclick="window.location.href='#' " >
				</button>
				<button id = "button-share" onclick="window.location.href='#' " >
				</button>

			</div> 
            
            <div id="noidung">
        
            </div>      
            <script type="text/javascript">
    $(document).ready(function() {
        $('#load1').click(function(e) {
            e.preventDefault();
            $('#noidung').load('guide.blade.php');
        });
    });
    </script>
    
          <script type="text/javascript">
    $(document).ready(function() {
        $('#load2').click(function(e) {
            e.preventDefault();
            $('#noidung').load('detalis.blade.php');
        });
    });
    </script>
      
     </div> 
    </div> 
   </div> 
  </div> 
 </div>
</div> 
</body>
<style type="text/css">
	@charset "utf-8";
/* CSS Document */

body {  
font-family:Arial, Helvetica, sans-serif;   
overflow-x: hidden;
}
 
img {   
max-width: 100%;
}
 
.preview {  
display: -webkit-box;   
display: -webkit-flex;  
display: -ms-flexbox;   
display: flex;  
-webkit-box-orient: vertical;   
-webkit-box-direction: normal;  
-webkit-flex-direction: column; 
-ms-flex-direction: column; 
flex-direction: column;
} 
 
@media screen and (max-width: 996px) { 
.preview { 
margin-bottom: 20px;
}
}
 
.preview-pic {  
-webkit-box-flex: 1;    
-webkit-flex-grow: 1;   
-ms-flex-positive: 1;   
flex-grow: 1;
}
 
.preview-thumbnail.nav-tabs {   
border: none;   
margin-top: 15px;
}
 
.preview-thumbnail.nav-tabs li {    
width: 18%; 
margin-right: 2.5%;
}
 
.preview-thumbnail.nav-tabs li img {    
max-width: 100%;    
display: block;
}
 
.preview-thumbnail.nav-tabs li a {  
padding: 0; 
margin: 0;  
cursor:pointer;
}
 
.preview-thumbnail.nav-tabs li:last-of-type {   
margin-right: 0;
}
 
.tab-content {  
overflow: hidden;
}
 
.tab-content img {  
width: 100%;    
-webkit-animation-name: opacity;    
animation-name: opacity; 
-webkit-animation-duration: .3s; 
animation-duration: .3s;
}
 
.card { 
margin-top: 0px;    
background: #eee;   
padding: 3em;   
line-height: 1.5em;
} 
 
@media screen and (min-width: 997px) { 
.wrapper { 
display: -webkit-box; 
display: -webkit-flex; 
display: -ms-flexbox; 
display: flex;
}
}
 
.details {  
display: -webkit-box;
    display: -webkit-flex;  
display: -ms-flexbox;   
display: flex;  
-webkit-box-orient: vertical;   
-webkit-box-direction: normal;  
-webkit-flex-direction: column; 
-ms-flex-direction: column; 
flex-direction: column;
}
 
.colors {   
-webkit-box-flex: 1;    
-webkit-flex-grow: 1;   
-ms-flex-positive: 1;   
flex-grow: 1;
}
 
.product-title, .price, .sizes, .colors {   
text-transform: UPPERCASE;  
font-weight: bold;
}
 .product-select {
			width: 660px;
			height: 50px;
			margin-top: 50px;
		}
			.product-select button {
				width: 200px;
				height: 40px;
				font-family: sans-serif;
				font-size: 15px;
				color: pink;
			}
			.product-fb {
			width: 660px;
			height: 50px;
			margin-top: 20px;
		}
		.product-fb button {
			color: white;
			width: 60px;
			height: 30px;
		}
		#button-like {
			background-image: url('../../images/like123.png');
			background-size: 60px 30px;
		}
		#button-share {
			background-image: url('../../images/share123.png');
			background-size: 60px 30px;
		}
.checked, .price span { 
color: #ff9f1a;
}
 
.product-title, .rating, .product-description, .price, .vote, .sizes {  
margin-bottom: 15px;
}
 
.product-title {    
margin-top: 0;
}
 
.size {
    margin-right: 10px;
}
 
.size:first-of-type {   
margin-left: 40px;
}
 
.color {    
display: inline-block;  
vertical-align: middle; 
margin-right: 10px; 
height: 2em;    
width: 2em; 
border-radius: 2px;
}
 
.color:first-of-type {  
margin-left: 20px;
}
 
.add-to-cart, .like {   
background: #ff9f1a;    
padding: 1.2em 1.5em;   
border: none;   
text-transform: UPPERCASE;  
font-weight: bold;  
color: #fff;    
text-decoration:none; 
-webkit-transition: background .3s ease; 
transition: background .3s ease;
}
 
.add-to-cart:hover, .like:hover {   
background: #b36800;    
color: #fff;    
text-decoration:none;
}
 
.tooltip-inner {    
padding: 1.3em;
} 
 
@-webkit-keyframes opacity { 
0% { opacity: 0; -webkit-transform: scale(3); transform: scale(3);} 
100% { opacity: 1; -webkit-transform: scale(1); transform: scale(1);}
} 
 
@keyframes opacity { 
0% { opacity: 0; -webkit-transform: scale(3); transform: scale(3);} 
100% { opacity: 1; -webkit-transform: scale(1); transform: scale(1);}
}
</style>
</html>