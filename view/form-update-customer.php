
<main class="">
    <div class="app-title">
        <ul class="app-breadcrumb breadcrumb">
            <li class="breadcrumb-item">Danh sách nhân viên</li>
            <li class="breadcrumb-item"><a href="#">Cập nhật thông tin nhân viên</a></li>
        </ul>
        </div>
        <div class="app-title">
        <h5 class=""><?php if (isset($thongbao) && ($thongbao != ""))  {
                                                                                    echo $thongbao;
                                                                                } else {
                                                                                    echo "Đang cập nhật thông tin nhân viên";
                                                                                } ?></h5>
        </div>
        <div class="row">
            <div class="col-md-12">

            <div class="tile">

                <h3 class="tile-title">Cập nhật thông tin nhân viên</h3>
                <div class="tile-body">
                    <form class="row" action="../controller/index.php?act=up_cus&id=<?php extract($edit_cus); echo $id ?>" method="post" enctype="multipart/form-data">
                        <div class="form-group col-md-4">
                            <label class="control-label">ID nhân viên</label>
                            <input class="form-control" type="text" name="id-nv" readonly value="<?php extract($edit_cus); echo $id ?>">
                        </div>
                        <div class="form-group col-md-4">
                            <label class="control-label">Họ và tên</label>
                            <input class="form-control" type="text" name="name-nv" 
                                            value="<?php if (isset($_POST['capnhat']) && ($_POST['capnhat'])) {
                                                echo $_POST['name-nv'];
                                            } else {
                                                extract($edit_cus); echo $name;
                                            } ?>">
                            <span class="" style="color:red;"><?= $errer['name-nv'] ?? "" ?></span>
                        </div>
                        <div class="form-group col-md-4">
                            <label class="control-label">Địa chỉ email</label>
                            <input class="form-control" type="text" name="email-nv" 
                                            value="<?php if (isset($_POST['capnhat']) && ($_POST['capnhat'])) {
                                                echo $_POST['email-nv'];
                                            } else {
                                                extract($edit_cus); echo $email;
                                            } ?>">
                            <span class="" style="color:red;"><?= $errer['email-nv'] ?? "" ?></span>
                        </div>
                        <div class="form-group col-md-4">
                            <label class="control-label">Địa chỉ thường trú</label>
                            <input class="form-control" type="text" name="location-nv"
                                            value="<?php if (isset($_POST['capnhat']) && ($_POST['capnhat'])) {
                                                echo $_POST['location-nv'];
                                            } else {
                                                extract($edit_cus); echo $location;
                                            } ?>">
                            <span class="" style="color:red;"><?= $errer['location-nv'] ?? "" ?></span>
                        </div>
                        <div class="form-group  col-md-4">
                            <label class="control-label">Số điện thoại</label>
                            <input class="form-control" type="number" name="phone-nv"
                                            value="<?php if (isset($_POST['capnhat']) && ($_POST['capnhat'])) {
                                                echo $_POST['phone-nv'];
                                            } else {
                                                extract($edit_cus); echo $phone;
                                            } ?>">
                            <span class="" style="color:red;"><?= $errer['phone-nv'] ?? "" ?></span>
                        </div>
                        <div class="form-group  col-md-4">
                            <label class="control-label">Mật khẩu</label>
                            <input class="form-control" type="text" name="pass-nv"
                                            value="<?php if (isset($_POST['capnhat']) && ($_POST['capnhat'])) {
                                                echo $_POST['pass-nv'];
                                            } else {
                                                extract($edit_cus); echo $pass;
                                            } ?>">
                            <span class="" style="color:red;"><?= $errer['pass-nv'] ?? "" ?></span>
                        </div>
                        <div class="form-group col-md-4">
                            <label class="control-label">Ngày sinh</label>
                            <input class="form-control" type="date" name="date-nv"
                                            value="<?php if (isset($_POST['capnhat']) && ($_POST['capnhat'])) {
                                                echo $_POST['date-nv'];
                                            } else {
                                                extract($edit_cus); echo $birth_day;
                                            } ?>">
                            <span class="" style="color:red;"><?= $errer['date-nv'] ?? "" ?></span>
                        </div>

                        <div class="form-group col-md-12">
                            <label class="control-label">Ảnh 3x4 nhân viên</label>
                            <br>
                            <img src="../img_customer/<?php if (isset($_POST['capnhat']) && ($_POST['capnhat'])) {
                                        echo $_POST['img-nv'];
                                    } else {
                                        extract($edit_cus); echo $image;
                                    } ?>" alt="" class="" style="width:50px;height:50px;">
                            <input type="hidden" name="img-nv" 
                                            value="<?php if (isset($_POST['capnhat']) && ($_POST['capnhat'])) {
                                                        echo $_POST['img-nv'];
                                                    } else {
                                                        extract($edit_cus); echo $image;
                                                    } ?>"/>
                            <input type="file" name="anh">
                            <span class="" style="color:red;"><?= $errer['img-nv'] ?? "" ?></span>
                        </div>
                        <input type="submit" name="capnhat" value="Cập nhật" class="btn btn-save">
                        <a class="btn btn-cancel" href="../controller/index.php?act=cus">Hủy bỏ</a>
                    </form>


                </div>
            </div>
        </div>
    </div>
</main>



    <!-- Essential javascripts for application to work-->
    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
    <!-- The javascript plugin to display page loading on top-->
    <script src="js/plugins/pace.min.js"></script>

</body>

</html>