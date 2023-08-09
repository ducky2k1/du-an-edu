<?php 
        session_start();
      require "../pdo.php";


        if (isset($_SESSION['login'])) {        
          $email=$_SESSION['email'];
          $sql="SELECT * from dtb_customer where email='$email'";
          $info=pdo_query_one($sql);
          $ma_us=$info['id'];
          }
?>
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
  <script src="https://www.gstatic.com/charts/loader.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js"></script>
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
      <li><a class="app-nav__item" href="../login.php?act=dx"><i class='bx bx-log-out bx-rotate-180'></i> </a>

      </li>
    </ul>
  </header>
  <!-- Sidebar menu-->
  <div class="app-sidebar__overlay" data-toggle="sidebar"></div>
  <aside class="app-sidebar">
    <div class="app-sidebar__user"><img class="app-sidebar__user-avatar" src="../img_customer/<?php if(isset($info)&&($info)){
              echo $info['image'];
          }  ?>" width="50px"
        alt="User Image">
      <div>
        <p class="app-sidebar__user-name"><b>
          <?php if(isset($info)&&($info)){
              echo $info['name'];
          } ?>
        </b></p>
        <p class="app-sidebar__user-designation">Chào mừng bạn trở lại</p>
      </div>
    </div>
    <hr>
    <ul class="app-menu">
      <!-- <li><a class="app-menu__item haha" href="phan-mem-ban-hang.html"><i class='app-menu__icon bx bx-cart-alt'></i>
          <span class="app-menu__label">POS Bán Hàng</span></a></li> -->
      <?php if(isset($info)&&($info)){ ?>
        <?php if($info['role']=='admin' ){ ?>
          <li><a class="app-menu__item active" href="./index.php"><i class='app-menu__icon bx bx-tachometer'></i><span
          class="app-menu__label">Bảng điều khiển</span></a></li>
          <li><a class="app-menu__item " href="./index.php?act=cus"><i class='app-menu__icon bx bx-id-card'></i> <span
          class="app-menu__label">Customer</span></a></li>
          <li><a class="app-menu__item" href="./index.php?act=mem"><i class='app-menu__icon bx bx-user-voice'></i><span
                class="app-menu__label">Quản lý khách hàng</span></a></li>
          <li><a class="app-menu__item" href="./index.php?act=comment"><i class="app-menu__icon  far fa-comment-dots"></i><span
                class="app-menu__label">Quản lý bình luận</span></a></li>
          <li><a class="app-menu__item" href="./index.php?act=pro"><i
                class='app-menu__icon fas fa-school'></i><span class="app-menu__label">Quản lý Khóa học</span></a>
          </li>
          <li><a class="app-menu__item" href="./index.php?act=class"><i
                class='app-menu__icon bx bx-purchase-tag-alt'></i><span class="app-menu__label">Quản lý lớp học</span></a>
          </li>
          <li><a class="app-menu__item" href="./index.php?act=ca"><i
                class='app-menu__icon bx bx-purchase-tag-alt'></i><span class="app-menu__label">Quản lý ca học</span></a>
          </li>
          <li><a class="app-menu__item" href="./index.php?act=order"><i class='app-menu__icon bx bx-task'></i>
          <span
                class="app-menu__label">Quản lý đơn hàng</span></a>
          </li>
          <li><a class="app-menu__item" href="./index.php?act=dt"><i
                class='app-menu__icon bx bx-pie-chart-alt-2'></i><span class="app-menu__label">Báo cáo doanh thu</span></a>
          </li>
        <?php } else { ?>
          <li><a class="app-menu__item active" href="./index.php"><i class='app-menu__icon bx bx-tachometer'></i><span
          class="app-menu__label">Bảng điều khiển</span></a></li>
          <li><a class="app-menu__item" href="./index.php?act=teacher"><i
                class='app-menu__icon bx bx-purchase-tag-alt'></i><span class="app-menu__label">My profile</span></a>
          </li> 
          <li><a class="app-menu__item" href="./index.php?act=class_teacher&id=<?php echo $ma_us ?>"><i
                class='app-menu__icon bx bx-purchase-tag-alt'></i><span class="app-menu__label">Lớp học của tôi</span></a>
          </li>
          <li><a class="app-menu__item" href="./index.php?act=library&id=<?php echo $ma_us ?>"><i
                class='app-menu__icon bx bx-purchase-tag-alt'></i><span class="app-menu__label">Lịch dạy học</span></a>
          </li>
        <?php } ?>


      <?php    } ?>

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