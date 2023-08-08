
  <main class="">
    <div class="app-title">
      <ul class="app-breadcrumb breadcrumb side">
        <li class="breadcrumb-item active"><a href="#"><b>Danh sách thành viên lớp <?php echo $get_class[0]['lop_name'] ?></b></a></li>
      </ul>
      <div id="clock"></div>
    </div>

    <div class="row">
      <div class="col-md-12">
        <div class="tile">
          <div class="tile-body">

            <div class="row element-button">
              <div class="col-sm-2">

                <a class="btn btn-add btn-sm" href=".#" title="Thêm">Lớp <?php echo $get_class[0]['lop_name'] ?></a>
              </div>
            </div>
            <table class="table table-hover table-bordered js-copytextarea" cellpadding="0" cellspacing="0" border="0"
              id="sampleTable">
              <thead>
                <tr>
                  <th width="10"><input type="checkbox" id="all"></th>
                  <th width="150">Họ và tên</th>
                  <th width="20">Ảnh thẻ</th>
                  <th width="300">Địa chỉ</th>
                  <th>SĐT</th>
                  <th>Email</th>
                </tr>
              </thead>
              <tbody>
                <?php 
                // $list_mem = isset($list_member) ? $list_member : '';
                if (isset($get_class)) {
                        foreach($get_class as $lt){
                ?>
                  <tr>
                    <td></td>
                    <td><?php extract($lt); echo $name ?></td>
                    <td><img src="../img_upload/<?php extract($lt); echo $image ?>" alt="" class="img-ad"></td>
                    <td><?php extract($lt); echo $location?></td>
                    <td><?php extract($lt); echo $phone ?></td>
                    <td><?php extract($lt); echo $email ?></td>
                  </tr>

                <?php
                }}
                  ?>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </main>
