<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from kodesolution.com/html/2022/edulerns-html/page-courses.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 02 Jul 2023 16:49:23 GMT -->

<head>
	<meta charset="utf-8">
	<title>Edulerns | Education HTML Template</title>
	<!-- Stylesheets -->
	<link href="css/bootstrap.min.css" rel="stylesheet">

	<link href="css/style.css" rel="stylesheet">
	<link href="css/responsive.css" rel="stylesheet">

	<link rel="shortcut icon" href="images/favicon.png" type="image/x-icon">
	<link rel="icon" href="images/favicon.png" type="image/x-icon">

	<!-- Responsive -->
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
	<!--[if lt IE 9]><script src="js/html5shiv.js"></script><![endif]-->
	<!--[if lt IE 9]><script src="js/respond.js"></script><![endif]-->
</head>

<body>

	<div class="page-wrapper">

		<!-- Preloader -->
		<div class="preloader"></div>

		<!-- Main Header-->
		<?php
			include "header.php";
		?>
		<!--End Main Header -->

		<!-- Start main-content -->
		<section class="page-title" style="background-image: url(images/background/page-title.jpg);">
			<div class="auto-container">
				<div class="title-outer">
					<h1 class="title">Courses</h1>
					<ul class="page-breadcrumb">
						<li><a href="index.html">Home</a></li>
						<li><a href="#">Pages</a></li>
						<li>Courses</li>
					</ul>
				</div>
			</div>
		</section>
		<!-- end main-content -->

		<!-- Courses Section -->
		<section class="">
			<div class="container pb-100">
				<div class="row">
					<!-- Course Block Two-->
					<?php
					include "./model/pdo.php";
					include "./model/course.php";
					$listcourse = loadall_course();
					foreach ($listcourse as $course) {
						extract($course);
						$link = "index.php?act=class&idkh=".$id;
						echo '
							<div class="course-block-two col-lg-4 col-md-6 col-sm-12">
								<div class="inner-box">
									<div class="image-box">
										<figure class="image"><a href="'.$link.'"><img
													src="images/resource/course-5.jpg" alt=""></a></figure>
										<span class="price">$'.$price.'</span>
										<div class="value">'.$mo_ta.'</div>
									</div>
									<div class="content-box">
										<ul class="course-info">
											<li><i class="fa fa-book"></i> 8 Lessons</li>
											<li><i class="fa fa-users"></i> 16 Students</li>
											<li><i class="fa fa-clock"></i> 3 Weeks</li>
										</ul>
										<h5 class="title"><a href="'.$link.'">'.$name.'</a></h5>
										<div class="other-info">
											<div class="rating-box">
												<span class="text">(4.9 /8 Rating)</span>
												<div class="rating"><span class="fa fa-star"></span><span
														class="fa fa-star"></span><span class="fa fa-star"></span><span
														class="fa fa-star"></span><span class="fa fa-star"></span></div>
											</div>
										</div>
									</div>
								</div>
							</div> ';
					}
					
					?>

					<!-- Course Block Two-->
					<!-- <div class="course-block-two col-lg-4 col-md-6 col-sm-12">
						<div class="inner-box">
							<div class="image-box">
								<figure class="image"><a href="page-course-details.html"><img
											src="images/resource/course-6.jpg" alt=""></a></figure>
								<span class="price">$49.00</span>
								<div class="value">Advanced</div>
							</div>
							<div class="content-box">
								<ul class="course-info">
									<li><i class="fa fa-book"></i> 8 Lessons</li>
									<li><i class="fa fa-users"></i> 16 Students</li>
									<li><i class="fa fa-clock"></i> 3 Weeks</li>
								</ul>
								<h5 class="title"><a href="page-course-details.html">Starting seo as your home based
										business</a></h5>
								<div class="other-info">
									<div class="rating-box">
										<span class="text">(4.9 /8 Rating)</span>
										<div class="rating"><span class="fa fa-star"></span><span
												class="fa fa-star"></span><span class="fa fa-star"></span><span
												class="fa fa-star"></span><span class="fa fa-star"></span></div>
									</div>
								</div>
							</div>
						</div>
					</div> -->

					<!-- Course Block Two-->
					<!-- <div class="course-block-two col-lg-4 col-md-6 col-sm-12">
						<div class="inner-box">
							<div class="image-box">
								<figure class="image"><a href="page-course-details.html"><img
											src="images/resource/course-7.jpg" alt=""></a></figure>
								<span class="price">$49.00</span>
								<div class="value">Advanced</div>
							</div>
							<div class="content-box">
								<ul class="course-info">
									<li><i class="fa fa-book"></i> 8 Lessons</li>
									<li><i class="fa fa-users"></i> 16 Students</li>
									<li><i class="fa fa-clock"></i> 3 Weeks</li>
								</ul>
								<h5 class="title"><a href="page-course-details.html">Starting seo as your home based
										business</a></h5>
								<div class="other-info">
									<div class="rating-box">
										<span class="text">(4.9 /8 Rating)</span>
										<div class="rating"><span class="fa fa-star"></span><span
												class="fa fa-star"></span><span class="fa fa-star"></span><span
												class="fa fa-star"></span><span class="fa fa-star"></span></div>
									</div>
								</div>
							</div>
						</div>
					</div> -->
					<!-- Course Block Two-->
					<!-- <div class="course-block-two col-lg-4 col-md-6 col-sm-12">
						<div class="inner-box">
							<div class="image-box">
								<figure class="image"><a href="page-course-details.html"><img
											src="images/resource/course-7.jpg" alt=""></a></figure>
								<span class="price">$49.00</span>
								<div class="value">Advanced</div>
							</div>
							<div class="content-box">
								<ul class="course-info">
									<li><i class="fa fa-book"></i> 8 Lessons</li>
									<li><i class="fa fa-users"></i> 16 Students</li>
									<li><i class="fa fa-clock"></i> 3 Weeks</li>
								</ul>
								<h5 class="title"><a href="page-course-details.html">Starting seo as your home based
										business</a></h5>
								<div class="other-info">
									<div class="rating-box">
										<span class="text">(4.9 /8 Rating)</span>
										<div class="rating"><span class="fa fa-star"></span><span
												class="fa fa-star"></span><span class="fa fa-star"></span><span
												class="fa fa-star"></span><span class="fa fa-star"></span></div>
									</div>
								</div>
							</div>
						</div>
					</div> -->

					<!-- Course Block Two-->
					<!-- <div class="course-block-two col-lg-4 col-md-6 col-sm-12">
						<div class="inner-box">
							<div class="image-box">
								<figure class="image"><a href="page-course-details.html"><img
											src="images/resource/course-5.jpg" alt=""></a></figure>
								<span class="price">$49.00</span>
								<div class="value">Advanced</div>
							</div>
							<div class="content-box">
								<ul class="course-info">
									<li><i class="fa fa-book"></i> 8 Lessons</li>
									<li><i class="fa fa-users"></i> 16 Students</li>
									<li><i class="fa fa-clock"></i> 3 Weeks</li>
								</ul>
								<h5 class="title"><a href="page-course-details.html">Starting seo as your home based
										business</a></h5>
								<div class="other-info">
									<div class="rating-box">
										<span class="text">(4.9 /8 Rating)</span>
										<div class="rating"><span class="fa fa-star"></span><span
												class="fa fa-star"></span><span class="fa fa-star"></span><span
												class="fa fa-star"></span><span class="fa fa-star"></span></div>
									</div>
								</div>
							</div>
						</div>
					</div> -->

					<!-- Course Block Two-->
					<!-- <div class="course-block-two col-lg-4 col-md-6 col-sm-12">
						<div class="inner-box">
							<div class="image-box">
								<figure class="image"><a href="page-course-details.html"><img
											src="images/resource/course-6.jpg" alt=""></a></figure>
								<span class="price">$49.00</span>
								<div class="value">Advanced</div>
							</div>
							<div class="content-box">
								<ul class="course-info">
									<li><i class="fa fa-book"></i> 8 Lessons</li>
									<li><i class="fa fa-users"></i> 16 Students</li>
									<li><i class="fa fa-clock"></i> 3 Weeks</li>
								</ul>
								<h5 class="title"><a href="page-course-details.html">Starting seo as your home based
										business</a></h5>
								<div class="other-info">
									<div class="rating-box">
										<span class="text">(4.9 /8 Rating)</span>
										<div class="rating"><span class="fa fa-star"></span><span
												class="fa fa-star"></span><span class="fa fa-star"></span><span
												class="fa fa-star"></span><span class="fa fa-star"></span></div>
									</div>
								</div>
							</div>
						</div>
					</div> -->

				</div>
			</div>
		</section>
		<!-- End Courses Section-->

		<!-- Main Footer -->
		<footer class="main-footer">
			<div class="bg-image zoom-two" style="background-image: url(images/background/4.jpg)"></div>

			<!--Widgets Section-->
			<div class="widgets-section">
				<div class="auto-container">
					<div class="row">
						<!--Footer Column-->
						<div class="footer-column col-xl-3 col-lg-12 col-md-6 col-sm-12">
							<div class="footer-widget about-widget">
								<div class="logo"><a href="index.php"><img src="images/logo-2.png" alt=""></a></div>
								<div class="text">Get 26,000+ best online courses from us</div>
								<ul class="social-icon-two">
									<li><a href="#"><i class="fab fa-twitter"></i></a></li>
									<li><a href="#"><i class="fab fa-facebook"></i></a></li>
									<li><a href="#"><i class="fab fa-pinterest"></i></a></li>
									<li><a href="#"><i class="fab fa-instagram"></i></a></li>
								</ul>
							</div>
						</div>

						<!--Footer Column-->
						<div class="footer-column col-xl-2 col-lg-4 col-md-6 col-sm-12">
							<div class="footer-widget">
								<h4 class="widget-title">Explore</h4>
								<ul class="user-links">
									<li><a href="#">Gallery</a></li>
									<li><a href="#">News & Articles</a></li>
									<li><a href="#">FAQ's</a></li>
									<li><a href="#">Sign In/Registration</a></li>
									<li><a href="#">Coming Soon</a></li>
									<li><a href="#">Contacts</a></li>
								</ul>
							</div>
						</div>

						<!--Footer Column-->
						<div class="footer-column col-xl-2 col-lg-4 col-md-6 col-sm-12">
							<div class="footer-widget">
								<h4 class="widget-title">Links</h4>
								<ul class="user-links">
									<li><a href="#">About</a></li>
									<li><a href="#">Courses</a></li>
									<li><a href="#">Instructor</a></li>
									<li><a href="#">Events</a></li>
									<li><a href="#">Instructor Profile</a></li>
								</ul>
							</div>
						</div>

						<!--Footer Column-->
						<div class="footer-column col-xl-5 col-lg-4 col-md-6 col-sm-12">
							<div class="footer-widget contact-widget">
								<h4 class="widget-title">Contact</h4>
								<div class="widget-content">
									<ul class="contact-info">
										<li><i class="fa fa-phone-square"></i> <a href="tel:+926668880000">+92 (0088)
												6823</a></li>
										<li><i class="fa fa-envelope"></i> <a
												href="mailto:needhelp@potisen.com">needhelp@company.com</a></li>
										<li><i class="fa fa-map-marker-alt"></i> 80 Broklyn Golden Street. New York. USA
										</li>
									</ul>
									<div class="subscribe-form">

										<form method="post" action="#">
											<div class="form-group">
												<input type="email" name="email" class="email" value=""
													placeholder="Email Address" required="">
												<button type="button" class="theme-btn btn-style-one"><i
														class="fa fa-long-arrow-alt-right"></i></button>
											</div>
										</form>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

			<!--Footer Bottom-->
			<div class="footer-bottom">
				<div class="auto-container">
					<div class="inner-container">
						<div class="copyright-text">&copy; Copyright 2022 by <a href="index.html">Company.com</a></div>
					</div>
				</div>
			</div>
		</footer>
		<!--End Main Footer -->

	</div><!-- End Page Wrapper -->


	<!-- Scroll To Top -->
	<div class="scroll-to-top scroll-to-target" data-target="html"><span class="fa fa-angle-up"></span></div>


	<script src="js/jquery.js"></script>
	<script src="js/popper.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/jquery.fancybox.js"></script>
	<script src="js/jquery-ui.js"></script>
	<script src="js/wow.js"></script>
	<script src="js/appear.js"></script>
	<script src="js/select2.min.js"></script>
	<script src="js/swiper.min.js"></script>
	<script src="js/owl.js"></script>
	<script src="js/script.js"></script>
</body>

<!-- Mirrored from kodesolution.com/html/2022/edulerns-html/page-courses.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 02 Jul 2023 16:49:23 GMT -->

</html>