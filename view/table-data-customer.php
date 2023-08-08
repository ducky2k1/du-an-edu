
<main class="">
    <div class="app-title">
      <ul class="app-breadcrumb breadcrumb side">
        <li class="breadcrumb-item active"><a href="#"><b>Danh sách customer</b></a></li>
      </ul>
      <div id="clock"></div>
    </div>

    <div class="row">
      <div class="col-md-12">
        <div class="tile">
          <div class="tile-body">

            <div class="row element-button">
              <div class="col-sm-2">

                <a class="btn btn-add btn-sm" href="../controller/index.php?act=add_cus" title="Thêm"><i class="fas fa-plus"></i>
                  Tạo mới nhân viên</a>
              </div>
            </div>
            <table class="table table-hover table-bordered js-copytextarea" cellpadding="0" cellspacing="0" border="0"
              id="sampleTable">
              <thead>
                <tr>
                  <th width="10"><input type="checkbox" id="all"></th>
                  <th>ID nhân viên</th>
                  <th width="150">Họ và tên</th>
                  <th width="20">Ảnh thẻ</th>
                  <th width="300">Địa chỉ</th>
                  <th>SĐT</th>
                  <th>Email</th>
                  <th>Password</th>
                  <th>Ngày sinh</th>
                  <th>Chức vụ</th>
                  <th width="100">Tính năng</th>
                </tr>
              </thead>
              <tbody>
                
                <?php foreach($list_customer as $lt){
                ?>
                  <tr>
                    <td></td>
                    <td><?php extract($lt); echo $id ?></td>
                    <td><?php extract($lt); echo $name ?></td>
                    <td><img src="../img_customer/<?php extract($lt); echo $image ?>" alt="" class="img-ad"></td>
                    <td><?php extract($lt); echo $location?></td>
                    <td><?php extract($lt); echo $phone ?></td>
                    <td><?php extract($lt); echo $email ?></td>
                    <td><?php extract($lt); echo $pass ?></td>
                    <td><?php extract($lt); echo $birth_day ?></td>
                    <td><p class="<?php if($role =='gv'){echo 'badge bg-success';}else{echo 'badge bg-danger';} ?>"><?php extract($lt); echo $role ?></p></td>
                    <td>
                      <a href="../controller/index.php?act=del_cus&id=<?php extract($lt); echo $id ?>" onclick="return confirm('Bạn có chắc xóa không')"><button class="btn btn-primary btn-sm trash" type="button" title="Xóa"><i class="fas fa-trash-alt"></i> </button></a>
                      <a href="../controller/index.php?act=edit_cus&id=<?php extract($lt); echo $id ?>"><button class="btn btn-primary btn-sm edit" type="button" title="Sửa"><i class="fa fa-edit"></i></button></a>
                    </td>
                  </tr>
                <?php
                }?>


              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </main>

