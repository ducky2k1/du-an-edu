<?php
	// var_dump($listclass);
	// die();
?>
<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from kodesolution.com/html/2022/edulerns-html/page-course-details.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 02 Jul 2023 16:49:23 GMT -->

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
<style>
	.w-30 {
	}
	.mr-10 {
		margin-right: 10px;
	}
	.grid-col-4 {
	display: grid;
  	grid-template-columns: auto auto auto;
	}
</style>

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
					<h1 class="title">
						<?php 
							$tenkh = $listclass[0]["tenkh"];
							echo $tenkh;
						?></h1>
					<ul class="page-breadcrumb">
						<li><a href="index.html">Home</a></li>
						<li><a href="#">Pages</a></li>
						<li>Courses</li>
					</ul>
				</div>
			</div>
		</section>
		<!-- end main-content -->

		<!--Start courses Details-->
		<section class="course-details">
			<div class="container">
				<div class="row flex-xl-row-reverse">
					<!--Start courses Details Content-->
					<div class="col-xl-8 col-lg-8">
						<div class="courses-details__content">
							<!-- <img src="images/resource/course-details.jpg" alt="" /> -->
							<h2 class="mt-4">Classes</h2>
							<div class="carousel-outer">
								<!-- Courses Carousel -->
								<div class="grid-col-4">
									<!-- Course Block -->
									<?php
									// var_dump($listclass);
									// die();
									foreach ($listclass as $class) {
										extract($class);
										echo '
											<div class="course-block mr-10 w-30">
												<div class="inner-box">
													<div class="image-box">
														<figure class="image"><a href="page-course-details.html"><img
																	src="images/resource/course-1.jpg" alt=""></a></figure>
														<span class="price">$'.$gia.'</span>
														<div class="value">'.$cahoc.'</div>
														<!-- <a href="" class="value theme-btn btn-style-one ">BUY THIS COURSE</a> -->
														<!-- <div class="value">BUY THIS COURSE</div> -->
													</div>
													<div class="content-box">
														<ul class="course-info">
															<li><i class="fa fa-clock"></i> '.$cahoc_start.' - '.$cahoc_end.'</li>
															<li><i class="fa fa-chalkboard-teacher"></i> '.$tengv.'</li>
															<!--	<li><i class="fa fa-users"></i> 16 Students</li>  -->
														</ul>
														<h5 class="title"><a href="page-course-details.html">'.$tenlop.'</a></h5>

														<div class="other-info">
															<div class="rating-box">
																<span class="text">(4.9 /8 Rating)</span>
																<div class="rating"><span class="fa fa-star"></span><span
																		class="fa fa-star"></span><span
																		class="fa fa-star"></span><span
																		class="fa fa-star"></span><span
																		class="fa fa-star"></span></div>
															</div>
															<div class="duration"><i class="fa fa-clock"></i> 3 Weeks</div>

														</div>
													</div>


												</div>
												<div class="center">
													<a href="#"
														class="value theme-btn btn-style-one course-details-price-btn">Register</a>
												</div>
											</div> ';
									}

									?>
									<!-- Course Block -->
									<!-- <div class="course-block mr-10">
										<div class="inner-box">
											<div class="image-box">
												<figure class="image"><a href="page-course-details.html"><img
															src="images/resource/course-2.jpg" alt=""></a></figure>
												<span class="price">$49.00</span>
												<div class="value">Advanced</div>
											</div>
											<div class="content-box">
												<ul class="course-info">
													<li><i class="fa fa-book"></i> 8 Lessons</li>
													<li><i class="fa fa-users"></i> 16 Students</li>
												</ul>
												<h5 class="title"><a href="page-course-details.html">IELTS 1.2</a></h5>
												<div class="other-info">
													<div class="rating-box">
														<span class="text">(4.9 /8 Rating)</span>
														<div class="rating"><span class="fa fa-star"></span><span
																class="fa fa-star"></span><span
																class="fa fa-star"></span><span
																class="fa fa-star"></span><span
																class="fa fa-star"></span></div>
													</div>
													<div class="duration">3 Weeks</div>
												</div>
											</div>


										</div>
										<div class="center">
											<a href="#"
												class="value theme-btn btn-style-one course-details-price-btn">Buy
												This
												Course</a>
										</div>
									</div> -->

									<!-- Course Block -->
									<!-- <div class="course-block mr-10">
										<div class="inner-box">
											<div class="image-box">
												<figure class="image"><a href="page-course-details.html"><img
															src="images/resource/course-3.jpg" alt=""></a></figure>
												<span class="price">$49.00</span>
												<div class="value">Advanced</div>
											</div>
											<div class="content-box">
												<ul class="course-info">
													<li><i class="fa fa-book"></i> 8 Lessons</li>
													<li><i class="fa fa-users"></i> 16 Students</li>
												</ul>
												<h5 class="title"><a href="page-course-details.html">IELTS 2.1
													</a></h5>
												<div class="other-info">
													<div class="rating-box">
														<span class="text">(4.9 /8 Rating)</span>
														<div class="rating"><span class="fa fa-star"></span><span
																class="fa fa-star"></span><span
																class="fa fa-star"></span><span
																class="fa fa-star"></span><span
																class="fa fa-star"></span></div>
													</div>
													<div class="duration">3 Weeks</div>
												</div>
											</div>


										</div>
										<div class="">
											<a href="#"
												class="value theme-btn btn-style-one course-details-price-btn">Buy
												This
												Course</a>
										</div>
									</div> -->

									<!-- Course Block -->
									<!-- <div class="course-block mr-10">
										<div class="inner-box">
											<div class="image-box">
												<figure class="image"><a href="page-course-details.html"><img
															src="images/resource/course-4.jpg" alt=""></a></figure>
												<span class="price">$49.00</span>
												<div class="value">Advanced</div>
											</div>
											<div class="content-box">
												<ul class="course-info">
													<li><i class="fa fa-book"></i> 8 Lessons</li>
													<li><i class="fa fa-users"></i> 16 Students</li>
												</ul>
												<h5 class="title"><a href="page-course-details.html">IELTS 2.2
													</a></h5>
												<div class="other-info">
													<div class="rating-box">
														<span class="text">(4.9 /8 Rating)</span>
														<div class="rating"><span class="fa fa-star"></span><span
																class="fa fa-star"></span><span
																class="fa fa-star"></span><span
																class="fa fa-star"></span><span
																class="fa fa-star"></span>
														</div>
													</div>
													<div class="duration">3 Weeks</div>
												</div>
											</div>
										</div>
										<div class="">
											<a href="#"
												class="value theme-btn btn-style-one course-details-price-btn">Buy
												This
												Course</a>
										</div>
									</div> -->
								</div>
							</div>
							<!-- <div class="grid-col-3">
								<div class="course-block">
									<div class="inner-box">
										<div class="image-box">
											<figure class="image"><a href="page-course-details.html"><img
														src="images/resource/course-3.jpg" alt=""></a></figure>
											<span class="price">$49.00</span>
											<div class="value">Advanced</div>
										</div>
										<div class="content-box">
											<ul class="course-info">
												<li><i class="fa fa-book"></i> 8 Lessons</li>
												<li><i class="fa fa-users"></i> 16 Students</li>
											</ul>
											<h5 class="title"><a href="page-course-details.html">TOEIC 1.1
												</a></h5>
											<div class="other-info">
												<div class="rating-box">
													<span class="text">(4.9 /8 Rating)</span>
													<div class="rating"><span class="fa fa-star"></span><span
															class="fa fa-star"></span><span
															class="fa fa-star"></span><span
															class="fa fa-star"></span><span class="fa fa-star"></span>
													</div>
												</div>
												<div class="duration">3 Weeks</div>
											</div>
										</div>
									</div>
								</div>

							</div> -->
							<p>Lorem ipsum is simply free text used by copytyping refreshing. Neque porro est qui
								dolorem ipsum quia quaed inventore veritatis et quasi architecto beatae vitae dicta sunt
								explicabo. Aelltes port lacus quis enim var sed efficitur turpis gilla sed sit amet
								finibus eros. Lorem Ipsum is simply dummy text of the printing.</p>
							<p>When an unknown printer took a galley of type and scrambled it to make a type specimen
								book. It has survived not only five centuries, but also the leap into electronic
								typesetting, remaining essentially unchanged. </p>
							<div class="content mt-40">
								<div class="text">
									<h3>What You Will Learn?</h3>
									<p>Lorem ipsum is simply free text used by copytyping refreshing. Neque porro est
										qui dolorem ipsum quia quaed inventore veritatis et quasi architecto beatae
										vitae dicta sunt explicabo.</p>
								</div>
								<div class="row mt-30">
									<!-- Category Block Two -->
									<div class="category-block-current-two col-lg-4 col-md-6 col-sm-6">
										<div class="inner-box">
											<div class="icon-box">
												<i class="icon flaticon-elearning"></i>
											</div>
											<h4 class="title">Online degree programs</h4>
											<span class="sub-title">26 Courses</span>
										</div>
									</div>

									<!-- Category Block Two -->
									<div class="category-block-current-two col-lg-4 col-md-6 col-sm-6">
										<div class="inner-box">
											<div class="icon-box">
												<i class="icon flaticon-study-1"></i>
											</div>
											<h4 class="title">Non-degree programs</h4>
											<span class="sub-title">38 Courses</span>
										</div>
									</div>

									<!-- Category Block Two -->
									<div class="category-block-current-two col-lg-4 col-md-6 col-sm-6">
										<div class="inner-box">
											<div class="icon-box">
												<i class="icon flaticon-study"></i>
											</div>
											<h4 class="title">Off campus programs</h4>
											<span class="sub-title">13 Courses</span>
										</div>
									</div>
								</div>
							</div>
							<div class=" mt-25">
								<h3>Frequently Asked Question</h3>
								<p>Lorem ipsum is simply free text used by copytyping refreshing. Neque porro est qui
									dolorem ipsum quia quaed inventore veritatis et quasi architecto beatae vitae dicta
									sunt explicabo.</p>
								<ul class="accordion-box wow fadeInRight">
									<!--Block-->
									<li class="accordion block">
										<div class="acc-btn">Is my technology allowed on tech?
											<div class="icon fa fa-plus"></div>
										</div>
										<div class="acc-content">
											<div class="content">
												<div class="text">There are many variations of passages the majority
													have suffered alteration in some fo injected humour, or randomised
													words believable.</div>
											</div>
										</div>
									</li>
									<!--Block-->
									<li class="accordion block active-block">
										<div class="acc-btn active">How to soft launch your business?
											<div class="icon fa fa-plus"></div>
										</div>
										<div class="acc-content current">
											<div class="content">
												<div class="text">There are many variations of passages the majority
													have suffered alteration in some fo injected humour, or randomised
													words believable.</div>
											</div>
										</div>
									</li>
									<!--Block-->
									<li class="accordion block">
										<div class="acc-btn">How to turn visitors into contributors
											<div class="icon fa fa-plus"></div>
										</div>
										<div class="acc-content">
											<div class="content">
												<div class="text">There are many variations of passages the majority
													have suffered alteration in some fo injected humour, or randomised
													words believable.</div>
											</div>
										</div>
									</li>
								</ul>
							</div>
						</div>
					</div>
					<!--End courses Details Content-->

					<!--Start courses Details Sidebar-->
					<div class="col-xl-4 col-lg-4">
						<div class="course-sidebar">
							<ul class="course-details-info">
								<li class="course-details-info-link">
									<span class="course-details-info-icon"><i class="far fa-clock"></i></span>
									Durations: <span>20 hours</span>
								</li>
								<li class="course-details-info-link">
									<span class="course-details-info-icon"><i class="far fa-folder-open"></i></span>
									Lectures: <span>4</span>
								</li>
								<li class="course-details-info-link">
									<span class="course-details-info-icon"><i class="far fa-user-circle"></i></span>
									Students: <span>Max 20</span>
								</li>
								<li class="course-details-info-link">
									<span class="course-details-info-icon"><i class="far fa-flag"></i></span>
									Skill Level: <span>Basic</span>
								</li>
								<li class="course-details-info-link">
									<span class="course-details-info-icon"><i class="far fa-bell"></i></span>
									Time: <span>8:30 AM - 9:30 PM</span>
								</li>
							</ul>

							<!-- <div class="course-details-price">
								<p class="course-details-price-text">Course price</p>
								<p class="course-details-price-amount">$18.00</p>
								<a href="#" class="theme-btn btn-style-two course-details-price-btn">Buy This Course</a>
							</div> -->

							<div class="latest-course mb-30">
								<h4 class="latest-course-title mb-30">Diffirent Courses</h4>
								<?php
									foreach ($listcourse as $course) {
										extract($course);
										if($id != $idkh) {
											$link = "index.php?act=class&idkh=".$id;
												echo '<div class="latest-course-item">
												<div class="latest-course-img">
													<img src="images/resource/course-1.jpg" alt="">
												</div>
												<div class="latest-course-content">
													<a class="latest-course-author" href="#">Khóa học <span>'.$mo_ta.'</span></a>
													<h5><a href="'.$link.'">'.$name.'</a></h5>
			
													<div class="latest-course-stars">
														<i class="fas fa-star"></i>
														<i class="fas fa-star"></i>
														<i class="fas fa-star"></i>
														<i class="fas fa-star"></i>
														<i class="fas fa-star"></i>
														<span>4.8</span>
			
													</div>
												</div>
											</div>';
										}
									}
								?>
								<!-- <div class="latest-course-item">
									<div class="latest-course-img">
										<img src="images/resource/course-1.jpg" alt="">
									</div>
									<div class="latest-course-content">
										<a class="latest-course-author" href="#">by <span>Basic</span></a>
										<h5><a href="page-course-details.html">TOEIC 1.1</a></h5>

										<div class="latest-course-stars">
											<i class="fas fa-star"></i>
											<i class="fas fa-star"></i>
											<i class="fas fa-star"></i>
											<i class="fas fa-star"></i>
											<i class="fas fa-star"></i>
											<span>4.8</span>

										</div>
									</div>
								</div> -->
								<!-- <div class="latest-course-item">
									<div class="latest-course-img">
										<img src="images/resource/course-2.jpg" alt="">
									</div>
									<div class="latest-course-content">
										<a class="latest-course-author" href="#">by <span>Advanced</span></a>
										<h5><a href="page-course-details.html">TOEIC 1.2</a></h5>
										<div class="latest-course-stars">
											<i class="fas fa-star"></i>
											<i class="fas fa-star"></i>
											<i class="fas fa-star"></i>
											<i class="fas fa-star"></i>
											<i class="fas fa-star"></i>
											<span>5.0</span>
										</div>
									</div>
								</div> -->
								<!-- <div class="latest-course-item">
									<div class="latest-course-img">
										<img src="images/resource/course-3.jpg" alt="">
									</div>
									<div class="latest-course-content">
										<a class="latest-course-author" href="#">by <span>Advanced</span></a>
										<h5><a href="page-course-details.html">Development Studies</a></h5>
										<div class="latest-course-stars">
											<i class="fas fa-star"></i>
											<i class="fas fa-star"></i>
											<i class="fas fa-star"></i>
											<i class="fas fa-star"></i>
											<i class="fas fa-star"></i>
											<span>4.9</span>
										</div>
									</div>
								</div> -->
							</div>

						</div>
					</div>
					<!--End courses Details Sidebar-->
				</div>
			</div>
		</section>
		<!--End courses Details-->

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
								<div class="logo"><a href="index.html"><img src="images/logo-2.png" alt=""></a></div>
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

<!-- Mirrored from kodesolution.com/html/2022/edulerns-html/page-course-details.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 02 Jul 2023 16:49:24 GMT -->

</html>