<?php
	session_start();

	require "./model/pdo.php";
	include "./model/course.php";
	include "./model/class.php";
	include "./model/taikhoan.php";
	include "./model/cart.php";
	include "./model/comment.php";
	$listcourse = loadall_course();
	if (isset($_SESSION['email'])) {
        $email=$_SESSION['email'];
        $sql="SELECT * from dtb_member where email='$email'";
        $info=pdo_query_one($sql);
        $ma_us=$info['id'];
    }


	if(isset($_GET['act']) && $_GET['act'] != "") {
		$act = $_GET['act'];
		switch ($act) {
			case 'class':
				$listca = list_ca();
				if(isset($_GET['idkh']) && ($_GET['idkh']>0)) {
					$id = $_GET['idkh'];
					//get list class
					$listclass = load_same_course($id);
					$listComment = getComment($id);

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
					echo '<script>alert("Đã đăng ký thành công. Vui lòng đăng nhập");
                                        window.location.href="signin.php";</script>';
					// echo '<script>alert("Đã đăng ký thành công. Vui lòng <a href="./signin.php"> đăng nhập </a>")</script>';
					// $thongbao = 'Đã đăng ký thành công. Vui lòng <a href="./signin.php"> đăng nhập </a> ';
					
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
					// header('location:home.php');
				break;
				case 'lopcuatoi':
					$listhoadon = load_same_hoadon($_SESSION['id_mem']);
					require_once "./lopcuatoi.php";
					// header('location:home.php');
				break;
				case 'upcom':
					if (isset($_POST['up']) && ($_POST['up'])) {
						$mem_id = $ma_us;
						$course_id = $_GET['idkh'];
						$content = $_POST['content'];
						date_default_timezone_set("Asia/Ho_Chi_Minh");
						$getDate = date("Y-m-d");
						postComment($mem_id,$content,$course_id,$getDate);
						echo '<script>alert("Bình luận thành công. Vui lòng chờ xét duyệt");
						</script>';
						header('location:./index.php?act=class&idkh='.$course_id);
						break;

						// $errer = [];
						// if (empty($password)) {
						// 	$errer['password'] = "Vui lòng nhập mật khẩu";
						// }
						// if (empty($email)) {
						// 	$errer['email'] = "Vui lòng nhập email";
						// }
						// if (empty($errer)) {
						// 	$sql = "SELECT * FROM dtb_member WHERE email='" . $email . "' ";
						// 	$data = pdo_query_one($sql);
						// 	if ($data) {
						// 		if ($password == $data['pass']) {
						// 			// $_SESSION['login'] = $data['role'];
						// 			// add_cookie('duc',serialize($data),30);
						// 			// $_SESSION['login'] = $data['role'];
						// 			$_SESSION['email'] = $data['email'];
						// 			$_SESSION['id_mem'] = $data['id'];	
						// 			header('location:index.php');
						// 		} else {
						// 			$errer['password'] = "Mật khẩu không đúng";
						// 		}
						// 	} else {
						// 		$errer['email'] = "Không tồn tại email này";
						// 	}
						// }
					} 
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
