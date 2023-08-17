<?php
	session_start();
    require "./model/pdo.php";
	include "./model/course.php";
	include "./model/class.php";
	include "./model/taikhoan.php";
    require "./model/cart.php";
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
        case 'buy':
            if (isset($_SESSION['email'])) {
                if(isset($info)&&($info)){
                    if(($info['image'] == '') || ($info['location'] == '') || ($info['phone'] == '0')){
                        echo '<script>alert("Bạn phải cập nhật thông tin.")</script>';
                        require_once "./fi.php";
                    } else {
                    require "./cart.php";
                    }             
                } } else{
                    echo '<script>
                    if(confirm("Bạn phải đăng nhập để đăng kí khóa học") == true){
                        window.location.href="signin.php";
                    }else{
                        window.location.href="index.php";
                    } </script> ';
                }
        break;
        case 'payment':
            
            if(isset($_POST['pay']) && ($_POST['pay'])){
                $vnp_Url = "https://sandbox.vnpayment.vn/paymentv2/vpcpay.html";
                        $vnp_Returnurl = "http://localhost/du-an-edu/kodesolution.com/html/2022/edulerns-html/thank.php";
                        $vnp_TmnCode = "LZD9B10K";//Mã website tại VNPAY 
                        $vnp_HashSecret = "JPJXJNQVZJOROQJMZHJNENDTQVFICYUM"; //Chuỗi bí mật
                        
                        $vnp_TxnRef = rand(00,9999); //Mã đơn hàng. Trong thực tế Merchant cần insert đơn hàng vào DB và gửi mã này sang VNPAY
                        $vnp_OrderInfo = 'Noi dung thanh toan';
                        $vnp_OrderType = 'billpayment';
                        $vnp_Amount = $_SESSION['sumAll'] * 100;
                        $vnp_Locale = 'vn';
                        $vnp_BankCode = 'VNPAY';
                        $vnp_IpAddr = $_SERVER['REMOTE_ADDR'];
                        //Add Params of 2.0.1 Version
                        $vnp_ExpireDate = '20230927143043';

                        $inputData = array(
                            "vnp_Version" => "2.1.0",
                            "vnp_TmnCode" => $vnp_TmnCode,
                            "vnp_Amount" => $vnp_Amount,
                            "vnp_Command" => "pay",
                            "vnp_CreateDate" => date('YmdHis'),
                            "vnp_CurrCode" => "VND",
                            "vnp_IpAddr" => $vnp_IpAddr,
                            "vnp_Locale" => $vnp_Locale,
                            "vnp_OrderInfo" => $vnp_OrderInfo,
                            "vnp_OrderType" => $vnp_OrderType,
                            "vnp_ReturnUrl" => $vnp_Returnurl,
                            "vnp_TxnRef" => $vnp_TxnRef,
                            "vnp_ExpireDate"=>$vnp_ExpireDate
                        );
                        
                        if (isset($vnp_BankCode) && $vnp_BankCode != "") {
                            $inputData['vnp_BankCode'] = $vnp_BankCode;
                        }
                        ksort($inputData);
                        $query = "";
                        $i = 0;
                        $hashdata = "";
                        foreach ($inputData as $key => $value) {
                            if ($i == 1) {
                                $hashdata .= '&' . urlencode($key) . "=" . urlencode($value);
                            } else {
                                $hashdata .= urlencode($key) . "=" . urlencode($value);
                                $i = 1;
                            }
                            $query .= urlencode($key) . "=" . urlencode($value) . '&';
                        }
                        
                        $vnp_Url = $vnp_Url . "?" . $query;
                        if (isset($vnp_HashSecret)) {
                            $vnpSecureHash =   hash_hmac('sha512', $hashdata, $vnp_HashSecret);//  
                            $vnp_Url .= 'vnp_SecureHash=' . $vnpSecureHash;
                        }
                        $returnData = array('code' => '00'
                            , 'message' => 'success'
                            , 'data' => $vnp_Url);
                            if (isset($_POST['pay'])) {
                                header('Location: ' . $vnp_Url);
                                die();
                            } else {
                                echo json_encode($returnData);
                            }
            }
            else if(isset($_POST['pay-center']) && ($_POST['pay-center'])) {
                $hinhthuc = 'Thanh toán tại trung tâm';
                $status = 'Chưa thanh toán';
                $dateTime = new DateTime();
                $currentDateTime = $dateTime->format("Y-m-d H:i:s");
                set_hoadon($_SESSION['id_mem'], $_SESSION['id_class'], $_SESSION['price-class'], NULL, $currentDateTime, NULL, $status, $hinhthuc );
                echo '<script>alert("Thành công! Vui lòng đến trung tâm để thanh toán!")</script>';
                echo '<script>window.location.href="index.php";</script>';            }
            break;
        case 'up_mem':
            if (isset($_POST['capnhat']) && ($_POST['capnhat'])) {
                $ma_us=$info['id'];
                $name = $_POST['ten'];
                $day = $_POST['day'];
                $mail = $_POST['email'];
                $loca = $_POST['loca'];
                $phone = $_POST['num'];
                $pass = $_POST['pass'];
                $anh = $_POST['img-member'];
                if($_FILES['anh']) {
                    $anh_moi = $_FILES['anh'];
                }
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
                    $imgCopy = './img_upload/'.$img;
                    $imgPaste = '../../../../../QUANLYNHANVIEN VER.2/img_upload/';
                    // copy($imgCopy,$imgPaste.basename($imgCopy));
                    up_mem($ma_us,$name,$pass, $mail, $img, $loca, $phone,$day);
                    $thongbao = "Thêm thành công";
                    echo '<script>alert("Cập nhật thành công")</script>';
                    echo '<script>window.location.href="index.php"</script>';;
                }
                }
                break;
                case 'info':
                    include "./fi.php";
                    break;
                case 'del_order':
                    if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                        del_hoa_don($_GET['id']);
                    }
                    $listhoadon = loadall_hoadon_member($_SESSION['id_mem']);
					require "./hoadon.php";
                break;
    default:
            include "home.php";
            break;
    } 
} else {
    include "home.php";
}
?>