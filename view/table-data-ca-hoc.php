
<main class="">
        <div class="app-title">
            <ul class="app-breadcrumb breadcrumb side">
                <li class="breadcrumb-item active"><a href="#"><b>Danh sách ca học</b></a></li>
            </ul>
            <div id="clock"></div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="tile">
                    <div class="tile-body">
                        <div class="row element-button">
                            <div class="col-sm-2">
              
                              <a class="btn btn-add btn-sm" href="../controller/index.php?act=add_ca" title="Thêm"><i class="fas fa-plus"></i>
                                Tạo mới ca học</a>
                            </div>
                          </div>
                        <table class="table table-hover table-bordered" id="sampleTable">
                            <thead>
                                <tr>
                                    <th width="10"><input type="checkbox" id="all"></th>
                                    <th>ID ca học</th>
                                    <th>Ca học</th>
                                    <th>Thời gian bắt đầu</th>
                                    <th>Thời gian kết thúc</th>
                                    <th>Chức năng</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                foreach($list_ca as $lt){
                                ?>
                                  <tr>
                                    <td></td>
                                    <td><?php extract($lt); echo $id ?></td>
                                    <td><?php extract($lt); echo $name ?></td>
                                    <td><?php extract($lt); echo $time_start ?></td>
                                    <td><?php extract($lt); echo $time_end ?></td>
                                    <td>
                                    <a href="../controller/index.php?act=del_ca&id=<?php extract($lt); echo $id ?>" onclick="return confirm('Bạn có chắc xóa không')"><button class="btn btn-primary btn-sm trash" type="button" title="Xóa"><i class="fas fa-trash-alt"></i> </button></a>
                                    <a href="../controller/index.php?act=edit_ca&id=<?php extract($lt); echo $id ?>"><button class="btn btn-primary btn-sm edit" type="button" title="Sửa"><i class="fa fa-edit"></i></button></a>
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


   