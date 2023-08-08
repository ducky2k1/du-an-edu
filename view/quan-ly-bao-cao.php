
  <main class="">
    <div class="row">
      <div class="col-md-12">
        <div class="app-title">
          <ul class="app-breadcrumb breadcrumb">
            <li class="breadcrumb-item"><a href="#"><b>Báo cáo doanh thu    </b></a></li>
          </ul>
          <div id="clock"></div>
        </div>
      </div>
    </div>
        <div class="row">
            <div class="col-md-6 col-lg-3">
                <a href="../controller/index.php?act=cus">
                    <div class="widget-small primary coloured-icon"><i class='icon  bx bxs-user fa-3x'></i>
                        <div class="info">
                            <h4>Tổng giảng viên</h4>
                            <p><b><?php   echo $dem[0]['count_gv'] ?> giảng viên</b></p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-6 col-lg-3">
                <a href="../controller/index.php?act=pro">
                    <div class="widget-small info coloured-icon"><i class='icon bx bxs-purchase-tag-alt fa-3x' ></i>
                        <div class="info">
                            <h4>Tổng khóa học</h4>
                            <p><b><?php echo $demCourse[0]['count_course'] ?> khóa học</b></p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-6 col-lg-3">
                <a href="../controller/index.php?act=class">
                    <div class="widget-small info coloured-icon"><i class='icon bx bxs-purchase-tag-alt fa-3x' ></i>
                        <div class="info">
                            <h4>Tổng lớp học</h4>
                            <p><b><?php echo $demClass[0]['count_class'] ?> lớp học</b></p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-6 col-lg-3">
                <a href="../controller/index.php?act=order">
                    <div class="widget-small warning coloured-icon"><i class='icon fa-3x bx bxs-shopping-bag-alt'></i>
                        <div class="info">
                            <h4>Tổng hóa đơn</h4>
                            <p><b><?php echo $demOrder[0]['count_order'] ?> đơn</b></p>
                        </div>
                    </div>
                </a>
            </div>
            <!-- <div class="col-md-6 col-lg-3">
                <div class="widget-small danger coloured-icon"><i class='icon fa-3x bx bxs-info-circle' ></i>
                    <div class="info">
                        <h4>Bị cấm</h4>
                        <p><b>4 nhân viên</b></p>
                    </div>
                </div>
            </div> -->
        </div>
        <div class="row">
            <div class="col-md-6 col-lg-3">
                <div class="widget-small primary coloured-icon"><i class='icon fa-3x bx bxs-chart' ></i>
                    <div class="info">
                        <h4>Tổng doanh thu</h4>
                        <p><b><?php echo number_format($tongTien[0]['sum']*23500) ?> VND</b></p>
                    </div>
                </div>
            </div>
            <!-- <div class="col-md-6 col-lg-3">
                <div class="widget-small info coloured-icon"><i class='icon fa-3x bx bxs-user-badge' ></i>
                    <div class="info">
                        <h4>Nhân viên mới</h4>
                        <p><b>3 nhân viên</b></p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="widget-small warning coloured-icon"><i class='icon fa-3x bx bxs-tag-x' ></i>
                    <div class="info">
                        <h4>Hết hàng</h4>
                        <p><b>1 sản phẩm</b></p>
                    </div>
                </div>
            </div> -->
            <div class="col-md-6 col-lg-3">
                <div class="widget-small danger coloured-icon"><i class='icon fa-3x bx bxs-receipt' ></i>
                    <div class="info">
                        <h4>Hóa đơn chưa thanh toán</h4>
                        <p><b><?php echo $demNotOrder[0]['count_order'] ?> đơn</b></p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="tile">
                    <h3 class="tile-title">DỮ LIỆU HÀNG NGÀY</h3>
                    <div
                    id="myChart" style="width:559.6px; height:348.75px;">
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="tile">
                    <h3 class="tile-title">THỐNG KÊ DOANH SỐ</h3>
                    <div
                    id="myChart2" style="width:559.6px; height:348.75px;">
                    </div>
                </div>
            </div>
        </div>

    </main>




    <script>
        google.charts.load('current', {'packages':['corechart']});
        google.charts.setOnLoadCallback(drawChart);

        function drawChart() {

        // Set Data
        const data = google.visualization.arrayToDataTable([
            ['Contry', 'Mhl'],
            <?php 
                $count = count($getByDay);
                $i = 0;
                foreach($getByDay as $gt){ 
                    extract($gt);
                    if($i == $count){
                        $dau = "";
                    } else {
                        $dau = ",";
                    }
                    echo "['".$gt['course_name']."',".$gt['tong']."*23500]".$dau;
                    $i+=1;
                } 
            ?>
        ]);

        // Set Options
        const options = {
        title:''
        };

        // Draw
        const chart = new google.visualization.PieChart(document.getElementById('myChart'));
        chart.draw(data, options);

        }
        </script>

    <script>
        google.charts.load('current', {'packages':['corechart']});
        google.charts.setOnLoadCallback(drawChart2);

        function drawChart2() {

        // Set Data
        const data = google.visualization.arrayToDataTable([
        ['Contry', 'Mhl'],
        <?php 
                $count = count($get);
                $i = 0;
                foreach($get as $gt){ 
                    extract($gt);
                    if($i == $count){
                        $dau = "";
                    } else {
                        $dau = ",";
                    }
                    echo "['".$gt['course_name']."',".$gt['tong']."*23500]".$dau;
                    $i+=1;
                } 
            ?>
        ]);

        // Set Options
        const options = {
        title:''
        };

        // Draw
        const chart = new google.visualization.BarChart(document.getElementById('myChart2'));
        chart.draw(data, options);

        }
    </script>
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