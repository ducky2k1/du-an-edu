
  <main class="">
    <div class="app-title">
      <ul class="app-breadcrumb breadcrumb">
        <li class="breadcrumb-item">Danh sách nhân viên</li>
        <li class="breadcrumb-item"><a href="#">Thêm nhân viên</a></li>
      </ul>
    </div>
    <div class="app-title">
      <h5 class=""><?php if (isset($thongbao) && ($thongbao != ""))  {
                                                                                echo $thongbao;
                                                                            } else {
                                                                                echo "Đang thêm nhân viên";
                                                                            } ?></h5>
    </div>
    <div class="row">
      <div class="col-md-12">

        <div class="tile">

          <h3 class="tile-title">Tạo mới nhân viên</h3>
          <div class="tile-body">
            <form class="row" action="../controller/index.php?act=add_cus" method="post" enctype="multipart/form-data">
              <div class="form-group col-md-4">
                <label class="control-label">ID nhân viên</label>
                <input class="form-control" type="text" name="id-nv" readonly>
              </div>
              <div class="form-group col-md-4">
                <label class="control-label">Họ và tên</label>
                <input class="form-control" type="text" name="name-nv">
                <span class="" style="color:red;"><?= $errer['name-nv'] ?? "" ?></span>
              </div>
              <div class="form-group col-md-4">
                <label class="control-label">Địa chỉ email</label>
                <input class="form-control" type="text" name="email-nv">
                <span class="" style="color:red;"><?= $errer['email-nv'] ?? "" ?></span>
              </div>
              <div class="form-group col-md-4">
                <label class="control-label">Địa chỉ thường trú</label>
                <input class="form-control" type="text" name="location-nv">
                <span class="" style="color:red;"><?= $errer['location-nv'] ?? "" ?></span>
              </div>
              <div class="form-group  col-md-4">
                <label class="control-label">Số điện thoại</label>
                <input class="form-control" type="number" name="phone-nv">
                <span class="" style="color:red;"><?= $errer['phone-nv'] ?? "" ?></span>
              </div>
              <div class="form-group  col-md-4">
                <label class="control-label">Mật khẩu</label>
                <input class="form-control" type="text" name="pass-nv">
                <span class="" style="color:red;"><?= $errer['pass-nv'] ?? "" ?></span>
              </div>
              <div class="form-group col-md-4">
                <label class="control-label">Ngày sinh</label>
                <input class="form-control" type="date" name="date-nv">
                <span class="" style="color:red;"><?= $errer['date-nv'] ?? "" ?></span>
              </div>

              <div class="form-group col-md-12">
                <label class="control-label">Ảnh 3x4 nhân viên</label>
                <input type="file"  name="img-nv"/>
                <span class="" style="color:red;"><?= $errer['img-nv'] ?? "" ?></span>
              </div>
              <input type="submit" name="them" value="Thêm Mới" class="btn btn-save">
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