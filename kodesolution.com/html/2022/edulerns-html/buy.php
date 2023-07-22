<?php
	session_start();
    require "./model/pdo.php";
	include "./model/course.php";
	include "./model/class.php";
	include "./model/taikhoan.php";

    if (isset($_SESSION['email'])) {
        $email=$_SESSION['email'];
        $sql="SELECT * from dtb_member where email='$email'";
        $info=pdo_query_one($sql);
        $ma_us=$info['id'];
    }
if(isset($_GET['act']) && $_GET['act'] != "") {
    $act = $_GET['act'];
    switch ($act) {
        case 'buy':
            if (isset($_SESSION['email'])) {
                if(isset($info)&&($info)){
                    $err=[];
                    if(($info['image'] == '') || ($info['location'] == '') || ($info['phone'] == '0')){
                        // $err['image']="Thiếu ảnh";
                        echo '<script>alert("Bạn phải cập nhật thông tin.")</script>';
                        require_once "./fi.php";

                    } else {
                        echo '<script>alert("Mua hàng thành công")</script>';

                        echo '<script>window.location.href="index.php"</script>';


                        // header("location:./home.php");
                    }


                }
                // header("location: ./fi.php");
                // require_once "./fi.php";
                // echo '<script>window.location.href="fi.php"</script>';
            } else {
				// confirm("Bạn phải đăng nhập trước khi đăng kí khóa học");
                // echo '<script>confirm("Bạn phải đăng nhập trước khi đăng kí khóa học")</script>';
                echo '<script>
                


                    if(confirm("Bạn phải đăng nhập để đăng kí khóa học") == true){
                        window.location.href="signin.php";
                    }else{
                        window.location.href="index.php";
                    } </script>
                ';

                // header("Location: signin.php");
                // include "./signin.php";
                // if (isset($_SESSION['email'])){
                // require_once "./page-course-details.php";
                // }
                // echo '<script>window.location.href="signin.php"</script>';
            }
        case 'up_mem':
            if (isset($_POST['capnhat']) && ($_POST['capnhat'])) {
                $ma_us=$info['id'];

                $name = $_POST['ten'];
                $mail = $_POST['email'];
                $loca = $_POST['loca'];
                $phone = $_POST['num'];
    
                $pass = $_POST['pass'];
                $anh = $_POST['img-member'];
                $anh_moi = $_FILES['anh'];
                $errer = [];

    
                if(empty($name)){

                    $errer['ten']="Họ tên không được bỏ trống!";
                }
                if(empty($mail)){
                    $errer['email']="Email không được bỏ trống!";
                }            
                if(empty($loca)){

                    $errer['loca']="Địa chỉ không được bỏ trống!";
                }
                if(empty($phone)){
                    $errer['num']="Số điện thoại không được bỏ trống!";
                }
                if(empty($pass)){
                    $errer['pass']="Mật khẩu không được bỏ trống!";
                }
                if ($anh_moi['size'] > 0) {
                    $duoianh = ['jpg', 'png', 'jpeg', 'gif'];
                    $duoi = pathinfo($anh_moi['name'], PATHINFO_EXTENSION);
                    if (!in_array($duoi, $duoianh)) {
                        $errer['img-member'] = "File không phải là ảnh";
                    } else {
                        $img = $anh_moi['name'];
                    }
    
                } else {
                    $img = $anh;
                }
    
                if (empty($errer)) {
                    move_uploaded_file($anh_moi['tmp_name'], './img_upload/' . $img);

    
                    up_mem($ma_us,$name,$pass, $mail, $img, $loca, $phone);
                    $thongbao = "Thêm thành công";

                    echo '<script>alert("Cập nhật thành công")</script>';

                    echo '<script>window.location.href="index.php"</script>';;
                }
                }
                break;
        case 'info':
            include "./fi.php";
            break;
    default:
            include "home.php";
            break;
    } 
} else {
    include "home.php";
}
?>