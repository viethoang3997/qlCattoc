	<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Basic Page Needs
    ================================================== -->
    <meta charset="utf-8">
    <!--[if IE]><meta http-equiv="x-ua-compatible" content="IE=9" /><![endif]-->
    <title>Hair Cutting Booking Online</title>
    
    <link rel="icon" href="img/logo.png" sizes="16x16">
    <!-- Favicons
    ================================================== -->
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
    <link rel="apple-touch-icon" href="img/apple-touch-icon.png">
    <link rel="apple-touch-icon" sizes="72x72" href="img/apple-touch-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="114x114" href="img/apple-touch-icon-114x114.png">

    <!-- Bootstrap -->
    <link rel="stylesheet" type="text/css"  href="css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="font-awesome-4.2.0/css/font-awesome.css">
    <link rel="stylesheet" type="text/css" href="css/jasny-bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/animate.css">

    <!-- Slider
    ================================================== -->
    <link href="css/owl.carousel.css" rel="stylesheet" media="screen">
    <link href="css/owl.theme.css" rel="stylesheet" media="screen">

    <!-- Stylesheet
    ================================================== -->
    <link rel="stylesheet" type="text/css"  href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/responsive.css">


    <link href='http://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>

    <script type="text/javascript" src="js/modernizr.custom.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>

    <!-- Off Canvas Navigation
    ================================================== -->
    <div class="navmenu navmenu-default navmenu-fixed-left offcanvas"> <!--- Off Canvas Side Menu -->
        <div class="close" data-toggle="offcanvas" data-target=".navmenu">
            <span class="fa fa-close"></span>
        </div>
        <div class="add-margin"></div>
        <ul class="nav navmenu-nav"> <!--- Menu -->
            <li><a href="admin/dangnhap"class="page-scroll">Đăng nhập</a></li>
            <li><a href="#home" class="page-scroll">Trang Chủ</a></li>
            <li><a href="#meet-us" class="page-scroll">Meet Us</a></li>
            <li><a href="#services" class="page-scroll">Dịch vụ</a></li>
            <li><a href="#works" class="page-scroll">Dịch vụ khác</a></li>
            <li><a href="#about-us" class="page-scroll">Về Chúng Tôi</a></li>
        </ul><!--- End Menu -->
    </div> <!--- End Off Canvas Side Menu -->

    <!-- Home Section -->
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
    <div id="home">
        <div class="container text-center">
            <!-- Navigation -->
            <nav id="menu" data-toggle="offcanvas" data-target=".navmenu">
                <span class="fa fa-bars"></span>
            </nav>

            <div class="content">
                <h4>Sự hài lòng của các bạn là niềm hân hạnh của chúng tôi</h4>
                <hr>
                <div class="header-text btn">
                    <h1>
                        <span >
                            HairBeauti-Salon
                        </span>
                    </h1>
                    <br>
                    <hr>
                        <h2>
                            <span  >
                                <a href="admin/DatLich/Them" style="color: white;" target="_blank">Đặt lịch cắt</a> 
                            </span>
                        </h2>
                </div>
            </div>

            <a href="#meet-us" class="down-btn page-scroll">
                <span class="fa fa-angle-down"></span>
            </a>
        </div>
    </div>

    <!-- Meet Us Section -->
    <div id="meet-us">
        <div class="container">
            <div class="row text-center">
                <div class="col-md-8 col-md-offset-2">
                    <div class="section-title">
                        <h2>Meet Us</h2>
                        <hr>
                    </div>
                    <p>Hãy đến với chúng tôi để trải nghiệm dịch vụ cắt tóc hiện đại, chuyện nghiệp bậc nhất trên thế giới. Với những Stylist đạt trình độ quốc tế, đội ngũ chăm sóc khách hàng, mát-xa, gội đầu, chúng tôi xin cam đoan rằng sẽ mang đến cho bạn mái tóc đẹp nhất, hài lòng nhất ! </p>
                    <a href="#services" class="down-btn page-scroll">
                        <span class="fa fa-angle-down"></span>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <!-- Overview Video Section -->
    <div id="overview-video">
        <div class="overlay">
            <div class="container">
                <a href="javascript:;">
                    <span class="fa fa-play"></span>
                </a>
            </div>
        </div>
    </div>

    <!-- Services Section -->
    <div id="services">
        <div class="container text-center">
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <div class="section-title">
                        <h2>Dịch Vụ</h2>
                        <hr>
                    </div>
                    <p>Hiện tại, vì số lượng khách ủng hộ Salon chúng tôi vô cùng lớn, nên HairBeauti quyết định đưa ra những khuyến mại đặc biệt cho thời gian này, áp dụng từ ngày 1-6-2017 đến hết này 30-8-2017. Gói combo đặc biệt chỉ 100k gồm : </p>
                </div>
            </div>

           <!--  <div class="space"></div> -->

            <div class="row">
                <div class="col-md-4 col-sm-4">
                    <div class="service">
                        <span class="fa fa-google-wallet fa-3x"></span>
                        <h4>Gội đầu - Mát-xa</h4>
                        <p> <br>1. Rửa mặt sáng da, sạch bã nhờn - Cuốn trôi bụi bẩn, da sạch khỏe 
                           <hr> <br>2. Massage mặt-tai-gáy tinh chất nha đam - Hồi phục sinh lực như Alexandor Đại Đế 
                          <hr> <br> 3. Gội đầu massage bấm huyệt - Chìm đắm trong cảm giác khoan khoái 
                        </p>
                    </div>
                </div>

                <div class="col-md-4 col-sm-4">
                    <div class="service">
                        <span class="fa fa-scissors fa-3x"></span>
                        <h4>Cắt - Tạo kiểu</h4>
                        <p>4. Tư vấn kiểu tóc theo khuôn mặt - Từ mốt Undercut đến tóc Ngôi sao 
                    <hr>   <br> 5. Cắt tạo kiểu bởi Stylist hàng đầu - Lột xác hoàn hảo với kiểu tóc mới </p>
                    </div>
                </div>

                <div class="col-md-4 col-sm-4">
                    <div class="service">
                        <span class="fa fa-magic fa-3x"></span>
                        <h4>Cạo mặt - Vuốt sáp</h4>
                        <p>6. Cạo mặt êm ái - Gội xả kỹ càng - Không lo tóc con bám dính
                            <hr> <br>7. Vuốt Sáp/Gôm tạo kiểu cao cấp - Giữ tóc đẹp đẳng cấp cả ngày </p>
                    </div>
                </div>
            </div>
            <a href="#works" class="down-btn page-scroll">
                <span id="booking-now" class="fa fa-angle-down"></span>
            </a>
        </div>
    </div>

    <!-- Call-to-Action Section -->
    <div id="cta">
        <div class="container text-center">
            <a  href="admin/DatLich/Them" class="btn go-to-btn" target="_blank">Đặt lịch ngay bây giờ</a>
        </div>
    </div>

    <!-- Portfolio Section -->
    <div id="works">
        <div class="container">
            <div class="row text-center">
                <div class="col-md-8 col-md-offset-2">
                    <div class="section-title">
                        <h2>Dịch Vụ Khác</h2>
                        <hr>
                    </div>
                    <p>Ngoài ra, để đáp ứng nhu cầu của khách hàng, HairBeauti còn áp dụng một số dịch vụ đi kèm như</p>
                </div>
            </div>
            <!-- <div class="space"></div> -->
        </div>
        <div class="container-fluid" align="center">
            <div class="row">
                <div class="col-md-3 col-sm-6 nopadding">
                    <div class="portfolio-item">
                        <div class="hover-bg">
                            <a href="javascript:;">
                                <div class="hover-text">
                                    <h5>NHUỘM MÀU THỜI TRANG</h5>
                                    <p class="lead">180K</p>
                                    <div class="hline">
                                    </div>
                                </div>
                                <img src="img/portfolio/01.jpg" class="img-responsive" alt="...">
                            </a>
                             <hr>
                              NHUỘM MÀU THỜI TRANG
                        </div>


                    </div>
                </div>
                <div class="col-md-3 col-sm-6 nopadding">
                    <div class="portfolio-item">
                        <div class="hover-bg">
                            <a href="javascript:;">
                                <div class="hover-text">
                                    <h5>UỐN XOĂN </h5>
                                    <p class="lead">250K</p>
                                    <div class="hline"></div>
                                </div>
                                <img src="img/portfolio/02.jpg" class="img-responsive" alt="...">
                            </a>
                            <hr> UỐN XOĂN
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 nopadding">
                    <div class="portfolio-item">
                        <div class="hover-bg">
                            <a href="javascript:;">
                                <div class="hover-text">
                                    <h5>TẨY MÀU TÓC</h5>
                                    <p class="lead">100K/LẦN</p>
                                    <div class="hline"></div>
                                </div>
                            
                            <img src="img/portfolio/03.jpg" class="img-responsive" alt="...">
                            </a>
                        <hr> TẨY MÀU TÓC
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 nopadding">
                    <div class="portfolio-item">
                        <div class="hover-bg">
                            <a href="javascript:;">
                                <div class="hover-text">
                                    <h5>TƯ VẤN CHĂM SÓC TÓC</h5>
                                    <p class="lead">50K/LẦN</p>
                                    <div class="hline"></div>
                                </div>
                            <img src="img/portfolio/04.jpg" class="img-responsive" alt="...">
                            </a>
                            <hr> TƯ VẤN CHĂM SÓC TÓC
                        </div>
                    </div>
                </div>
            </div>
        </div>
      <!--   <div class="space"></div> -->
    </div>
    <!-- Clients Section -->

    <!-- About Us Section -->
    <div id="about-us">
        <div class="container">
            <div class="row text-center">
                <div class="col-md-8 col-md-offset-2">
                    <div class="section-title">
                        <h2>Về chúng tôi</h2>
                        <hr>
                    </div>
                    <p>Trải nghiệm cắt tóc dành cho phái mạnh hiện đại không chỉ là "cắt cho ngắn" mà còn tận hưởng dịch vụ tổng thể cho diện mạo đẹp trai tỏa sáng cùng tinh thần sảng khoái. HB-Salon thấu hiểu và mang đến những sản phẩm, dịch vụ chăm sóc tóc, da mặt chuyên nghiệp - tạo kiểu tóc thời trang - chăm sóc sức khỏe dành riêng cho nam giới gói gọn trong quy trình khoa học 30 phút với giá thành hợp lý nhất. <br>
                    HB-Salon còn là chuỗi cắt tóc nam đầu tiên trên thế giới ứng dụng công nghệ như đặt lịch trực tuyến, màn hình cảm ứng đo chất lượng gội, ứng dụng đánh giá chất lượng dịch vụ,... mang đến sự tiện lợi cho khách hàng và tăng hiệu suất chung của ngành tóc.</p>
                </div>
            </div>
           <!--  <div class="space"></div> -->
            <div class="row">
                <div class="col-md-10 col-sm-10">
                    <div class="row">
                        <div class="col-md-4 col-sm-4">
                            <div class="team">
                                <img src="img/team/02.jpg" class="img-responsive img-circle" alt="...">
                                <br>
                                <h4>Việt Hoàng</h4>
                                <p class="small">Chuyên gia mát-xa</p>
                                <hr>
                            </div>
                        </div>

                        <div class="col-md-4 col-sm-4">
                            <div class="team">
                                <img src="img/team/04.jpg" class="img-responsive img-circle" alt="...">
                                <br>
                                <h4>Văn Luân</h4>
                                <p class="small">Chuyên gia chăm sóc tóc</p>
                                <hr>
                            </div>
                        </div>

                        <div class="col-md-4 col-sm-4">
                            <div class="team">
                                <img src="img/team/03.jpg" class="img-responsive img-circle" alt="...">
                                <br>
                                <h4>Quang Tuyền</h4>
                                <p class="small">Skinner</p>
                                <hr>
                            </div>
                        </div>

                    </div>
                </div>

                <div class="col-md-2 col-sm-2">
                    <div class="team hire">
                        <h4>Và rất nhiều chuyên gia khác</h4>
                        <hr>
                       <!--  <div class="space"></div> -->
                        <a href="javascript:;">
                            <span class="fa fa-paper-plane-o fa-2x"></span>
                        </a>
                    </div>
                </div>
            </div>

            <div class="text-center">
                <a href="javascript:;contact" class="page-scroll down-btn">
                    <span class="fa fa-angle-down"></span>
                </a>
            </div>

        </div>
    </div>

        <!-- Testimonial Section -->
    <div id="testimonials">
        <div class="overlay">
            <div class="container">
                <div class="section-title">
                    <h2>HairBeauti-Salon</h2>
                    <hr>
                </div>

                <div id="testimonial" class="owl-carousel owl-theme">
                  <div class="item">
                    <h3> <b style="text-decoration: line-through; font-size: 18px">  Sứ mệnh & giá trị cốt lõi </b>
                        <br>HB-Salon tin tưởng và nỗ lực mỗi ngày để kết nối bàn tay tài hoa của người thợ Việt cùng công nghệ khoa học trong 30 phút nhằm đem đến cho phái mạnh toàn cầu kiểu tóc đẹp trai, làn da khỏe mạnh cuốn hút phái đẹp ; tinh thần thư giãn để bứt phá trong công việc
                        <br>Con người tại HB-Salon sở hữu 3 giá trị cốt lõi : Trung thực, Ham học hỏi & Hạnh phúc khi phục vụ.</h3>
                    <br>
                    <!-- <h6>LJ, Abc Company</h6> -->
                  </div>

                  <div class="item">
                    <h3> <b style="text-decoration: line-through; font-size: 18px">Tầm nhìn </b>
                     <br>   2020, HB-Salon trở thành chuỗi cắt tóc nam quy mô lớn, hiện đại với chất lượng dịch vụ tốt nhất Việt Nam. Từ đó HB-Salon vươn rộng ra khu vực, mang lại việc làm đáng mơ ước cho hành trăm ngàn người Việt Nam, giúp hàng triệu khách hàng nam giới tỏa sáng.</h3>
                    <br>
                    <!-- <h6>Kai, Web Geekster</h6> -->
                  </div>

                  <div class="item">
                    <h3><b style="text-decoration: line-through; font-size: 18px"> Đội ngũ Stylist & Skinner </b>
                    <br>
                    HB-Salon có trình độ tiêu chuẩn, nằm lòng những kiểu tóc từ đơn giản đến phức tạp, nắm bắt nhanh xu hướng & Thế giới <br>
                    Dàn Skinner khéo léo, nhẹ nhàng đồng thời sở hữu ngoại hình xinh đẹp, ưa nhìn giúp xua tan những bộn bề công việc hàng ngày của khách hành nam giới.</h3>
                    <br>
                    <!-- <h6>Jenn, Coders' Playground</h6> -->
                  </div>
                </div>
            </div>
        </div>
    </div>
    <nav id="footer">
        <div class="container">
             <div class="pull-left">
                <p>2017 © VietNam. All Rights Reserved. Coded,Edited & Designed by Luân, Hoàng, Tuyền </p>
            </div>
            <div class="pull-right"> 
                <a href="#home" class="page-scroll">Back to Top <span class="fa fa-angle-up"></span></a>
            </div>
        </div>
    </nav>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script type="text/javascript" src="js/jquery.1.11.1.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script type="text/javascript" src="js/bootstrap.js"></script>
    <script type="text/javascript" src="js/SmoothScroll.js"></script>
    <script type="text/javascript" src="js/jasny-bootstrap.min.js"></script>

    <script src="js/owl.carousel.js"></script>
    <script src="js/typed.js"></script>
   

    <!-- Javascripts
    ================================================== -->
    <script type="text/javascript" src="js/main.js"></script>

  </body>
</html>