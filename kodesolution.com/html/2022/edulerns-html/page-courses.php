<?php
	session_start();
	include "./model/pdo.php";
	include "./model/course.php";
	$listcourse = loadall_course();
?>
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
			include "./header.php";
		?>
		<!--End Main Header -->

		<!-- Start main-content -->
		<section class="page-title" style="background-image: url(images/background/page-title.jpg);">
			<div class="auto-container">
				<div class="title-outer">
					<h1 class="title">Khóa học</h1>
					<ul class="page-breadcrumb">
						<li><a href="index.html">Trang chủ</a></li>
						<!-- <li><a href="#">Khóa học</a></li> -->
						<li>Khóa học</li>
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
										<div class="value">'.$mo_ta.'</div>
									</div>
									<div class="content-box">
										<ul class="course-info">
										<h6 class="title"><a href="'.$link.'">Giá tiền:  '.number_format($price*22350).'  (VNĐ)</a></h6>
										</ul>
										<h5 class="title"><a href="'.$link.'">'.$name.'</a></h5>
										<div class="other-info">
											<div class="rating-box">
												<span class="text">(4.9 /5 Rating)</span>
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
				</div>
			</div>
		</section>
		<!-- End Courses Section-->

		<?php include "./footer.php"; ?>