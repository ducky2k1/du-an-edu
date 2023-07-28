<?php
	session_start();

	require "./model/pdo.php";
	include "./model/course.php";
	include "./model/class.php";
	include "./model/taikhoan.php";
	include "./model/cart.php";
	$listcourse = loadall_course();


	if(isset($_GET['act']) && $_GET['act'] != "") {
		$act = $_GET['act'];
		switch ($act) {
			case 'class':
				$listca = list_ca();
				if(isset($_GET['idkh']) && ($_GET['idkh']>0)) {
					$id = $_GET['idkh'];
					//get list class
					$listclass = load_same_course($id);

					// count student in class with class_id
					foreach($listclass as $lClass) {
						$count_id[$lClass["id"]] = count_num($lClass["id"])[0]["count_lop_id"];
					}
					require_once "page-course-details.php";
				} else {
					include "index.php";
				}
				break;
			case 'dangky':
				// var_dump($_POST['email']);
				if(isset($_POST['dangky']) && ($_POST['dangky']) ) {
					$email = $_POST['email'];
					$name = $_POST['name'];
					$pass = $_POST['pass'];
					// var_dump($name);
					insert_taikhoan_member($email,$pass,$name);

					$thongbao = 'Đã đăng ký thành công. Vui lòng <a href="./signin.php"> đăng nhập </a> ';
					
				}
				require_once './signup.php';
				break;  
			case 'dn':

				if (isset($_POST['dang_nhap']) && ($_POST['dang_nhap'])) {
					$email = $_POST['email'];
					$password = $_POST['password'];
					$errer = [];
					if (empty($password)) {
						$errer['password'] = "Vui lòng nhập mật khẩu";
					}
					if (empty($email)) {
						$errer['email'] = "Vui lòng nhập email";
					}
					if (empty($errer)) {
						$sql = "SELECT * FROM dtb_member WHERE email='" . $email . "' ";
						$data = pdo_query_one($sql);
						if ($data) {
							if ($password == $data['pass']) {
								// $_SESSION['login'] = $data['role'];
								// add_cookie('duc',serialize($data),30);
								// $_SESSION['login'] = $data['role'];
								$_SESSION['email'] = $data['email'];
								$_SESSION['id_mem'] = $data['id'];	
								header('location:index.php');
							} else {
								$errer['password'] = "Mật khẩu không đúng";
							}
						} else {
							$errer['email'] = "Không tồn tại email này";
						}
					}
				}                            
				include "./signin.php";
				break;
				case 'dx':
					require_once "./logout.php";
					// delete_cookie('duc');
					header('location:home.php');
				break;
				case 'hoadon':
					$listhoadon = loadall_hoadon_member($_SESSION['id_mem']);
					require_once "./hoadon.php";
					header('location:home.php');
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
