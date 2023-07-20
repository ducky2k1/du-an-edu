<?php
	include "./model/pdo.php";
	include "./model/course.php";
	include "./model/class.php";
	include "./model/taikhoan.php";
	$listcourse = loadall_course();

	if(isset($_GET['act']) && $_GET['act'] != "") {
		$act = $_GET['act'];
		switch ($act) {
			case 'class':
				if(isset($_GET['idkh']) && ($_GET['idkh']>0)) {
					$id = $_GET['idkh'];
					$listclass = load_same_course($id);
					include "page-course-details.php";
					die();
				} else {
					include "index.php";
				}
				break;
			case 'dangky':
				var_dump($_POST['email']);
				if(isset($_POST['dangky']) && ($_POST['dangky']) ) {
					$email = $_POST['email'];
					$name = $_POST['name'];
					$pass = $_POST['pass'];
					var_dump($name);
					insert_taikhoan_member($email,$pass,$name);
					$thongbao = "Đã đăng ký thành công. Vui lòng đăng nhập để thực hiện chức năng bình luận và đặt hàng!";
				}
				include "signup.php";
				die();
				break;  
		default:
				include "home.php";
				break;
		} 
	} else {
		include "home.php";
	}
	// $listclass = load_same_course();
	// var_dump($listcourse); 
?>
