<!--  -->
  <main class="">
    <div class="app-title">
      <ul class="app-breadcrumb breadcrumb">
        <li class="breadcrumb-item">Danh sách sản phẩm</li>
        <li class="breadcrumb-item"><a href="#">Thêm sản phẩm</a></li>
      </ul>
    </div>
    <div class="app-title">
      <h5 class=""><?php if (isset($thongbao) && ($thongbao != ""))  {
                                                                                echo $thongbao;
                                                                            } else {
                                                                                echo "Đang thêm khóa học";
                                                                            } ?></h5>
    </div>


    <div class="row">

      <div class="col-md-12">
        <div class="tile">
          <h3 class="tile-title">Tạo mới khóa học</h3>
          <div class="tile-body">
            <form class="row" action="./index.php?act=add_pro" method="post">
              <div class="form-group col-md-3">
                <label class="control-label">Tên khóa học</label>
                <input class="form-control" type="text" name="ten">
                <span class="" style="color:red;"><?= $errer['ten'] ?? "" ?></span>
              </div>
              <div class="form-group col-md-3">
                <label class="control-label">Giá khóa học</label>
                <input class="form-control" type="text" name="gia">
                <span class="" style="color:red;"><?= $errer['gia'] ?? "" ?></span>
              </div>
              <div class="form-group col-md-12">
                <label class="control-label">Mô tả sản phẩm</label>
                <textarea class="form-control" name="mota" id="mota"></textarea>
                <script>CKEDITOR.replace('mota');</script>
                <span class="" style="color:red;"><?= $errer['mota'] ?? "" ?></span>
              </div>
              <input type="submit" name="them" value="Thêm Mới" class="btn btn-save">
              <a class="btn btn-cancel" href="./index.php?act=pro">Hủy bỏ</a>
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