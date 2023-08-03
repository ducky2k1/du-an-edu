
    <main class="">
      <div class="app-title">
        <ul class="app-breadcrumb breadcrumb side">
          <li class="breadcrumb-item active"><a href="#"><b>Danh sách đơn hàng</b></a></li>
        </ul>
        <div id="clock"></div>
      </div>
      <div class="row">
        <div class="col-md-12">
          <div class="tile">
            <div class="tile-body">
              <div class="row element-button">
                <!-- <div class="col-sm-2">
  
                  <a class="btn btn-add btn-sm" href="form-add-don-hang.html" title="Thêm"><i class="fas fa-plus"></i>
                    Tạo mới đơn hàng</a>
                </div> -->
                <div class="col-sm-2">
                  <a class="btn btn-delete btn-sm nhap-tu-file" type="button" title="Nhập" onclick="myFunction(this)"><i
                      class="fas fa-file-upload"></i> Tải từ file</a>
                </div>
  
                <div class="col-sm-2">
                  <a class="btn btn-delete btn-sm print-file" type="button" title="In" onclick="myApp.printTable()"><i
                      class="fas fa-print"></i> In dữ liệu</a>
                </div>
                <div class="col-sm-2">
                  <a class="btn btn-delete btn-sm print-file js-textareacopybtn" type="button" title="Sao chép"><i
                      class="fas fa-copy"></i> Sao chép</a>
                </div>
  
                <div class="col-sm-2">
                  <a class="btn btn-excel btn-sm" href="" title="In"><i class="fas fa-file-excel"></i> Xuất Excel</a>
                </div>
                <div class="col-sm-2">
                  <a class="btn btn-delete btn-sm pdf-file" type="button" title="In" onclick="myFunction(this)"><i
                      class="fas fa-file-pdf"></i> Xuất PDF</a>
                </div>
                <div class="col-sm-2">
                  <a class="btn btn-delete btn-sm" type="button" title="Xóa" onclick="myFunction(this)"><i
                      class="fas fa-trash-alt"></i> Xóa tất cả </a>
                </div>
              </div>
              <table class="table table-hover table-bordered" id="sampleTable">
                <thead>
                  <tr>
                    <th width="10"><input type="checkbox" id="all"></th>
                    <th>ID đơn hàng</th>
                    <th>Lớp</th>
                    <th>Khách hàng</th>
                    <th>SĐT</th>
                    <th>Email</th>
                    <th>Địa chỉ</th>
                    <th>Ngày đăng kí</th>
                    <th>Ngày thanh toán</th>
                    <th>Hình thức thanh toán</th>
                    <th>Trạng thái</th>
                    <th>Tổng tiền (vnd)</th>
                    <th>Tính năng</th>
                  </tr>
                </thead>
                <tbody>
                <?php
                                foreach($list_order as $lt){
                                ?>
                                  <tr>
                                    <td></td>
                                    <td><?php extract($lt); echo $order_id ?></td>
                                    <td><?php extract($lt); echo $class_name ?></td>
                                    <td><?php extract($lt); echo $member_name ?></td>
                                    <td><?php extract($lt); echo $phone ?></td>
                                    <td><?php extract($lt); echo $email ?></td>
                                    <td><?php extract($lt); echo $location ?></td>
                                    <td><?php extract($lt); echo $register_time ?></td>
                                    <td><?php extract($lt); echo $payment_time ?></td>
                                    <td><?php extract($lt); echo $hinhthuc ?></td>
                                    <td>
                                      <?php extract($lt); if($status == 'Đã thanh toán'){ ?>
                                        <span class="badge bg-success">Đã thanh toán</span>
                                      <?php } else { ?>
                                        <span class="badge bg-danger">Chưa thanh toán</span>
                                      <?php } ?>
                                      
                                    
                                      </td>
                                    <td><?php extract($lt); echo number_format($sotien_vnd*23500) ?></td>
                                    <td>
                                      <a href="../controller/index.php?act=del_order&id=<?php extract($lt); echo $order_id ?>" onclick="return confirm('Bạn có chắc xóa không')"><button class="btn btn-primary btn-sm trash" type="button" title="Xóa"><i class="fas fa-trash-alt"></i> </button></a>
                                      <?php extract($lt); if($status != 'Đã thanh toán'){ ?>
                                      <a href="../controller/index.php?act=edit_order&id=<?php extract($lt); echo $order_id ?>"><button class="btn btn-primary btn-sm edit" type="button" title="Sửa"><i class="fa fa-check"></i></button></a>
                                      <?php } ?>
                                    </td>
                                  </tr>
                                <?php
                                }
                                ?>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </main>
  