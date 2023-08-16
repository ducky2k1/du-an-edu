<!--  -->
  <main class="">
    <div class="app-title">
      <ul class="app-breadcrumb breadcrumb">
        <li class="breadcrumb-item">Danh sách khách hàng</li>
        <li class="breadcrumb-item"><a href="#">Thêm khách hàng</a></li>
      </ul>
    </div>
    <div class="app-title">
      <h5 class=""><?php if (isset($thongbao) && ($thongbao != ""))  {
                                                                                echo $thongbao;
                                                                            } else {
                                                                                echo "Đang thêm tài khoản";
                                                                            } ?></h5>
    </div>


    <div class="row">

      <div class="col-md-12">
        <div class="tile">
          <h3 class="tile-title">Tạo mới khách hàng</h3>
          <div class="tile-body">
            <form class="row" action="../controller/index.php?act=add_mem" method="post" enctype="multipart/form-data">

              <div class="form-group col-md-4">
                <label class="control-label">Họ và tên</label>
                <input class="form-control" type="text" name="ten">
                <span class="" style="color:red;"><?= $errer['ten'] ?? "" ?></span>
              </div>
              <div class="form-group col-md-4">
                <label class="control-label">Ngày sinh</label>
                <input class="form-control" type="date" name="day">
                <span class="" style="color:red;"><?= $errer['day'] ?? "" ?></span>
              </div>
              <div class="form-group col-md-4">
                <label class="control-label">Địa chỉ email</label>
                <input class="form-control" type="text" name="email">
                <span class="" style="color:red;"><?= $errer['email'] ?? "" ?></span>
              </div>
              <div class="form-group col-md-4">
                <label class="control-label">Mật khẩu</label>
                <input class="form-control" type="text" name="pass">
                <span class="" style="color:red;"><?= $errer['pass'] ?? "" ?></span>
              </div>
              <div class="form-group col-md-4">
                <label class="control-label">Địa chỉ thường trú</label>
                <input class="form-control" type="text" name="loca">
                <span class="" style="color:red;"><?= $errer['loca'] ?? "" ?></span>
              </div>
              <div class="form-group  col-md-4">
                <label class="control-label">Số điện thoại</label>
                <input class="form-control" type="number" name="num">
                <span class="" style="color:red;"><?= $errer['num'] ?? "" ?></span>
              </div>
              <div class="form-group col-md-12">
                <label class="control-label">Ảnh 3x4 nhân viên</label>
                <input type="file"  name="img-member"/>
                <span class="" style="color:red;"><?= $errer['img-member'] ?? "" ?></span>
              </div>
                <!-- <div id="thumbbox">
                  <img height="300" width="300" alt="Thumb image" id="thumbimage" style="display: none" />
                  <a class="removeimg" href="javascript:"></a>
                </div>
                <div id="boxchoice">
                  <a href="javascript:" class="Choicefile"><i class='bx bx-upload'></i></a>
                  <p style="clear:both"></p>
                </div> -->

              </div>
              <input type="submit" name="them" value="Thêm Mới" class="btn btn-save">
              <a class="btn btn-cancel" href="../controller/index.php?act=mem">Hủy bỏ</a>
          </form>
          </div>


        </div>
  </main>

  <script src="js/jquery-3.2.1.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/main.js"></script>
  <script src="js/plugins/pace.min.js"></script>
  <script>
    const inpFile = document.getElementById("inpFile");
    const loadFile = document.getElementById("loadFile");
    const previewContaine = document.getElementById("imagePreview");
    const previewContainer = document.getElementById("imagePreview");
    const previewImage = previewContainer.querySelector(".image-preview__image");
    const previewDefaultText = previewContainer.querySelector(".image-preview__default-text");
    inpFile.addEventListener("change", function () {
      const file = this.files[0];
      if (file) {
        const reader = new FileReader();
        previewDefaultText.style.display = "none";
        previewImage.style.display = "block";
        reader.addEventListener("load", function () {
          previewImage.setAttribute("src", this.result);
        });
        reader.readAsDataURL(file);
      }
    });

  </script>
</body>

</html>