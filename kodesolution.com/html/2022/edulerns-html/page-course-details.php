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


	body{background: #eee}.date{font-size: 11px}.comment-text{font-size: 12px}.fs-12{font-size: 12px}.shadow-none{box-shadow: none}.name{color: #007bff}.cursor:hover{color: blue}.cursor{cursor: pointer}.textarea{resize: none}
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
					<h1 class="title"><?php echo $listclass[0]['course_name'] ?></h1>
					<ul class="page-breadcrumb">
						<li><a href="index.html">Trang chủ</a></li>
						<li><a href="#">Courses</a></li>
						<li><?php echo $listclass[0]['course_name'] ?></li>
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

							<div class="content mt-40">
								<div class="text">
									<h3>Bạn sẽ học gì ?</h3>
									<p>
									<?php
									$list = ['IELTS (International English Language Testing System) là Hệ thống Kiểm 
									tra Anh ngữ Quốc tế với 4 kỹ năng Nghe, Nói, Đọc và Viết. Chứng chỉ này ra đời 
									vào năm 1989 bởi 3 tổ chức: ESOL thuộc Đại học Cambridge, Hội đồng Anh và Tổ 
									chức Giáo dục IDP (ÚC).

									Đây là cuộc thi kiểm tra trình độ thông thạo Anh ngữ quan trọng và phổ biến 
									nhất thế giới cho mục đích học tập, làm việc, đi du học và đi định cư. Trước 
									nhu cầu khách hàng ngày một tăng cao, Thiên Tú Academy đã tổ chức các khóa học 
									Luyện thi IELTS nhằm cung cấp đến khách hàng dịch vụ luyện thi và làm hồ sơ du học, 
									định cư trọn gói từ A – Z.',
									'TOEIC (viết tắt của Test of English for International Communication – Bài kiểm tra 
									tiếng Anh giao tiếp quốc tế) là một bài thi nhằm đánh giá trình độ sử dụng tiếng Anh 
									dành cho những người sử dụng tiếng Anh như một ngoại ngữ, đặc biệt là những đối tượng 
									muốn sử dụng tiếng Anh trong môi trường giao tiếp và làm việc quốc tế. Kết quả của bài 
									thi TOEIC phản ánh mức độ thành thạo khi giao tiếp bằng tiếng Anh trong các hoạt động 
									như kinh doanh, thương mại, du lịch…

									Ngày nay, kỹ năng tiếng Anh vô cùng cần thiết để các bạn sinh viên chuẩn bị cho môi 
									trường làm việc chuyên nghiệp. Nhiều trường Đại học hàng đầu Việt Nam hiện yêu cầu sinh 
									viên sở hữu những chứng chỉ tiếng Anh quốc tế như TOEIC là điều kiện tốt nghiệp. Nhiều 
									doanh nghiệp hàng đầu Việt Nam cũng dùng TOEIC  để sát hạch tuyển dụng đầu vào cũng như 
									xét tăng lương thưởng, bổ nhiệm vào các vị trí cao hơn cho cán bộ công nhân viên. Vì vậy, 
									TOEIC là 1 chứng chỉ vô cùng quan trọng để chứng tỏ năng lực tiếng Anh và hỗ trợ phát triển 
									nghề nghiệp trong gần như tất cả các ngành nghề.',
									'Đây là khóa học tiếng anh trực tiếp hỗ trợ cho các bạn các lớp tiếng anh giao tiếp bổ sung 
									từ vựng và ngữ pháp, giúp cho các bạn hệ thống hóa các hiện tượng ngữ pháp cơ bản trong tiếng 
									anh như thì, thời, câu bị động, chủ động, các loại câu điều kiện, mệnh đề quan hệ, mạo từ, giới 
									từ…. Bên cạnh đó, các bạn cũng sẽ được học từ vựng theo các chủ đề phục vụ trực tiếp công việc, 
									học tập hay giao tiếp hàng ngày như friends, family, home, housework, shopping, study, jobs…',
									'Khóa học tiếng Anh cho người mất gốc được ra đời với mục tiêu xây dựng nền tảng tiếng Anh căn 
									bản, tạo nền móng vững chắc để người học có thể phát triển và hoàn thiện bản thân. Lộ trình khóa 
									học được xây dựng bài bản, tập trung vào những chủ đề gần gũi, thiết thực trong đời sống. Ngoài ra, 
									khóa học hướng tới yếu tố “học sâu, nhớ lâu”, phát triển kỹ năng tập trung giúp người học tiếng Anh 
									từ “zero” thành “hero”.'
											];
									if($_GET['idkh'] == 10){
										echo $list[0];
									} else if($_GET['idkh'] == 11) {
										echo $list[1];
									} else if($_GET['idkh'] == 12) {
										echo $list[2];
									} else{
										echo $list[3];
									}
									?>	
									</p>
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
								<h3>Một số câu hỏi thường gặp</h3>
								<p>Dưới đây là một số câu hỏi EduLerns hay gặp.</p>
								<ul class="accordion-box wow fadeInRight">
									<!--Block-->
									<li class="accordion block">
										<div class="acc-btn">Lộ trình học của tôi như thế nào ?
											<div class="icon fa fa-plus"></div>
										</div>
										<div class="acc-content">
											<div class="content">
												<div class="text">Comming soon.</div>
											</div>
										</div>
									</li>
									<!--Block-->
									<li class="accordion block active-block">
										<div class="acc-btn active">Tôi sẽ học trong bao lâu ? 
											<div class="icon fa fa-plus"></div>
										</div>
										<div class="acc-content current">
											<div class="content">
												<div class="text">Mỗi khóa học thường sẽ kéo dài trong khoảng thời gian 5 tuần.</div>
											</div>
										</div>
									</li>
									<!--Block-->
									<li class="accordion block">
										<div class="acc-btn">Sau khi hoàn thành khóa học tôi sẽ được lợi ích gì ? 
											<div class="icon fa fa-plus"></div>
										</div>
										<div class="acc-content">
											<div class="content">
												<div class="text">Sau khi hoàn thành khóa học bạn sẽ cải thiện tốt các kỹ năng nghe, nói, đọc viết.</div>
											</div>
										</div>
									</li>
								</ul>
							</div>

							<div class="text">
								<h3>Bình luận</h3>
								<div class="container mt-5">
									<div class="d-flex justify-content-center row">
										<div class="col-md-8" style="width:100%;">
											<div class="d-flex flex-column comment-section">
												<?php foreach($listComment as $ltc){ extract($ltc);?>
													<div class="bg-white p-2">
													<div class="d-flex flex-row user-info">
														<img class="rounded-circle" src="./img_upload/<?php echo $image ?>" style="height:50px;width:50px;">
														<div class="d-flex flex-column justify-content-start ml-2">
															<span class="d-block font-weight-bold name" style="color:#4C7FAC;font-weight:500;"><?php echo $name ?></span>
															<span class="date text-black-50">Công khai - <?php echo $day_comment ?></span>
														</div>
													</div>
													<div class="mt-2">
														<p class="comment-text" style="font-weight:500;"><?php  echo $content ?></p>
													</div>
												</div>
												<?php } ?>


												<!-- <div class="bg-white">
													<div class="d-flex flex-row fs-12">
														<div class="like p-2 cursor"><i class="fa fa-thumbs-o-up"></i><span class="ml-1">Like</span></div>
														<div class="like p-2 cursor"><i class="fa fa-commenting-o"></i><span class="ml-1">Comment</span></div>
														<div class="like p-2 cursor"><i class="fa fa-share"></i><span class="ml-1">Share</span></div>
													</div>
												</div> -->
												<div class="bg-light p-2">
													<?php if(isset($_SESSION['email'])){ ?>
														<form action="./index.php?act=upcom&idkh=<?php echo $_GET['idkh'] ?>" method="post">
															<div class="d-flex flex-row align-items-start">
															<img class="rounded-circle" src="./img_upload/<?php 										
																								if(isset($info)&&($info)){
																									echo $info['image'];
																								} ?>" style="height:40px;width:40px;">
															<textarea class="form-control ml-1 shadow-none textarea" style="border: 1px solid #4C7FAC;" name="content"></textarea>
															</div>
															<div class="mt-2 text-right">
																<input type="submit" name="up" value="Bình luận" class="btn btn-primary btn-sm shadow-none" style="background-color: #4C7FAC;border: 1px solid #4C7FAC;">
																<!-- <button class="btn btn-primary btn-sm shadow-none" type="submit" name="upcom" style="background-color: #4C7FAC;border: 1px solid #4C7FAC;">Post comment</button> -->
																<button class="btn btn-outline-primary btn-sm ml-1 shadow-none" type="button" style="border: 1px solid #4C7FAC;color:#4C7FAC;">Cancel</button>
															</div>
														</form>

													<?php } else { ?>
														<div>
															<p style="color: #4C7FAC">Bạn phải đăng nhập để bình luận.</p>
														</div>
													<?php } ?>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>





							

							<!-- <img src="images/resource/course-details.jpg" alt="" /> -->
							<h2 class="mt-4">Tất cả lớp học</h2>
							<div class="carousel-outer">
								<!-- Courses Carousel -->
								<div class="row">
									<!-- Course Block -->
									
									<?php 
										// require_once "./model/class.php";
									foreach ($listclass as $class) {  ?>
										
										
											<div class="course-block col-sm-4">
												<div class="inner-box">
													<div class="image-box">
														<figure class="image"><a href="#"><img
																	src="images/resource/course-1.jpg" alt=""></a></figure>
														<div class="value"><?php extract($class); echo $ca_name ?> - <?php extract($class); echo $day ?></div>
														<!-- <a href="" class="value theme-btn btn-style-one ">BUY THIS COURSE</a> -->
														<!-- <div class="value">BUY THIS COURSE</div> -->
													</div>
													<div class="content-box">
														<ul class="course-info">
															<li ><i class="fa fa-tag"></i><?php extract($class); echo ' '.number_format($price*22350).' VND' ?></li>
															<li><i class="fa fa-clock"></i>
																<?php extract($class); echo $time_start ?> -
																<?php extract($class); echo $time_end ?>
															</li>
															<li><i class="fa fa-users"></i> 
															<?php
															foreach($count_id as $keyCount => $valCount){
																	if ($keyCount == $class["id"]) {
																		echo "Có ".$valCount." /";
																	}
																} 
															?>
															<?php extract($class); echo $slot ?> học sinh</li>
															<li><i class="fa fa-chalkboard-teacher"></i> <?php extract($class); echo $customer_name ?></li>
														</ul>
														<h5 class="title"><a href="#"><?php extract($class); echo $name ?></a></h5>
														<div class="other-info">

														</div>
													</div>


												</div>
												<div class="center">
													<?php if(isset($_SESSION['email'])){ extract($class); if(loadsame_hoadon_member($ma_us, $id) == false){ ?>
														<a class="value theme-btn btn-style-one course-details-price-btn" style="background-color:silver;">Đã đăng ký</a>
													<?php } else {if($count_id[$class["id"]]==20){ ?>
														<a class="value theme-btn btn-style-one course-details-price-btn" style="background-color:silver;">Đã đủ học sinh</a>
													<?php } else{ ?>
														<a href="./buy.php?act=buy&id_course=<?php extract($class); echo $course_id ?>&id_class=<?php extract($class); echo $id ?>&price=<?php extract($class); echo $price ?>&tenlop=<?php extract($class); echo $name ?>" class="value theme-btn btn-style-one course-details-price-btn">Đăng ký</a>
													<?php  }}} else {if($count_id[$class["id"]]==20) { ?>
														<a class="value theme-btn btn-style-one course-details-price-btn" style="background-color:silver;">Đã đủ học sinh</a>
													<?php } else { ?>
														<a href="./buy.php?act=buy&id_course=<?php extract($class); echo $course_id ?>&id_class=<?php extract($class); echo $id ?>&price=<?php extract($class); echo $price ?>&tenlop=<?php extract($class); echo $name ?>" class="value theme-btn btn-style-one course-details-price-btn">Đăng ký</a>
													<?php }} ?>
												</div>
											</div> 
									<?php } ?>
								</div>
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
									Thời lượng: <span>20 hours</span>
								</li>
								<li class="course-details-info-link">
									<span class="course-details-info-icon"><i class="far fa-folder-open"></i></span>
									Giảng viên: <span>4</span>
								</li>
								<li class="course-details-info-link">
									<span class="course-details-info-icon"><i class="far fa-user-circle"></i></span>
									Học sinh: <span>Tối đa 20</span>
								</li>
								<li class="course-details-info-link">
									<span class="course-details-info-icon"><i class="far fa-flag"></i></span>
									Trình độ: <span>Cơ bản</span>
								</li>
							</ul>

							<!-- <div class="course-details-price">
								<p class="course-details-price-text">Course price</p>
								<p class="course-details-price-amount">$18.00</p>
								<a href="#" class="theme-btn btn-style-two course-details-price-btn">Buy This Course</a>
							</div> -->

							<div class="latest-course mb-30">
								<h4 class="latest-course-title mb-30">Khóa học khác</h4>
								<?php foreach ($listcourse as $class) {
								// $link = "index.php?act=class&idkh=".$_GET['idkh'];
							?>

								<div class="latest-course-item">
									<div class="latest-course-img">
										<img src="images/resource/course-1.jpg" alt="">
									</div>
									<div class="latest-course-content">
										
										<a class="latest-course-author" href="#"><span><?php extract($class); echo $mo_ta ?></span></a>										
										<h5><a href="./index.php?act=class&idkh=<?php extract($class); echo $id ?>"><?php extract($class); echo $name ?></a></h5>
										<h5><?php extract($class); echo number_format($price*22350).' VND' ?></h5>
										<div class="latest-course-stars">
											<i class="fas fa-star"></i>
											<i class="fas fa-star"></i>
											<i class="fas fa-star"></i>
											<i class="fas fa-star"></i>
											<i class="fas fa-star"></i>
											<span>4.8</span>

										</div>
											
										

									</div>
									
								</div>
								<?php } ?>
							</div>

						</div>
					</div>
					
					<!--End courses Details Sidebar-->
				</div>
			</div>
		</section>
		<!--End courses Details-->

		<?php include "./footer.php"; ?>