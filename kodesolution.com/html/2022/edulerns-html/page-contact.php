<?php
	session_start();
	include "./model/pdo.php";
	include "./model/course.php";
	$listcourse = loadall_course();
?>
<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from kodesolution.com/html/2022/edulerns-html/page-contact.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 02 Jul 2023 16:49:30 GMT -->

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
					<h1 class="title">Liên hệ chúng tôi</h1>
					<ul class="page-breadcrumb">
						<li><a href="index.html">Trang chủ</a></li>
						<li>Liên hệ</li>
					</ul>
				</div>
			</div>
		</section>
		<!-- end main-content -->

		<!--Contact Details Start-->
		<section class="contact-details">
			<div class="container ">
				<div class="row">
					<div class="col-xl col-lg-6">
						<div class="contact-details__right">
							<div class="sec-title">
								<span class="sub-title">Bạn có cần giúp ?</span>
								<h2>Liên lạc với chúng tôi</h2>
								<div class="text">Nếu bạn có vấn đề, thắc mắc gì về khóa học, giảng viên, trung tâm hãy liên hệ với chúng tôi qua.</div>
							</div>
							<ul class="list-unstyled contact-details__info">
								<li>
									<div class="icon bg-theme-color2">
										<span class="lnr-icon-phone-plus"></span>
									</div>
									<div class="text">
										<h6>Bạn có bất kỳ câu hỏi nào ?</h6>
										<a href="tel:980089850"><span>Free</span> +92 (020)-9850</a>
									</div>
								</li>
								<li>
									<div class="icon">
										<span class="lnr-icon-envelope1"></span>
									</div>
									<div class="text">
										<h6>Viết email</h6>
										<a href="mailto:needhelp@company.com">needhelp@company.com</a>
									</div>
								</li>
								<li>
									<div class="icon">
										<span class="lnr-icon-location"></span>
									</div>
									<div class="text">
										<h6>Trực tiếp 24/24</h6>
										<span>66 broklyn golden street. New York</span>
									</div>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!--Contact Details End-->

		<!-- Divider: Google Map -->
		<section>
			<div class="container-fluid p-0">
				<div class="row">
					<!-- Google Map HTML Codes -->
					<iframe
						src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3024.3603227741282!2d-74.00725942426935!3d40.710083737733505!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c25a22e7fdbf37%3A0x75562549191dc3e5!2s80%20Gold%20Street!5e0!3m2!1svi!2s!4v1691074512734!5m2!1svi!2s"
						data-tm-width="100%" height="500" frameborder="0" allowfullscreen=""></iframe>
			</div>
		</section>

		<?php include "./footer.php"; ?>