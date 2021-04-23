<!DOCTYPE html>
<html lang="fa" dir="">

<?php /* Template Name: front */ ?>

<head>
	<meta charset="UTF-8">
	<!-- For IE -->
	<meta http-equiv="X-UA-Compatible" content="IE=edge">

	<!-- For Resposive Device -->
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<title>Clinitick</title>



	<!-- Main style sheet -->
	<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/style.css">
	<!-- responsive style sheet -->
	<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/responsive.css">
	<!-- Color Css -->
	<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/color-one.css">
	<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/update.css">



</head>

<body>
	<div class="main-page-wrapper home-page-one">

		<!-- ===================================================
				Loading Transition
			==================================================== -->
		<div id="loader-wrapper">
			<div id="loader"></div>
		</div>



		<div class="html-top-content">
			<!-- 
				=============================================
					Theme Header
				============================================== 
				-->
			<header class="theme-main-header">
				<div class="container">
					<div class="menu-wrapper clearfix">
						<div class="logo float-left"><a href="index.html"><img src="<?php echo get_template_directory_uri(); ?>/images/logo/logo.svg" alt="Logo"></a></div>
						<!-- ========================= Theme Feature Page Menu ======================= -->
						<nav class="navbar theme-main-menu one-page-menu float-right">
							<!-- Brand and toggle get grouped for better mobile display -->
							<div class="navbar-header clearfix">
								<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse-1" aria-expanded="false">
									<span class="sr-only">Toggle navigation</span>
									<i class="fa fa-bars" aria-hidden="true"></i>
								</button>
							</div>
							<!-- Collect the nav links, forms, and other content for toggling -->
							<div class="collapse navbar-collapse" dir="rtl" id="navbar-collapse-1">
								<ul class="nav navbar-nav">
									<li><a href="#footer">ارتباط باما </a></li>
									<li><a href="https://clinitick.com/blog/">وبلاگ</a></li>
									<li><a href="#screenshot">دریافت اپلیکیشن</a></li>
									<li><a href="#features">امکانات </a></li>
									<li class="active u-home  u-active"><a href="#theme-main-banner">صفحه اصلی </a></li>

								</ul>
							</div><!-- /.navbar-collapse -->
						</nav> <!-- /.theme-feature-menu -->
					</div> <!-- /.menu-wrapper -->
				</div> <!-- /.container -->
			</header> <!-- /.theme-main-header -->


			<!--
				=====================================================
					Theme Main Baner
				=====================================================
				-->
			<div id="theme-main-banner" class="banner-three">
				<div class="main-bg wow slideInDown" data-wow-duration="1.8s" data-wow-delay=".7s" style="background-image: url(<?php echo get_template_directory_uri(); ?>/images/home/slide-3.png);"></div>
				<div class="container">
					<div class="main-content">
						<h1 class="wow rotateInUpRight w-50  ml-auto rtl w-100-desk" data-wow-duration="1.8s" data-wow-delay="1.5s"><?php echo ot_get_option('hero_title'); ?></h1>
						<p class="wow rotateInUpLeft rtl w-50 ml-auto w-100-desk" data-wow-duration="1.8s" data-wow-delay="1.9s">


							<?php echo ot_get_option('hero_describe'); ?>

						</p>
						<div class="rtl w-50 w-100-desk">
							<a href="#" class="wow rollIn button-grp" data-wow-delay="0.499s"> مشاهده دمو</a>
							<a href="#" class="wow rollIn button-grp" data-wow-delay="0.499s">ثبت نام پزشکان</a>
						</div>

						<div class="shape-one wow zoomIn" data-wow-duration="1s" data-wow-delay="3s"><img src="<?php echo get_template_directory_uri(); ?>/images/home/shape-1.png" alt=""></div>
						<img src="<?php echo get_template_directory_uri(); ?>/images/home/shape-2.png" alt="" class="shape-two d-none wow zoomIn" data-wow-duration="1s" data-wow-delay="3s">
					</div> <!-- /.main-content -->
				</div> <!-- /.container -->
			</div> <!-- /.theme-main-banner -->




			<!--
				=====================================================
					Our Feature
				=====================================================
				-->
			<div class="our-features style-two" id="features">
				<div class="container">
					<div class="theme-title rtl">
						<h2 class="text-center"><?php echo ot_get_option('features_title'); ?></h2>
						<p class="text-center mx-auto d-block w-100"><?php echo ot_get_option('features_describe'); ?></p>
					</div> <!-- /.theme-title -->
				</div> <!-- /.container -->

				<div class="main-container">
					<div class="shape-one left wow slideInLeft" data-wow-duration="1.5s" data-wow-delay="1s"></div>
					<img src="<?php echo get_template_directory_uri(); ?>/images/home/shape-16.png" alt="" class="shape-two d-none right">
					<div class="container">
						<div class="row rtl ">
							<div class="col-md-4 col-sm-6 col-xs-12">
								<div class="single-feature">
									<i class="flaticon-layer"></i>
									<h3><?php echo ot_get_option('f1_title'); ?></h3>
									<p><?php echo ot_get_option('f1_describe'); ?></p>
									<a href="#" class="theme-button"><span></span></a>
								</div> <!-- /.single-feature -->
							</div> <!-- /.col- -->
							<div class="col-md-4 col-sm-6 col-xs-12">
								<div class="single-feature">
									<i class="flaticon-paste"></i>
									<h3><?php echo ot_get_option('f2_title'); ?></h3>
									<p><?php echo ot_get_option('f2_describe'); ?></p>
									<a href="#" class="theme-button"><span></span></a>
								</div> <!-- /.single-feature -->
							</div> <!-- /.col- -->
							<div class="col-md-4 col-sm-6 col-xs-12">
								<div class="single-feature">
									<i class="flaticon-settings"></i>
									<h3><?php echo ot_get_option('f3_title'); ?></h3>
									<p style="word-wrap: break-word;">
										<?php echo ot_get_option('f3_describe'); ?>
									</p>
									<a href="#" class="theme-button"><span></span></a>
								</div> <!-- /.single-feature -->
							</div> <!-- /.col- -->
						</div> <!-- /.row -->
					</div> <!-- /.container -->
				</div>
			</div> <!-- /.our-features -->




			<!--
				=====================================================
					Customers Need
				=====================================================
				-->
			<div class="section-spacing">
				<div class="customers-need">
					<div class="shape-one color-two wow slideInLeft" data-wow-duration="2s" data-wow-delay="1s"></div>
					<div class="container">
						<img src="<?php echo get_template_directory_uri(); ?>/images/home/shape-1.png" alt="" class="shape-two wow zoomIn" data-wow-duration="1s" data-wow-delay="1.2s">
						<div class="row">
							<div class="col-md-8 text-wrapper float-right">
								<div class="wrapper">
									<div class="theme-title rtl">
										<h2><?php echo ot_get_option('app_title'); ?></h2>
										<p><?php echo ot_get_option('app_describe'); ?></p>
									</div>

									<ul class="rtl">
										<li>

											<h3><?php echo ot_get_option('app1_title'); ?></h3>
											<p> <?php echo ot_get_option('app1_describe'); ?> </p>
										</li>
										<li>
											<h3><?php echo ot_get_option('app2_title'); ?></h3>
											<p> <?php echo ot_get_option('app2_describe'); ?> </p>

										</li>
										<li>
											<h3><?php echo ot_get_option('app3_title'); ?></h3>
											<p> <?php echo ot_get_option('app3_describe'); ?> </p>
										</li>
									</ul>
								</div>
							</div> <!-- /.col- -->
						</div> <!-- /.row -->
					</div> <!-- /.container -->
				</div> <!-- /.customers-need -->
			</div>





			<!--
				=====================================================
					App ScreenShot
				=====================================================
				-->
			<div class="app-screenshot section-spacing style-two" id="screenshot">
				<div class="container">
					<div class="theme-title rtl">
						<h2><?php echo ot_get_option('screen_title'); ?></h2>
						<p><?php echo ot_get_option('screen_describe'); ?></p>
					</div>
				</div>
				<div class="screenshot-container">
					<div class="main-sldier-wrapper">
						<div class="clearfix">
							<div class="wrapper">
								<div class="screenshot-slider-two">
									<div class="item"><img src="<?php echo ot_get_option('pic1_u'); ?>" alt=""></div>
									<div class="item"><img src="<?php echo ot_get_option('pic2_u'); ?>" alt=""></div>
									<div class="item"><img src="<?php echo ot_get_option('pic3_u'); ?>" alt=""></div>
								</div> <!-- /.screenshot-slider -->
							</div>
						</div>
					</div> <!-- /.main-sldier-wrapper -->

					<img src="<?php echo get_template_directory_uri(); ?>/images/home/mockup-2.png"  class="mockup-two">
				</div> <!-- /.screenshot-container -->
			</div> <!-- /.app-screenshot -->




			<!--
				=====================================================
					Client Slider
				=====================================================
				-->
			<div class="client-section style-two">
				<div class="main-content-wrapper">
					<img src="<?php echo get_template_directory_uri(); ?>/images/home/shape-13.png" alt="" class="shape-one">
					<div class="container">
						<div class="video-content">
							<div class="opacity">
								<div class="text">
									<span></span>
									<a class="color-two " data-fancybox="will open aparat" href="https://www.youtube.com/"><i class="flaticon-play-button" style="margin-left: 8px;"></i></a>
									<h6>مشاهده ویدئو</h6>
								</div>
							</div> <!-- /.opacity -->
						</div> <!-- /.video-content -->
					</div>
				</div> <!-- /.main-content-wrapper -->
			</div> <!-- /.client-section -->




			<!--
				=====================================================
					Download Section
				=====================================================
				-->
			<div class="download-section section-spacing">
				<div class="container">
					<div class="theme-title text-center">
						<h2><?php echo ot_get_option('download_title'); ?></h2>
						<p><?php echo ot_get_option('download_text'); ?></p>
					</div>
				</div>

				<div class="main-content">
					<img src="<?php echo get_template_directory_uri(); ?>/images/home/shape-17.png" alt="" class="shape-one right-side wow slideInRight" data-wow-duration="1.5s" data-wow-delay="0.2s">
					<div class="container">
						<div class="text-wrapper">
							<div class="row">
								<div class="col-md-7">
									<h2 class="rtl text-center  mx-auto">دانلود اپلیکیشن</h2>

									<div class=" d-block text-center mx-auto rtl" style="margin-top: -40px; ">
										<a href="<?php echo ot_get_option('android_link'); ?>" class="wow text-center  rollIn theme-button" data-wow-delay="0.499s"><span></span> دانلود از گوگل پلی <i class="flaticon-google-play"></i></a>
										<a href="<?php echo ot_get_option('ios_download'); ?>" class="wow text-center rollIn theme-button" data-wow-delay="0.499s"><span></span> دانلود از اپ استور <i class="flaticon-logo"></i></a>
									</div>




								</div>
							</div>
							<div class="image-wrapper-one right-side"><img src="<?php echo get_template_directory_uri(); ?>/images/home/shape-8.png" alt="" class="wow rollIn" data-wow-delay="0.4s" data-wow-duration="1.5s"></div>
						</div>
					</div>
				</div> <!-- /.main-content -->
			</div> <!-- /.download-section -->




			<!--
				=====================================================
					Footer 
				=====================================================
				-->
			<footer class="theme-footer style-two">
				<div class="container">
					<div class="footer-data-wrapper">
						<form action="#" class="subscribe-form">
							<h2>در جریان آخرین اخبار ما باشید</h2>
							<div class="input-wrapper">
								<div class="row">

									<div class="col-md-10 col-sm-10 col-xs-12">
										<input type="email" placeholder="آدرس ایمیل">
									</div>
									<div class="col-md-2 col-xs-12">
										<button class="theme-button"><span></span> ثبت</button>
									</div>
								</div>
							</div>
						</form>
					</div>
					<div class="footer-main-content rtl">
						<div class="row">


							<p class="rtl"> تمام حقوق وبسایت کلینیتیک محفوظ است &copy; </p>



						</div> <!-- /.row -->
					</div> <!-- /.footer-main-content -->
				</div> <!-- /.container -->
			</footer>

		</div> <!-- /.html-top-content -->



		<!-- Scroll Top Button -->
		<button class="scroll-top tran3s color-one-bg d-none">
			<i class="fa fa-long-arrow-up" aria-hidden="true"></i>
		</button>




		<!-- Js File_________________________________ -->
		<!-- j Query -->
		<script src="<?php echo get_template_directory_uri(); ?>/vendor/jquery.2.2.3.min.js"></script>
		<!-- Bootstrap JS -->
		<script src="<?php echo get_template_directory_uri(); ?>/vendor/bootstrap/bootstrap.min.js"></script>

		<!-- Vendor js _________ -->
		<!-- WOW js -->
		<script src="<?php echo get_template_directory_uri(); ?>/vendor/WOW-master/dist/wow.min.js"></script>
		<!-- Fancybox -->
		<script src="<?php echo get_template_directory_uri(); ?>/vendor/fancybox/dist/jquery.fancybox.min.js"></script>
		<!-- owl.carousel -->
		<script src="<?php echo get_template_directory_uri(); ?>/vendor/owl-carousel/owl.carousel.min.js"></script>
		<!-- Multi carousel -->
		<script src="<?php echo get_template_directory_uri(); ?>/vendor/multislider/multislider.min.js"></script>
		<!-- js count to -->
		<script src="<?php echo get_template_directory_uri(); ?>/vendor/jquery.appear.js"></script>
		<script src="<?php echo get_template_directory_uri(); ?>/vendor/jquery.countTo.js"></script>
		<!-- Theme js -->
		<script src="<?php echo get_template_directory_uri(); ?>/js/theme.js"></script>

	</div> <!-- /.main-page-wrapper -->
</body>

<!-- Mirrored from themazine.com/html/boltu/html/index-3.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 15 Apr 2021 17:24:57 GMT -->

</html>