<?php
// $db_con=mysqli_connect("localhost","root","","demo_academy");
session_start();ob_start();
include("./model/pdo.php");
if(isset($_SESSION['user_id'])) echo "<script>alert('Đã đăng nhập');window.location.href='./index.php'</script>";
else if(isset($_POST['submit']) && isset($_POST['username']) &&isset($_POST['password']) && isset($_POST['RePassword'])){
     $pass=$_POST['password'];
     $Rpass=$_POST['RePassword'];
     $username=$_POST['username'];
     $row=mysqli_fetch_array(mysqli_query($db_con,"SELECT * FROM dtb_member WHERE pass='$pass' and email='$username'"));
     if($pass!=$Rpass){echo "<script>alert('Mật khẩu không khớp')</script>";}
     else if(!$row){echo "<script>alert('Sai email hoặc pass')</script>";
     }
     else{
          $_SESSION['user_id']=$row['id'];
          echo "<script>alert('Login thành công');window.location.href='./index.php'</script>";
     }

}
?>
<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <link href="./css/bootstrap.min.css" rel=" stylesheet">

</head>

<body>
    <section class="vh-100" style="background-color: #eee;">
        <div class="container h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-lg-12 col-xl-11">
                    <div class="card text-black" style="border-radius: 25px;">
                        <div class="card-body p-md-5">
                            <div class="row justify-content-center">
                                <div class="col-md-10 col-lg-6 col-xl-5 order-2 order-lg-1">

                                    <p class="text-center h1 fw-bold mb-5 mx-1 mx-md-4 mt-4">Sign In</p>

                                    <form class="mx-1 mx-md-4" action="" method="post">

                                        <div class="d-flex flex-row align-items-center mb-4">
                                            <i class="fas fa-user fa-lg me-3 fa-fw"></i>
                                            <div class="form-outline flex-fill mb-0">
                                                <input type="text" id="form3Example1c" class="form-control"
                                                    name="username" type="text" type="email">
                                                <label class="form-label" for="form3Example1c"> Email</label>
                                            </div>
                                        </div>



                                        <div class="d-flex flex-row align-items-center mb-4">
                                            <i class="fas fa-lock fa-lg me-3 fa-fw"></i>
                                            <div class="form-outline flex-fill mb-0">
                                                <input type="password" id="form3Example4c" class="form-control"
                                                    name="password" minlength="6">
                                                <label class="form-label" for="form3Example4c">Password</label>
                                            </div>
                                        </div>

                                        <div class="d-flex flex-row align-items-center mb-4">
                                            <i class="fas fa-key fa-lg me-3 fa-fw"></i>
                                            <div class="form-outline flex-fill mb-0">
                                                <input type="password" id="form3Example4cd" class="form-control"
                                                    name="RePassword" minlength="6">
                                                <label class="form-label" for="form3Example4cd">Repeat your
                                                    password</label>
                                            </div>
                                        </div>



                                        <div class="d-flex justify-content-center mx-4 mb-3 mb-lg-4">
                                            <button type="submit" name="submit" class="btn btn-primary btn-lg">Sign
                                                In</button>
                                        </div>

                                    </form>

                                </div>
                                <div class="col-md-10 col-lg-6 col-xl-7 d-flex align-items-center order-1 order-lg-2">

                                    <img src="./index_files/draw1.webp" class="img-fluid" alt="Sample image">

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

</body>

</html>