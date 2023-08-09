
<main class="">
        <div class="app-title">
            <ul class="app-breadcrumb breadcrumb side">
                <li class="breadcrumb-item active"><a href="#"><b>Lịch dạy học</b></a></li>
            </ul>
            <div id="clock"></div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="tile">
                    <div class="tile-body">
                        <div class="row element-button">
                        <?php                               
                              foreach($list_course as $lc){?>
                                  <div class="col-sm-2">
                                  <a class="btn btn-add btn-sm" href="../controller/index.php?act=library&idlh=<?php extract($lc); echo $id ?>&id=<?php echo $ma_us ?>">
                                  <?php extract($lc); echo $name ?></a>
                                  </div>
                            <?php } ?>  
                          </div>
                      <table class="table table-hover table-bordered" id="sampleTable">
                            <thead>
                                <tr>
                                    <th width="10"><input type="checkbox" id="all"></th>
                                    <th>Tên lớp</th>
                                    <th>Thời gian</th>
                                    <th>Lịch dạy</th>
                                    <th>Ca học</th>
                                    <th>Thời gian bắt đầu</th>
                                    <th>Thời gian kết thúc</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                foreach($list_class as $lt){
                                ?>
                                  <tr>
                                    <td></td>
                                    <td><a href="../controller/index.php?act=get_class&id=<?php extract($lt); echo $id ?>"><?php extract($lt); echo $name ?></a></td>
                                    <td><?php extract($lt); echo $time ?></td>
                                    <td><?php extract($lt); echo $day ?></td>
                                    <td><?php extract($lt); echo $ten_ca ?></td>
                                    <td><?php extract($lt); echo $time_start ?></td>
                                    <td><?php extract($lt); echo $time_end ?></td>
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


    