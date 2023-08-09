
<main class="">
        <div class="app-title">
            <ul class="app-breadcrumb breadcrumb side">
                <li class="breadcrumb-item active"><a href="#"><b>Danh sách lớp học</b></a></li>
            </ul>
            <div id="clock"></div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="tile">
                    <div class="tile-body">
                        <div class="row element-button">

                            <?php
                            if(isset($info)&&($info)){
                              if($info['role']=='admin' ){ ?>
                            <div class="col-sm-2">
                              <a class="btn btn-add btn-sm" href="../controller/index.php?act=add_class" title="Thêm"><i class="fas fa-plus"></i>
                                Tạo mới lớp học</a>
                            </div>
                                <?php foreach($list_course as $lc){ ?>
                                  <div class="col-sm-2">
                                  <a class="btn btn-add btn-sm" href="../controller/index.php?act=class&id=<?php extract($lc); echo $id ?>">
                                  <?php extract($lc); echo $name ?></a>
                                  </div>
                            <?php                               
                                }
                              } else { foreach($list_course as $lc){?>
                                  <div class="col-sm-2">
                                  <a class="btn btn-add btn-sm" href="../controller/index.php?act=class_teacher&idlh=<?php extract($lc); echo $id ?>&id=<?php echo $ma_us ?>">
                                  <?php extract($lc); echo $name ?></a>
                                  </div>
                            <?php } }
                            } ?>  



                          </div>
                      <table class="table table-hover table-bordered" id="sampleTable">
                            <thead>
                                <tr>
                                    <th width="10"><input type="checkbox" id="all"></th>
                                    <th>ID lớp học</th>
                                    <th>Khóa học</th>
                                    <th>Tên lớp</th>
                                    <th>Tên giáo viên</th>
                                    <th>Thành viên</th>
                                    <th>Thời gian</th>
                                    <th>Lịch học</th>
                                    <th>Ca học</th>
                                    <th>Thời gian bắt đầu</th>
                                    <th>Thời gian kết thúc</th>
                                    <?php
                                      if(isset($info)&&($info)){
                                        if($info['role']=='admin' ){ ?>
                                    <th>Chức năng</th>
                                    <?php } }?>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                foreach($list_class as $lt){
                                ?>
                                  <tr>
                                    <td></td>
                                    <td><?php extract($lt); echo $id ?></td>
                                    <td><?php extract($lt); echo $ten_khoa ?></td>
                                    <td><a href="../controller/index.php?act=get_class&id=<?php extract($lt); echo $id ?>"><?php extract($lt); echo $name ?></a></td>
                                    <td><?php extract($lt); echo $ten_customer ?> - <?php extract($lt); echo $customer_id ?></td>
                                    <td>															
                                      <?php extract($lt); foreach($count_id as $keyCount => $valCount){
                                          if ($keyCount == $id) {
                                            echo $valCount;
                                          }
                                        } 
															?> / <?php extract($lt); echo $slot ?></td>
                                    <td><?php extract($lt); echo $time ?></td>
                                    <td><?php extract($lt); echo $day ?></td>
                                    <td><?php extract($lt); echo $ten_ca ?></td>
                                    <td><?php extract($lt); echo $time_start ?></td>
                                    <td><?php extract($lt); echo $time_end ?></td>
                                    <?php
                                      if(isset($info)&&($info)){
                                        if($info['role']=='admin' ){ ?>
                                    <td>
                                    <a href="../controller/index.php?act=del_class&id=<?php extract($lt); echo $id ?>" onclick="return confirm('Bạn có chắc xóa không')"><button class="btn btn-primary btn-sm trash" type="button" title="Xóa"><i class="fas fa-trash-alt"></i> </button></a>
                                    <a href="../controller/index.php?act=edit_class&id=<?php extract($lt); echo $id ?>"><button class="btn btn-primary btn-sm edit" type="button" title="Sửa"><i class="fa fa-edit"></i></button></a>
                                    </td>
                                    <?php } }?>
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


    