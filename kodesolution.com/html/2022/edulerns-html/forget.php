








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

                                    <p class="text-center h1 fw-bold mb-5 mx-1 mx-md-4 mt-4">Quên mật khẩu</p>

                                    <form class="mx-1 mx-md-4" action="./index.php?act=qmk" method="post">

                                        <div class="d-flex flex-row align-items-center mb-4">
                                            <i class="fas fa-user fa-lg me-3 fa-fw"></i>
                                            <div class="form-outline flex-fill mb-0">
                                                <!-- <input type="text" id="form3Example1c" class="form-control" name="email" /> -->
                                                <label class="form-label" for="form3Example1c" > Email</label>
                                                <input type="text" name="email" value="<?= $_POST['email'] ?? "" ?>" id="form3Example1c" class="form-control">
                                                <span style="color: red;"><?= $errer['email'] ?? "" ?></span>
                                                <?php if (isset($password)) {
                                                        echo  '
                                                        <label class="form-label" for="form3Example1c" >Mật khẩu của bạn là</label>
                                                        <input type="text" name="email" value="'.$password.'" id="form3Example1c" class="form-control" readonly>
                                                        ';
                                                    } ?>
                                            </div>
                                        </div>
                                        <div class="d-flex justify-content-center mx-4 mb-3 mb-lg-4">
                                            <input type="submit" name="lay_lai" value="Lấy mật khẩu" class="btn btn-primary btn-lg" >
                                        </div>
                                        <div class="d-flex justify-content-center mx-4 mb-3 mb-lg-4">
                                            <a href="./index.php?act=dn" class="btn btn-primary btn-lg" style="margin-right:15px;">Đăng nhập</a>
									        <a href="./index.php?act=dangky" class="btn btn-primary btn-lg">Đăng ký</a>
                                        </div>
                                    </form>

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