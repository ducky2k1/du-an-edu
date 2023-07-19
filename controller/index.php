


<!DOCTYPE html>
<html lang="en">

<head>
  <title>Quản trị Admin</title>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Main CSS-->
  <link rel="stylesheet" type="text/css" href="../doc/css/main.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
  <!-- or -->
  <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
  <!-- Font-icon css-->
  <link rel="stylesheet" type="text/css"
    href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.2/jquery-confirm.min.css">

</head>

<body onload="time()" class="app sidebar-mini rtl">
<style>
    .Choicefile {
      display: block;
      background: #14142B;
      border: 1px solid #fff;
      color: #fff;
      width: 150px;
      text-align: center;
      text-decoration: none;
      cursor: pointer;
      padding: 5px 0px;
      border-radius: 5px;
      font-weight: 500;
      align-items: center;
      justify-content: center;
    }

    .Choicefile:hover {
      text-decoration: none;
      color: white;
    }

    #uploadfile,
    .removeimg {
      display: none;
    }

    #thumbbox {
      position: relative;
      width: 100%;
      margin-bottom: 20px;
    }

    .removeimg {
      height: 25px;
      position: absolute;
      background-repeat: no-repeat;
      top: 5px;
      left: 5px;
      background-size: 25px;
      width: 25px;
      /* border: 3px solid red; */
      border-radius: 50%;

    }

    .removeimg::before {
      -webkit-box-sizing: border-box;
      box-sizing: border-box;
      content: '';
      border: 1px solid red;
      background: red;
      text-align: center;
      display: block;
      margin-top: 11px;
      transform: rotate(45deg);
    }

    .removeimg::after {
      /* color: #FFF; */
      /* background-color: #DC403B; */
      content: '';
      background: red;
      border: 1px solid red;
      text-align: center;
      display: block;
      transform: rotate(-45deg);
      margin-top: -2px;
    }
  </style>
  <!-- Navbar-->
  <header class="app-header">
    <!-- Sidebar toggle button--><a class="app-sidebar__toggle" href="#" data-toggle="sidebar"
      aria-label="Hide Sidebar"></a>
    <!-- Navbar Right Menu-->
    <ul class="app-nav">


      <!-- User Menu-->
      <li><a class="app-nav__item" href="../index.html"><i class='bx bx-log-out bx-rotate-180'></i> </a>

      </li>
    </ul>
  </header>
  <!-- Sidebar menu-->
  <div class="app-sidebar__overlay" data-toggle="sidebar"></div>
  <aside class="app-sidebar">
    <div class="app-sidebar__user"><img class="app-sidebar__user-avatar" src="/images/hay.jpg" width="50px"
        alt="User Image">
      <div>
        <p class="app-sidebar__user-name"><b>ADMIN</b></p>
        <p class="app-sidebar__user-designation">Chào mừng bạn trở lại</p>
      </div>
    </div>
    <hr>
    <ul class="app-menu">
      <li><a class="app-menu__item haha" href="phan-mem-ban-hang.html"><i class='app-menu__icon bx bx-cart-alt'></i>
          <span class="app-menu__label">POS Bán Hàng</span></a></li>
      <li><a class="app-menu__item active" href="./index.php"><i class='app-menu__icon bx bx-tachometer'></i><span
            class="app-menu__label">Bảng điều khiển</span></a></li>
      <li><a class="app-menu__item " href="./index.php?act=cus"><i class='app-menu__icon bx bx-id-card'></i> <span
            class="app-menu__label">Customer</span></a></li>
      <li><a class="app-menu__item" href="./index.php?act=mem"><i class='app-menu__icon bx bx-user-voice'></i><span
            class="app-menu__label">Quản lý khách hàng</span></a></li>
      <li><a class="app-menu__item" href="./index.php?act=pro"><i
            class='app-menu__icon bx bx-purchase-tag-alt'></i><span class="app-menu__label">Quản lý Khóa học</span></a>
      </li>
      <li><a class="app-menu__item" href="./index.php?act=class"><i
            class='app-menu__icon bx bx-purchase-tag-alt'></i><span class="app-menu__label">Quản lý lớp học</span></a>
      </li>
      <li><a class="app-menu__item" href="./index.php?act=ca"><i
            class='app-menu__icon bx bx-purchase-tag-alt'></i><span class="app-menu__label">Quản lý ca học</span></a>
      </li>
      <li><a class="app-menu__item" href="./index.php?act=order"><i class='app-menu__icon bx bx-task'></i><span
            class="app-menu__label">Quản lý đơn hàng</span></a></li>
      <!-- <li><a class="app-menu__item" href="table-data-banned.html"><i class='app-menu__icon bx bx-run'></i><span
            class="app-menu__label">Quản lý nội bộ
          </span></a></li>
      <li><a class="app-menu__item" href="table-data-money.html"><i class='app-menu__icon bx bx-dollar'></i><span
            class="app-menu__label">Bảng kê lương</span></a></li>
      <li><a class="app-menu__item" href="quan-ly-bao-cao.html"><i
            class='app-menu__icon bx bx-pie-chart-alt-2'></i><span class="app-menu__label">Báo cáo doanh thu</span></a>
      </li>
      <li><a class="app-menu__item" href="page-calendar.html"><i class='app-menu__icon bx bx-calendar-check'></i><span
            class="app-menu__label">Lịch công tác </span></a></li>
      <li><a class="app-menu__item" href="#"><i class='app-menu__icon bx bx-cog'></i><span class="app-menu__label">Cài
            đặt hệ thống</span></a></li> -->
    </ul>
  </aside>
  <main class="app-content">
    <div class="row">
      <div class="col-md-12">
        <div class="app-title">
          <ul class="app-breadcrumb breadcrumb">
            <li class="breadcrumb-item"><a href="#"><b>Bảng điều khiển</b></a></li>
          </ul>
          <div id="clock"></div>
        </div>
      </div>
    </div>
  
    <?php
      require "../pdo.php";
      require "../model/product.php";
      require "../model/table.php";
      require "../model/class.php";
      require "../model/customer.php";
      require "../model/order.php";
      require "../model/ca.php";


    
    if(isset($_GET['act'])){
      $act = $_GET['act'];
      switch ($act) {
        case 'pro' :

          $list_course = product_selectAll();
          require_once "../view/table-data-product.php";
          break;
        case 'add_pro':
          if (isset($_POST['them']) && ($_POST['them'])){
            $fullname = $_POST['ten'];
            $gia = $_POST['gia'];
            $mota = $_POST['mota'];
            $errer = [];
            if (empty($fullname)) {
              $errer['ten'] = "Tên khóa học không được để trống!";
            }
            if (empty($gia)) {
              $errer['gia'] = "Giá khóa học không được để trống!";
            }
            if (empty($mota)) {
              $errer['mota'] = "Mô tả khóa học không được để trống!";
            }             
            if (empty($errer)) {
              add_pro($fullname, $gia, $mota);
              $thongbao = "Thêm thành công";
            }
          }
          require_once "../view/form-add-course.php";
          break;
        case 'del_pro':
          if (isset($_GET['id']) && ($_GET['id'] > 0)) {
            del_course($_GET['id']);
          }
          $list_course = product_selectAll();
          require_once "../view/table-data-product.php";
          break;
        case 'edit_pro':         
          if (isset($_GET['id']) && ($_GET['id'])) {
            $edit_pro = edit_pro($_GET['id']);
          }
          require_once "../view/form-update-course.php";
          break;
        case 'up_pro':
          if (isset($_POST['them']) && ($_POST['them'])){
            $ma_us=$_GET['id'];
            $fullname = $_POST['ten'];
            $gia = $_POST['gia'];
            $mota = $_POST['mota'];
            $errer = [];
            if (empty($fullname)) {
              $errer['ten'] = "Tên khóa học không được để trống!";
            }
            if (empty($gia)) {
              $errer['gia'] = "Giá khóa học không được để trống!";
            }
            if (empty($mota)) {
              $errer['mota'] = "Mô tả khóa học không được để trống!";
            }             
            if (empty($errer)) {
              up_pro($ma_us,$fullname, $gia, $mota);
              $thongbao = "Thêm thành công";
            }
          }
          $list_course = product_selectAll();
          require_once "../view/table-data-product.php";
          break;

        case 'mem':
          $list_member = member_selectAll();
          require_once "../view/table-data-table.php";
          break;
        case 'add_mem':
          if (isset($_POST['them']) && ($_POST['them'])){
            $name = $_POST['ten'];
            $mail = $_POST['email'];

            $pass = $_POST['pass'];

            $loca = $_POST['loca'];

            $phone = $_POST['num'];

            if($_FILES['img-member']) {
              $anh = $_FILES['img-member'];
            }
            

            $errer = [];

            if(empty($name)){
              $errer['ten']="Họ tên không được bỏ trống!";
            }
            if(empty($mail)){
              $errer['mail']="Email không được bỏ trống!";
            }
            if(empty($pass)){
              $errer['pass']="Mật khẩu không được bỏ trống!";
            }
            if(empty($loca)){
              $errer['loca']="Địa chỉ không được bỏ trống!";
            }
            if(empty($phone)){
              $errer['num']="Số điện thoại không được bỏ trống!";
            }
            if ($anh['size'] <= 0) {
              $errer['img-member'] = "Vui lòng chọn file ảnh";
              } else {
              $duoianh = ['jpg', 'png', 'jpeg', 'gif'];
              $duoi = pathinfo($anh['name'], PATHINFO_EXTENSION);
              if (!in_array($duoi, $duoianh)) {
                  $errer['img-member'] = "File không phải là ảnh";
              } else {
                  $img = $anh['name'];
              }
            }

            if (empty($errer)) {
              move_uploaded_file($anh['tmp_name'], '../img_upload/' . $img);
              add_mem($name, $pass, $mail, $anh['name'], $loca, $phone);
              $thongbao = "Thêm thành công";
            }

          }
          require_once "../view/form-add-member.php";
          break;
        case 'del_mem':
          if (isset($_GET['id']) && ($_GET['id'] > 0)) {
            del_mem($_GET['id']);
          }
        $data_mem = member_selectAll();
        require_once "../view/table-data-table.php";
        break;
        case 'edit_mem':

          if (isset($_GET['id']) && ($_GET['id'])) {
            $edit_mem = edit_member($_GET['id']);
          }
          require_once "../view/form-update-member.php";
          break;
        case 'up_mem':
          if (isset($_POST['capnhat']) && ($_POST['capnhat'])) {
            $ma_us=$_GET['id'];
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
              move_uploaded_file($anh_moi['tmp_name'], '../img_upload/' . $img);

              up_mem($ma_us,$name,$pass, $mail, $img, $loca, $phone);
              $thongbao = "Thêm thành công";
            }
          }
          $list_member = member_selectAll();

          require_once "../view/table-data-table.php";
          break;
        case 'cus':
          $list_customer = customer_selectAll();
          require_once "../view/table-data-customer.php";
          break;
        case 'add_cus':
          if (isset($_POST['them']) && ($_POST['them'])){
            $name = $_POST['name-nv'];
            $mail = $_POST['email-nv'];
            $loca = $_POST['location-nv'];
            $phone = $_POST['phone-nv'];

            $pass = $_POST['pass-nv'];
            $date = $_POST['date-nv'];

            if($_FILES['img-nv']) {
              $anh = $_FILES['img-nv'];
            }
            

            $errer = [];

            if(empty($name)){
              $errer['name-nv']="Họ tên không được bỏ trống!";
            }
            if(empty($mail)){
              $errer['email-nv']="Email không được bỏ trống!";
            }            
            if(empty($loca)){
              $errer['location-nv']="Địa chỉ không được bỏ trống!";
            }
            if(empty($phone)){
              $errer['phone-nv']="Số điện thoại không được bỏ trống!";
            }
            if(empty($pass)){
              $errer['pass-nv']="Mật khẩu không được bỏ trống!";
            }
            if(empty($date)){
              $errer['date-nv']="Ngày sinh không được bỏ trống!";
            }

            if ($anh['size'] <= 0) {
              $errer['img'] = "Vui lòng chọn file ảnh";
              } else {
              $duoianh = ['jpg', 'png', 'jpeg', 'gif'];
              $duoi = pathinfo($anh['name'], PATHINFO_EXTENSION);
              if (!in_array($duoi, $duoianh)) {
                  $errer['img-nv'] = "File không phải là ảnh";
              } else {
                  $img = $anh['name'];
              }
            }

            if (empty($errer)) {
              move_uploaded_file($anh['tmp_name'], '../img_customer/' . $img);
              add_cus($name, $pass, $mail, $phone, $loca,$anh['name'],$date);
              $thongbao = "Thêm thành công";
            }

          }
          require_once "../view/form-add-customer.php";
          break;
        case 'del_cus':
          if (isset($_GET['id']) && ($_GET['id'] > 0)) {
            del_cus($_GET['id']);
          }
          $list_customer = customer_selectAll();
          require_once "../view/table-data-customer.php";
          break;
        case 'edit_cus':

          if (isset($_GET['id']) && ($_GET['id'])) {
            $edit_cus = edit_customer($_GET['id']);
          }
          require_once "../view/form-update-customer.php";
          break;
        case 'up_cus':
          if (isset($_POST['capnhat']) && ($_POST['capnhat'])) {
            
            $name = $_POST['name-nv'];
            $mail = $_POST['email-nv'];
            $loca = $_POST['location-nv'];
            $phone = $_POST['phone-nv'];

            $pass = $_POST['pass-nv'];
            $date = $_POST['date-nv'];
            $anh = $_POST['img-nv'];
            $anh_moi = $_FILES['anh'];
            $errer = [];

            if(empty($name)){
              $errer['name-nv']="Họ tên không được bỏ trống!";
            }
            if(empty($mail)){
              $errer['email-nv']="Email không được bỏ trống!";
            }            
            if(empty($loca)){
              $errer['location-nv']="Địa chỉ không được bỏ trống!";
            }
            if(empty($phone)){
              $errer['phone-nv']="Số điện thoại không được bỏ trống!";
            }
            if(empty($pass)){
              $errer['pass-nv']="Mật khẩu không được bỏ trống!";
            }
            if(empty($date)){
              $errer['date-nv']="Ngày sinh không được bỏ trống!";
            }
            if ($anh_moi['size'] > 0) {
              $duoianh = ['jpg', 'png', 'jpeg', 'gif'];
              $duoi = pathinfo($anh_moi['name'], PATHINFO_EXTENSION);
              if (!in_array($duoi, $duoianh)) {
                  $errer['img-nv'] = "File không phải là ảnh";
              } else {
                  $img = $anh_moi['name'];
              }

          } else {
              $img = $anh;
          }

            if (empty($errer)) {
              move_uploaded_file($anh_moi['tmp_name'], '../img_customer/' . $img);

              up_cus($_GET['id'],$name,$pass, $mail, $img, $phone, $loca, $date);
              $thongbao = "Thêm thành công";
            }
          }
          $list_customer = customer_selectAll();

          require_once "../view/table-data-customer.php";
          break;

        case 'class':
          $list_class = class_selectAll();
          require_once "../view/table-data-class.php";
          break;
        case 'add_class':
          $list_course = product_selectAll();
          $list_ca = ca_hoc_selectAll();
          $list_gv = gv_selectAll();
          if (isset($_POST['them']) && ($_POST['them'])){
            $name = $_POST['ten'];
            $khoaHoc = $_POST['course'];
            $caHoc = $_POST['ca'];
            $giangVien = $_POST['gv'];
            $ngayHoc = $_POST['ngay'];
            $errer = [];

            if(empty($name)){
              $errer['ten']="Tên lớp học không được bỏ trống!";
            }
            if(empty($khoaHoc)){
              $errer['course']="Vui lòng chọn khóa học!";
            }            
            if(empty($caHoc)){
              $errer['ca']="Vui lòng chọn ca học!";
            }
            if(empty($giangVien)){
              $errer['gv']="Vui lòng chọn giảng viên!";
            }
            if(empty($ngayHoc)){
              $errer['ngay']="Vui lòng chọn ngày học!";
            }
            if (empty($errer)) {
              add_class($khoaHoc,$name , $giangVien,$caHoc,$ngayHoc);
              $thongbao = "Thêm thành công";
            }

          }
          require_once "../view/form-add-class.php";
          break;
          case 'del_class':
            if (isset($_GET['id']) && ($_GET['id'] > 0)) {
              del_class($_GET['id']);
            }
            $list_class = class_selectAll();
            require_once "../view/table-data-class.php";
            break;
          case 'edit_class':
              if (isset($_GET['id']) && ($_GET['id'])) {
                $edit_class = edit_class($_GET['id']);
              }
              $list_course = product_selectAll();
              $list_ca = ca_hoc_selectAll();
              $list_gv = gv_selectAll();
              require_once "../view/form-update-class.php";
            break; 
          case 'up_class':
            $list_course = product_selectAll();
            $list_ca = ca_hoc_selectAll();
            $list_gv = gv_selectAll();
            if (isset($_POST['them']) && ($_POST['them'])){
              $name = $_POST['ten'];
              $caHoc = $_POST['ca'];
              $giangVien = $_POST['gv'];
              $ngayHoc = $_POST['ngay'];
              $time = $_POST['time'];
              $ma_us=$_GET['id'];
              $errer = [];
  
              if(empty($name)){
                $errer['ten']="Tên lớp học không được bỏ trống!";
              }         
              if(empty($caHoc)){
                $errer['ca']="Vui lòng chọn ca học!";
              }
              if(empty($giangVien)){
                $errer['gv']="Vui lòng chọn giảng viên!";
              }
              if(empty($ngayHoc)){
                $errer['ngay']="Vui lòng chọn ngày học!";
              }
              if (empty($errer)) {
                up_class($ma_us,$name,$giangVien,$time,$caHoc,$ngayHoc);
                $thongbao = "Thêm thành công";
              }
  
            }
            $list_class = class_selectAll();
            require_once "../view/table-data-class.php";
            break;         
          case 'order':
            $list_order = order_selectAll();
            require_once "../view/table-data-oder.php";
            break;
          case 'del_order':            
          if (isset($_GET['id']) && ($_GET['id'] > 0)) {
            del_order($_GET['id']);
          }
          $list_order = order_selectAll();
          require_once "../view/table-data-oder.php";
          break;

        case 'ca':
          $list_ca = ca_hoc_selectAll();
          require_once "../view/table-data-ca-hoc.php";
          break;
        case 'add_ca':
          if (isset($_POST['them']) && ($_POST['them'])){
            $name = $_POST['ten'];
            $time_s = $_POST['time-start'];
            $time_e = $_POST['time-end'];
            $errer = [];            
            if(empty($name)){
              $errer['ten']="Vui lòng chọn khóa học!";
            }            
            if(empty($time_s)){
              $errer['time-start']="Vui lòng chọn thời gian bắt đầu!";
            }
            if(empty($time_e)){
              $errer['time-end']="Vui lòng chọn thời gian kết thúc!";
            }
            if (empty($errer)) {
              add_ca($name,$time_s,$time_e);
              $thongbao = "Thêm thành công";
            }

          }
          require_once "../view/form-add-ca.php";
          break;
        case 'del_ca':
          if (isset($_GET['id']) && ($_GET['id'] > 0)) {
            del_ca($_GET['id']);
          }
          $list_ca = ca_hoc_selectAll();
          require_once "../view/table-data-ca-hoc.php";
          break;
        case 'edit_ca':

            if (isset($_GET['id']) && ($_GET['id'])) {
              $edit_ca = edit_ca($_GET['id']);
            }
            require_once "../view/form-update-ca.php";
            break;
        case 'up_ca':
            if (isset($_POST['them']) && ($_POST['them'])){
              $name = $_POST['ten'];
              $time_s = $_POST['time-start'];
              $time_e = $_POST['time-end'];
              $ma_us=$_GET['id'];

              $errer = [];            
            if(empty($name)){
              $errer['ten']="Vui lòng chọn khóa học!";
            }            
            if(empty($time_s)){
              $errer['time-start']="Vui lòng chọn thời gian bắt đầu!";
            }
            if(empty($time_e)){
              $errer['time-end']="Vui lòng chọn thời gian kết thúc!";
            }
            if (empty($errer)) {
              up_ca($ma_us,$name,$time_s,$time_e);
              $thongbao = "Sửa thành công";
            }
              }
              $list_ca = ca_hoc_selectAll();
              require_once "../view/table-data-ca-hoc.php";
              break;


    }
  }else {
      require_once "../doc/footer.php";
  }



    