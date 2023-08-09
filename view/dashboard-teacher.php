
  <main class="">

        <div class="row">
            <div class="col-md-6 col-lg-3">
                <a href="../controller/index.php?act=cus">
                    <div class="widget-small primary coloured-icon"><i class='icon  bx bxs-user fa-3x'></i>
                        <div class="info">
                            <h4>Tổng học sinh của bạn</h4>
                            <p><b><?php   echo $countStudent[0]['count_order'] ?> học sinh</b></p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-6 col-lg-3">
                <a href="../controller/index.php?act=class">
                    <div class="widget-small info coloured-icon"><i class='icon bx bxs-purchase-tag-alt fa-3x' ></i>
                        <div class="info">
                            <h4>Tổng lớp học của bạn</h4>
                            <p><b><?php echo $countClassForTeacher[0]['count_class'] ?> lớp học</b></p>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>



    <div class="app-title">
      <ul class="app-breadcrumb breadcrumb side">
        <li class="breadcrumb-item active"><a href="#"><b>Danh sách học sinh </b></a></li>
      </ul>
      <div id="clock"></div>
    </div>

    <div class="row">
      <div class="col-md-12">
        <div class="tile">
          <div class="tile-body">

            <div class="row element-button">
              <div class="col-sm-2">
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
                  <th>Lớp</th>
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
                    <td><?php extract($lt); echo $lop_name ?></td>
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





    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
    <!-- The javascript plugin to display page loading on top-->
    <script src="js/plugins/pace.min.js"></script>
    <!-- Page specific javascripts-->
    <script type="text/javascript" src="js/plugins/chart.js"></script>
    <script type="text/javascript">
    var data = {
      labels: ["Tháng 1", "Tháng 2", "Tháng 3", "Tháng 4", "Tháng 5", "Tháng 6", "Tháng 7", "Tháng 8", "Tháng 9", "Tháng 10", "Tháng 11", "Tháng 12"],
      datasets: [{
          label: "Dữ liệu đầu tiên",
          fillColor: "rgba(255, 255, 255, 0.158)",
          strokeColor: "black",
          pointColor: "rgb(220, 64, 59)",
          pointStrokeColor: "#fff",
          pointHighlightFill: "#fff",
          pointHighlightStroke: "green",
          data: [20, 59, 90, 51, 56, 100, 40, 60, 78, 53, 33, 81]
        },
        {
          label: "Dữ liệu kế tiếp",
          fillColor: "rgba(255, 255, 255, 0.158)",
          strokeColor: "rgb(220, 64, 59)",
          pointColor: "black",
          pointStrokeColor: "#fff",
          pointHighlightFill: "#fff",
          pointHighlightStroke: "green",
          data: [48, 48, 49, 39, 86, 10, 50, 70, 60, 70, 75, 90]
        }
      ]
    };


        var ctxl = $("#lineChartDemo").get(0).getContext("2d");
        var lineChart = new Chart(ctxl).Line(data);

        var ctxb = $("#barChartDemo").get(0).getContext("2d");
        var barChart = new Chart(ctxb).Bar(data);
    </script>
    <!-- Google analytics script-->
    <script type="text/javascript">
        if (document.location.hostname == 'pratikborsadiya.in') {
            (function (i, s, o, g, r, a, m) {
                i['GoogleAnalyticsObject'] = r;
                i[r] = i[r] || function () {
                    (i[r].q = i[r].q || []).push(arguments)
                }, i[r].l = 1 * new Date();
                a = s.createElement(o),
                    m = s.getElementsByTagName(o)[0];
                a.async = 1;
                a.src = g;
                m.parentNode.insertBefore(a, m)
            })(window, document, 'script', '//www.google-analytics.com/analytics.js', 'ga');
            ga('create', 'UA-72504830-1', 'auto');
            ga('send', 'pageview');
        }
    </script>


</body>

</html>