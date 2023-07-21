<header class="main-header header-style-one">

			<!-- Main box -->
			<div class="main-box">
				<div class="logo-box">
					<div class="logo"><a href="index.php"><img src="images/logo.png" alt="" title="Tronis"></a></div>
				</div>

				<!--Nav Box-->
				<div class="nav-outer">

					<nav class="nav main-menu">
						<ul class="navigation">
							<li class="current "><a href="index.php">Home</a>
								<!-- <ul>
									<li><a href="index.html">Home page 01</a></li>
									<li><a href="index-2.html">Home page 02</a></li>
									<li class="dropdown"><a href="#">Single</a>
										<ul>
											<li><a href="index-1-single.html">Home Single 1</a></li>
											<li><a href="index-2-single.html">Home Single 2</a></li>
										</ul>
									</li>
									<li class="dropdown"><a href="#">Dark</a>
										<ul>
											<li><a href="index-1-dark.html">Home Dark 1</a></li>
											<li><a href="index-2-dark.html">Home Dark 2</a></li>
										</ul>
									</li>
									<li class="dropdown"><a href="#">Boxed</a>
										<ul>
											<li><a href="index-1-boxed.html">Home Boxed 1</a></li>
											<li><a href="index-2-boxed.html">Home Boxed 2</a></li>
										</ul>
									</li>
									<li class="dropdown"><a href="#">RTL</a>
										<ul>
											<li><a href="index-1-rtl.html">Home RTL 1</a></li>
										</ul>
									</li>
									<li class="dropdown"><a href="#">Header Styles</a>
										<ul>
											<li><a href="index.html">Header Style One</a></li>
											<li><a href="index-2.html">Header Style Two</a></li>
										</ul>
									</li>
								</ul> -->
							</li>
							<!-- <li class="dropdown"><a href="#">Pages</a>
								<ul>
									<li><a href="page-about.html">About</a></li>
									<li class="dropdown"><a href="#">Team</a>
										<ul>
											<li><a href="page-team.html">Team List</a></li>
											<li><a href="page-team-details.html">Team Details</a></li>
										</ul>
									</li>
									<li><a href="page-testimonial.html">Testimonial</a></li>
									<li><a href="page-pricing.html">Pricing</a></li>
									<li><a href="page-faq.html">FAQ</a></li>
									<li><a href="page-404.html">Page 404</a></li>
								</ul>
							</li> -->
							<li class="dropdown"><a href="page-courses.php">Courses</a>
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
									<!-- <li><a href="page-course-details.html">Course Details</a></li> -->
								</ul>
							</li>
							<!-- <li class="dropdown"><a href="#">Shop</a>
								<ul>
									<li><a href="shop-products.html">Products</a></li>
									<li><a href="shop-products-sidebar.html">Products with Sidebar</a></li>
									<li><a href="shop-product-details.html">Product Details</a></li>
									<li><a href="shop-cart.html">Cart</a></li>
									<li><a href="shop-checkout.html">Checkout</a></li>
								</ul>
							</li> -->
							<!-- <li class="dropdown"><a href="#">News</a>
								<ul>
									<li><a href="news-grid.html">News Grid</a></li>
									<li><a href="news-details.html">News Details</a></li>
								</ul>
							</li> -->
							<li><a href="page-contact.php">Contact</a></li>
						</ul>
					</nav>
					<!-- Main Menu End-->
					<div class="" style="margin-left: 340px;">
							<a href="./signin.php" style="margin-right:14px"><button class="theme-btn btn-style-one">Signin</button></a>
							<a href="./signup.php"><button class="theme-btn btn-style-one">Signup</button></a>
						</div>

					<div class="outer-box">
						<!-- <a href="tel:+92(8800)9806" class="info-btn">
							<i class="icon fa fa-phone"></i>
							<small>Call Anytime</small><br> +92 (8800) - 8960
						</a> -->
						

						<!-- <div class="ui-btn-outer">
							<button class="ui-btn ui-btn search-btn">
								<span class="icon lnr lnr-icon-search">Login</span>

							</button>
							<a href="#" class="ui-btn"><i class="lnr-icon-shopping-cart"></i></a>
						</div> -->

						<!-- <a href="#" class="theme-btn btn-style-one"><span class="btn-title">Try For Free</span></a> -->

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

			<!-- Sticky Header  -->
			<div class="sticky-header">
				<div class="auto-container">
					<div class="inner-container">
						<!--Logo nav-->
						<div class="logo">
							<a href="index.php" title=""><img src="images/logo.png" alt="" title=""></a>
						</div>

						<!--Right Col-->
						<div class="nav-outer">
							<!-- Main Menu -->
							<nav class="main-menu">
								<div class="navbar-collapse show collapse clearfix">
									<ul class="navigation clearfix">
										<!--Keep This Empty / Menu will come through Javascript-->
									</ul>
								</div>
							</nav><!-- Main Menu End-->
						
							<!--Mobile Navigation Toggler-->
							<div class="mobile-nav-toggler"><span class="icon lnr-icon-bars"></span></div>
						</div>
						<div class="">
							<a href="./signin.php" style="margin-right:14px"><button class="theme-btn btn-style-one">Signin</button></a>
							<a href="./signup.php"><button class="theme-btn btn-style-one">Signup</button></a>
						</div>
					</div>
				</div>
			</div><!-- End Sticky Menu -->
		</header>