<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    .p-10 {
        padding: 10px;
    }
</style>

<body>


    <section class="vh-100" style="background-color: #eee;">
        <div class="p-10 col-md-10 col-lg-6 col-xl-7 d-flex align-items-center order-1 order-lg-2">
            <a href="index.php"><img src="images/logo.png" class="" alt=""></a>
        </div>
        <div class="container h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-lg-12 col-xl-11">
                    <div class="card text-black" style="border-radius: 25px;">
                        <div class="card-body p-md-5">
                            <div class="row justify-content-center">
                                <div class="col-md-10 col-lg-6 col-xl-5 order-2 order-lg-1">

                                    <p class="text-center h1 fw-bold mb-5 mx-1 mx-md-4 mt-4">Sign In</p>

                                    <form class="mx-1 mx-md-4" action="./index.php?act=dangky" method="post">

                                        <div class="d-flex flex-row align-items-center mb-4">
                                            <div class="form-outline flex-fill mb-0">
                                                <label class="form-label" for="form3Example1c">Họ và tên </label>
                                                <input type="text" id="form3Example1c" class="form-control" name="name" />
                                            </div>
                                        </div>

                                        <div class="d-flex flex-row align-items-center mb-4">
                                            <div class="form-outline flex-fill mb-0">
                                                <label class="form-label" for="form3Example3c"> Email</label>
                                                <input type="email" id="form3Example3c" class="form-control" name="email" />
                                            </div>
                                        </div>

                                        <div class="d-flex flex-row align-items-center mb-4">
                                            <div class="form-outline flex-fill mb-0">
                                                <label class="form-label" for="form3Example4c">Password</label>
                                                <input type="password" id="form3Example4c" class="form-control" name="pass" />
                                            </div>
                                        </div>

                                        <div class="d-flex flex-row align-items-center mb-4">
                                            <div class="form-outline flex-fill mb-0">
                                                <label class="form-label" for="form3Example4cd">Repeat your
                                                        password</label>
                                                <input type="password" id="form3Example4cd" class="form-control" name="repass" />
                                            </div>
                                        </div>



                                        <div class="d-flex justify-content-center mx-4 mb-3 mb-lg-4">
                                            <input type="submit" class="btn btn-primary btn-lg" value="Đăng ký" name="dangky">
                                        </div>

                                    </form>
                                    <h2 class="thongbao">
                                        <?php
                                            if(isset($thongbao) && ($thongbao!="")) {
                                                echo $thongbao;
                                            }
                                            
                                        ?>
                                    </h2>

                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <link href="css/bootstrap.min.css" rel="stylesheet">
</body>

</html>