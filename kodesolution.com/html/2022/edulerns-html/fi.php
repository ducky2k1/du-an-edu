        <div class="p-10 col-md-10 col-lg-6 col-xl-7 d-flex align-items-center order-1 order-lg-2">
            <a href="index.php"><img src="images/logo.png" class="" alt=""></a>
        </div>
        <div class="row">
            <div class="col-md-12">

            <div class="tile">

                <h3 class="text-center h1 fw-bold mb-5 mx-1 mx-md-4 mt-4">Cập nhật thông tin khách hàng</h3>
                <div class="tile-body">
                    <form class="mx-1 mx-md-4"action="./buy.php?act=up_mem" method="post" enctype="multipart/form-data">
                        <div class="d-flex flex-row align-items-center mb-4">
                            <div class="form-outline flex-fill mb-0">
                                <label class="control-label">Mã khách hàng</label>
                                <input class="form-control" type="text" name="ten" readonly value="<?php echo $ma_us?>">
                            </div>
                        </div>
                        <div class="d-flex flex-row align-items-center mb-4">
                            <div class="form-outline flex-fill mb-0">
                                <label class="control-label">Họ và tên</label>
                                    <input class="form-control" type="text" name="ten" 
                                                    value="<?php if (isset($_POST['capnhat']) && ($_POST['capnhat'])) {
                                                        echo $_POST['ten'];
                                                    } else {
                                                        echo $info['name'];
                                                    } ?>">
                                    <span class="" style="color:red;"><?= $errer['ten'] ?? "" ?></span>
                            </div>
                        </div>
                        <div class="d-flex flex-row align-items-center mb-4">
                            <div class="form-outline flex-fill mb-0">
                                <label class="control-label">Địa chỉ email</label>
                                <input class="form-control" type="text" name="email" 
                                                value="<?php if (isset($_POST['capnhat']) && ($_POST['capnhat'])) {
                                                    echo $_POST['email'];
                                                } else {
                                                    echo $info['email'];
                                                } ?>">
                                <span class="" style="color:red;"><?= $errer['email'] ?? "" ?></span>
                            </div>
                        </div>
                        <div class="d-flex flex-row align-items-center mb-4">
                            <div class="form-outline flex-fill mb-0">
                                <label class="control-label">Địa chỉ thường trú</label>
                                <input class="form-control" type="text" name="loca"
                                                value="<?php if (isset($_POST['capnhat']) && ($_POST['capnhat'])) {
                                                    echo $_POST['loca'];
                                                } else {
                                                    echo $info['location'];

                                                } ?>">
                                <span class="" style="color:red;"><?= $errer['loca'] ?? "" ?></span>
                            </div>
                        </div>
                        <div class="d-flex flex-row align-items-center mb-4">
                            <div class="form-outline flex-fill mb-0">
                            <label class="control-label">Số điện thoại</label>
                            <input class="form-control" type="number" name="num"
                                            value="<?php if (isset($_POST['capnhat']) && ($_POST['capnhat'])) {
                                                echo $_POST['phone-nv'];
                                            } else {
                                                echo $info['phone'];

                                            } ?>">
                            <span class="" style="color:red;"><?= $errer['num'] ?? "" ?></span>
                        </div>
                        </div>
                        <div class="d-flex flex-row align-items-center mb-4">
                            <div class="form-outline flex-fill mb-0">
                            <label class="control-label">Mật khẩu</label>
                            <input class="form-control" type="text" name="pass"
                                            value="<?php if (isset($_POST['capnhat']) && ($_POST['capnhat'])) {
                                                echo $_POST['pass'];
                                            } else {
                                                echo $info['pass'];

                                            } ?>">
                            <span class="" style="color:red;"><?= $errer['pass'] ?? "" ?></span>
                        </div>
                        </div>
                        <div class="d-flex flex-row align-items-center mb-4">
                            <div class="form-outline flex-fill mb-0">
                                <label class="control-label">Ảnh 3x4 nhân viên</label>
                                <br>
                                <img src="./img_upload/<?php if (isset($_POST['capnhat']) && ($_POST['capnhat'])) {
                                            echo $_POST['img-member'];
                                        } else {
                                            echo $info['image'];

                                        } ?>" alt="" class="" style="width:50px;height:50px;">
                                <input type="hidden" name="img-member" 
                                                value="<?php if (isset($_POST['capnhat']) && ($_POST['capnhat'])) {
                                                            echo $_POST['img-member'];
                                                        } else {
                                                            echo $info['image'];

                                                        } ?>"/>
                                <input type="file" name="anh">
                                <span class="" style="color:red;"><?= $errer['img-member'] ?? "" ?></span>
                            </div>
                        </div>
                        <div class="d-flex justify-content-center mx-4 mb-3 mb-lg-4">
                            <input type="submit" name="capnhat" value="Cập nhật" class="btn btn-primary btn-lg">
                        </div>
                        <!-- <a class="btn btn-cancel" href="../controller/index.php?act=mem">Hủy bỏ</a> -->
                    </form>


                </div>
            </div>
        </div>
        <link href="css/bootstrap.min.css" rel="stylesheet">

