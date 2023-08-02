<!--  -->
  <main class="">
    <div class="app-title">
      <ul class="app-breadcrumb breadcrumb">
        <li class="breadcrumb-item">Danh sách lớp học</li>
        <li class="breadcrumb-item"><a href="#">Thêm lớp học</a></li>
      </ul>
    </div>
    <div class="app-title">
      <h5 class=""><?php if (isset($thongbao) && ($thongbao != ""))  {
                                                                                echo $thongbao;
                                                                            } else {
                                                                                echo "Đang sửa lớp học";
                                                                            } ?></h5>
    </div>


    <div class="row">

      <div class="col-md-12">
        <div class="tile">
          <h3 class="tile-title">Sửa lớp học</h3>
          <div class="tile-body">
            <form class="row" action="../controller/index.php?act=up_class&id=<?php extract($edit_class); echo $id ?>" method="post">
              <div class="form-group col-md-5">
                <label class="control-label">Tên lớp học</label>
                <input class="form-control" type="text" name="ten" value="<?php extract($edit_class); echo $name ?>">
                <span class="" style="color:red;"><?= $errer['ten'] ?? "" ?></span>
              </div>
              <div class="form-group col-md-5">
                <label class="control-label">Khóa học</label>
                <input class="form-control" type="text" name="course" value="<?php extract($edit_class); echo $ten_khoa ?>" readonly>
                <span class="" style="color:red;"><?= $errer['ten'] ?? "" ?></span>
              </div>
              <div class="form-group col-md-5">
                <label class="control-label">Thời gian</label>
                <input class="form-control" type="time" name="time" value="<?php extract($edit_class); echo $time ?>">
                <span class="" style="color:red;"><?= $errer['ten'] ?? "" ?></span>
              </div>
              <div class="form-group col-md-5">
                  <label for="exampleSelect1" class="control-label">Ca học</label>
                  <select class="form-control" id="exampleSelect1" name="ca">
                    <option value="<?php extract($edit_class); echo $ca_id ?>"><?php extract($edit_class); echo $ten_ca ?></option>
                    <?php foreach($list_ca as $lt){ ?>
                      <option value="<?php extract($lt); echo $id ?> ">
                        <?php extract($lt); echo $name ?> 
                        
                        ( <?php extract($lt); echo $time_start ?> - <?php extract($lt); echo $time_end ?> )
                      </option>
                    <?php
                    }?>
                  </select>
                  <span class="" style="color:red;"><?= $errer['ca'] ?? "" ?></span>
              </div>     
              <div class="form-group col-md-5">
                  <label for="exampleSelect1" class="control-label">Ngày học</label>
                  <select class="form-control" id="exampleSelect1" name="ngay">
                    <option value="<?php extract($edit_class); echo $day ?>"><?php extract($edit_class); echo $day ?></option>
                    <?php
                    // if($edit_class['day'] == 'Ngày lẻ (Thứ 3,5,7)'){
                    //   echo '<option value="Ngày chẵn (Thứ 2,4,6)">Ngày chẵn (Thứ 2,4,6)</option>';
                    // } else {
                    //   echo '<option value="Ngày lẻ (Thứ 3,5,7)">Ngày lẻ (Thứ 3,5,7)</option>';
                    // }
                      echo ($edit_class['day'] == 'Thứ 3 5 7') ? '<option value="Thứ 2 4 6">Ngày chẵn (Thứ 2,4,6)</option>' : '<option value="Thứ 3 5 7">Ngày lẻ (Thứ 3,5,7)</option>';
                    ?>

                  </select>
                  <span class="" style="color:red;"><?= $errer['ngay'] ?? "" ?></span>
              </div>         
              <div class="form-group col-md-5">
                  <label for="exampleSelect1" class="control-label">Giảng viên</label>
                  <select class="form-control" id="exampleSelect1" name="gv">
                    <option value="<?php extract($edit_class); echo $customer_id ?>"><?php extract($edit_class); echo $ten_customer ?></option>
                      <?php foreach($list_gv as $lt){ ?>
                        <option value="<?php extract($lt); echo $id ?> "><?php extract($lt); echo $name ?>
                    </option>
                      <?php } ?>
                  </select>
                  <span class="" style="color:red;"><?= $errer['gv'] ?? "" ?></span>
              </div>
              <div class="form-group col-md-2">
              </div> 
    
              <input type="submit" name="them" value="Sửa" class="btn btn-save">
              <a class="btn btn-cancel" href="../controller/index.php?act=class">Hủy bỏ</a>
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