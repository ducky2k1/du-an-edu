
<?php

    if (isset($_SESSION['email'])) {
        $email=$_SESSION['email'];
        $sql="SELECT * from dtb_member where email='$email'";
        $info=pdo_query_one($sql);
        $ma_us=$info['id'];
    }
?>
<header class="main-header header-style-one" style="z-index:100; position: fixed;  top: 0; background-color:aliceblue;">

			<!-- Main box -->
			<div class="main-box">
				<div class="logo-box">
					<div class="logo"><a href="index.php"><img src="images/logo.png" alt="" title="Tronis"></a></div>
				</div>

				<!--Nav Box-->
				<div class="nav-outer">

					<nav class="nav main-menu">
						<ul class="navigation">
							<li class="current "><a href="index.php">Trang chủ</a>

							</li>

							<li class="dropdown"><a href="page-courses.php">Khóa học</a>
								<ul>
									<?php
										foreach ($listcourse as $course) {
											extract($course);
											$link = "index.php?act=class&idkh=".$id;
											echo '
												<li><a href="'.$link.'">'.$name.'</a></li>
												';
										}
									?>
								</ul>
							</li>

							<li><a href="page-contact.php">Liên hệ</a></li>
						</ul>
					</nav>
					<!-- Main Menu End-->
					<div class="" style="margin-left: 340px;">
							<?php
								if (!isset($_SESSION['email'])) {
									echo '
									<a href="./index.php?act=dn"><button class="theme-btn btn-style-one">Đăng nhập</button></a>
									<a href="./index.php?act=dangky"><button class="theme-btn btn-style-one">Đăng ký</button></a>
								</a>
									';
								} else { ?>

								<div class="" style="display:flex;justify-content:center;align-items:center;">
								<img src="./img_upload/<?php 										
										if(isset($info)&&($info)){
											echo $info['image'];
										} ?>" alt="" style="width:50px;height:50px;border-radius: 50%; border:1px solid black; margin-right: 20px;">
								<nav class="nav main-menu">
									<ul class="navigation">
										<li class="dropdown"><a href="#">									
											<?php 
												if(isset($info)&&($info)){
													echo $info['name'];
												}
											?></a>
											<ul>
												<li><a tabindex="-1" href="./buy.php?act=info">Thông tin</a></li>
												<li><a tabindex="-1" href="./index.php?act=hoadon">Hóa đơn</a></li>
												<li><a tabindex="-1" href="./index.php?act=lopcuatoi">Lớp học của tôi</a></li>
												<li >
													<a class="test" tabindex="-1" href="./index.php?act=dx">Đăng xuất </a>
												</li>
												<!-- <li><a href="page-course-details.html">Course Details</a></li> -->
											</ul>
										</li>
									</ul>
								</nav>
								</div>

										




							<?php	}
							?>

						</div>

					<div class="outer-box">
						<!-- Mobile Nav toggler -->
						<div class="mobile-nav-toggler"><span class="icon lnr-icon-bars"></span></div>
					</div>
				</div>
			</div>
			<!-- End Main Box -->

			<!-- Mobile Menu  -->
			<div class="mobile-menu">
				<div class="menu-backdrop"></div>

				<!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header-->
				<nav class="menu-box">
					<div class="upper-box">
						<div class="nav-logo"><a href="index.php"><img src="images/logo-2.png" alt="" title=""></a>
						</div>
						<div class="close-btn"><i class="icon fa fa-times"></i></div>
					</div>

					<ul class="navigation clearfix">
						<!--Keep This Empty / Menu will come through Javascript-->
					</ul>
					<ul class="contact-list-one">
						<li>
							<!-- Contact Info Box -->
							<div class="contact-info-box">
								<i class="icon lnr-icon-phone-handset"></i>
								<span class="title">Call Now</span>
								<a href="tel:+92880098670">+92 (8800) - 98670</a>
							</div>
						</li>
						<li>
							<!-- Contact Info Box -->
							<div class="contact-info-box">
								<span class="icon lnr-icon-envelope1"></span>
								<span class="title">Send Email</span>
								<a href="mailto:help@company.com">help@company.com</a>
							</div>
						</li>
						<li>
							<!-- Contact Info Box -->
							<div class="contact-info-box">
								<span class="icon lnr-icon-clock"></span>
								<span class="title">Send Email</span>
								Mon - Sat 8:00 - 6:30, Sunday - CLOSED
							</div>
						</li>
					</ul>


					<ul class="social-links">
						<li><a href="#"><i class="fab fa-twitter"></i></a></li>
						<li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
						<li><a href="#"><i class="fab fa-pinterest"></i></a></li>
						<li><a href="#"><i class="fab fa-instagram"></i></a></li>
					</ul>
				</nav>
			</div><!-- End Mobile Menu -->

			<!-- Header Search -->
			<div class="search-popup">
				<span class="search-back-drop"></span>
				<button class="close-search"><span class="fa fa-times"></span></button>

				<div class="search-inner">
					<form method="post" action="https://kodesolution.com/html/2022/edulerns-html/index.html">
						<div class="form-group">
							<input type="search" name="search-field" value="" placeholder="Search..." required="">
							<button type="submit"><i class="fa fa-search"></i></button>
						</div>
					</form>
				</div>
			</div>
			<!-- End Header Search -->

			
		</header>