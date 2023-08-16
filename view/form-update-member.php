
<main class="">
    <div class="app-title">
        <ul class="app-breadcrumb breadcrumb">
            <li class="breadcrumb-item">Danh sách khách hàng</li>
            <li class="breadcrumb-item"><a href="#">Cập nhật thông tin khách hàng</a></li>
        </ul>
        </div>
        <div class="app-title">
        <h5 class=""><?php if (isset($thongbao) && ($thongbao != ""))  {
                                                                                    echo $thongbao;
                                                                                } else {
                                                                                    echo "Đang cập nhật thông tin khách hàng";
                                                                                } ?></h5>
        </div>
        <div class="row">
            <div class="col-md-12">

            <div class="tile">

                <h3 class="tile-title">Cập nhật thông tin khách hàng</h3>
                <div class="tile-body">
                    <form class="row" action="../controller/index.php?act=up_mem&id=<?php extract($edit_mem); echo $id ?>" method="post" enctype="multipart/form-data">
                        <div class="form-group col-md-4">
                            <label class="control-label">Mã khách hàng</label>
                            <input class="form-control" type="text" name="ten" readonly value="<?php extract($edit_mem); echo $id ?>">
                        </div>
                        <div class="form-group col-md-4">
                            <label class="control-label">Họ và tên</label>
                            <input class="form-control" type="text" name="ten" 
                                            value="<?php if (isset($_POST['capnhat']) && ($_POST['capnhat'])) {
                                                echo $_POST['ten'];
                                            } else {
                                                extract($edit_mem); echo $name;
                                            } ?>">
                            <span class="" style="color:red;"><?= $errer['ten'] ?? "" ?></span>
                        </div>
                        <div class="form-group col-md-4">
                            <label class="control-label">Ngày sinh</label>
                            <input class="form-control" type="date" name="day" 
                                            value="<?php if (isset($_POST['capnhat']) && ($_POST['capnhat'])) {
                                                echo $_POST['day'];
                                            } else {
                                                extract($edit_mem); echo $birth_day;
                                            } ?>">
                            <span class="" style="color:red;"><?= $errer['ten'] ?? "" ?></span>
                        </div>
                        <div class="form-group col-md-4">
                            <label class="control-label">Địa chỉ email</label>
                            <input class="form-control" type="text" name="email" 
                                            value="<?php if (isset($_POST['capnhat']) && ($_POST['capnhat'])) {
                                                echo $_POST['email'];
                                            } else {
                                                extract($edit_mem); echo $email;
                                            } ?>">
                            <span class="" style="color:red;"><?= $errer['email'] ?? "" ?></span>
                        </div>
                        <div class="form-group col-md-4">
                            <label class="control-label">Địa chỉ thường trú</label>
                            <input class="form-control" type="text" name="loca"
                                            value="<?php if (isset($_POST['capnhat']) && ($_POST['capnhat'])) {
                                                echo $_POST['loca'];
                                            } else {
                                                extract($edit_mem); echo $location;
                                            } ?>">
                            <span class="" style="color:red;"><?= $errer['loca'] ?? "" ?></span>
                        </div>
                        <div class="form-group  col-md-4">
                            <label class="control-label">Số điện thoại</label>
                            <input class="form-control" type="number" name="num"
                                            value="<?php if (isset($_POST['capnhat']) && ($_POST['capnhat'])) {
                                                echo $_POST['phone-nv'];
                                            } else {
                                                extract($edit_mem); echo $phone;
                                            } ?>">
                            <span class="" style="color:red;"><?= $errer['num'] ?? "" ?></span>
                        </div>
                        <div class="form-group  col-md-4">
                            <label class="control-label">Mật khẩu</label>
                            <input class="form-control" type="text" name="pass"
                                            value="<?php if (isset($_POST['capnhat']) && ($_POST['capnhat'])) {
                                                echo $_POST['pass'];
                                            } else {
                                                extract($edit_mem); echo $pass;
                                            } ?>">
                            <span class="" style="color:red;"><?= $errer['pass'] ?? "" ?></span>
                        </div>
                        <div class="form-group col-md-12">
                            <label class="control-label">Ảnh 3x4 nhân viên</label>
                            <br>
                            <img src="../img_upload/<?php if (isset($_POST['capnhat']) && ($_POST['capnhat'])) {
                                        echo $_POST['img-member'];
                                    } else {
                                        extract($edit_mem); echo $image;
                                    } ?>" alt="" class="" style="width:50px;height:50px;">
                            <input type="hidden" name="img-member" 
                                            value="<?php if (isset($_POST['capnhat']) && ($_POST['capnhat'])) {
                                                        echo $_POST['img-member'];
                                                    } else {
                                                        extract($edit_mem); echo $image;
                                                    } ?>"/>
                            <input type="file" name="anh">
                            <span class="" style="color:red;"><?= $errer['img-member'] ?? "" ?></span>
                        </div>
                        <input type="submit" name="capnhat" value="Cập nhật" class="btn btn-save">
                        <a class="btn btn-cancel" href="../controller/index.php?act=mem">Hủy bỏ</a>
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