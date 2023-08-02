
<main class="">
      <div class="app-title">
        <ul class="app-breadcrumb breadcrumb side">
          <li class="breadcrumb-item active"><a href="#"><b>Danh sách bình luận</b></a></li>
        </ul>
        <div id="clock"></div>
      </div>
      <div class="row">
        <div class="col-md-12">
          <div class="tile">
            <div class="tile-body">
              <div class="row element-button">
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
                    <th>ID bình luận</th>
                    <th>Khách hàng</th>
                    <th>Khóa học</th>
                    <th>Nội dung</th>
                    <th>Ngày bình luận</th>
                    <th>Trạng thái</th>
                    <th>Tính năng</th>
                  </tr>
                </thead>
                <tbody>
                <?php
                                foreach($listComment as $lt){
                                ?>
                                  <tr>
                                    <td></td>
                                    <td><?php extract($lt); echo $id ?></td>
                                    <td><?php extract($lt); echo $name ?></td>
                                    <td><?php extract($lt); echo $course_name ?></td>
                                    <td><?php extract($lt); echo $content ?></td>
                                    <td><?php extract($lt); echo $day_comment ?></td>
                                    <td>
                                      <?php extract($lt); if($status == 'đã duyệt'){ ?>
                                        <span class="badge bg-success">Đã duyệt</span>
                                      <?php } else { ?>
                                        <span class="badge bg-danger">Chưa duyệt</span>
                                      <?php } ?>
                                      
                                    
                                      </td>
                                    <td>
                                        <?php extract($lt); if($status == 'đã duyệt'){ ?>
                                            <a href="../controller/index.php?act=del_comment&id=<?php extract($lt); echo $id ?>" onclick="return confirm('Bạn có chắc xóa không')"><button class="btn btn-primary btn-sm trash" type="button" title="Xóa"><i class="fas fa-trash-alt"></i> </button></a>
                                      <?php } else { ?>
                                        <a href="../controller/index.php?act=del_comment&id=<?php extract($lt); echo $id ?>" onclick="return confirm('Bạn có chắc xóa không')"><button class="btn btn-primary btn-sm trash" type="button" title="Xóa"><i class="fas fa-trash-alt"></i> </button></a>
                                        <a href="../controller/index.php?act=edit_comment&id=<?php extract($lt); echo $id ?>"><button class="btn btn-primary btn-sm edit" type="button" title="Sửa"><i class="fa fa-check"></i></button></a>
                                        
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
  