<?php
    // var_dump($listhoadon);
    // die();
    // session_start();
    // $_SESSION['id_class'] = $_GET['id_class'];
    // $_SESSION['price-class'] = $_GET['price'];
?>
<head>
	<meta charset="utf-8">
	<title>Edulerns | Education HTML Template</title>
	<!-- Stylesheets -->
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="plugins/revolution/css/settings.css" rel="stylesheet" type="text/css">
	<!-- REVOLUTION SETTINGS STYLES -->
	<link href="plugins/revolution/css/layers.css" rel="stylesheet" type="text/css"><!-- REVOLUTION LAYERS STYLES -->
	<link href="plugins/revolution/css/navigation.css" rel="stylesheet" type="text/css">
	<!-- REVOLUTION NAVIGATION STYLES -->

	<link href="css/style.css" rel="stylesheet">
	<link href="css/responsive.css" rel="stylesheet">

	<link rel="shortcut icon" href="images/favicon.png" type="image/x-icon">
	<link rel="icon" href="images/favicon.png" type="image/x-icon">
    <!-- <script src="https://cdn.tailwindcss.com"></script> -->


	<!-- Responsive -->
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
	<!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> -->
	<!--[if lt IE 9]><script src="js/html5shiv.js"></script><![endif]-->
	<!--[if lt IE 9]><script src="js/respond.js"></script><![endif]-->
</head>
<style>
body{
    margin-top:20px;
    color: #484b51;
}
.text-secondary-d1 {
    color: #728299!important;
}
.page-header {
    margin: 0 0 1rem;
    padding-bottom: 1rem;
    padding-top: .5rem;
    border-bottom: 1px dotted #e2e2e2;
    display: -ms-flexbox;
    display: flex;
    -ms-flex-pack: justify;
    justify-content: space-between;
    -ms-flex-align: center;
    align-items: center;
}
.page-title {
    padding: 0;
    margin: 0;
    font-size: 1.75rem;
    font-weight: 300;
}
.brc-default-l1 {
    border-color: #dce9f0!important;
}

.ml-n1, .mx-n1 {
    margin-left: -.25rem!important;
}
.mr-n1, .mx-n1 {
    margin-right: -.25rem!important;
}
.mb-4, .my-4 {
    margin-bottom: 1.5rem!important;
}

hr {
    margin-top: 1rem;
    margin-bottom: 1rem;
    border: 0;
    border-top: 1px solid rgba(0,0,0,.1);
}

.text-grey-m2 {
    color: #888a8d!important;
}

.text-success-m2 {
    color: #86bd68!important;
}

.font-bolder, .text-600 {
    font-weight: 600!important;
}

.text-110 {
    font-size: 110%!important;
}
.text-blue {
    color: #478fcc!important;
}
.pb-25, .py-25 {
    padding-bottom: .75rem!important;
}

.pt-25, .py-25 {
    padding-top: .75rem!important;
}
.bgc-default-tp1 {
    background-color: rgba(121,169,197,.92)!important;
}
.bgc-default-l4, .bgc-h-default-l4:hover {
    background-color: #f3f8fa!important;
}
.page-header .page-tools {
    -ms-flex-item-align: end;
    align-self: flex-end;
}

.btn-light {
    color: #757984;
    background-color: #f5f6f9;
    border-color: #dddfe4;
}
.w-2 {
    width: 1rem;
}

.text-120 {
    font-size: 120%!important;
}
.text-primary-m1 {
    color: #4087d4!important;
}

.text-danger-m1 {
    color: #dd4949!important;
}
.text-blue-m2 {
    color: #68a3d5!important;
}
.text-150 {
    font-size: 150%!important;
}
.text-60 {
    font-size: 60%!important;
}
.text-grey-m1 {
    color: #7b7d81!important;
}
.align-bottom {
    vertical-align: bottom!important;
}
.mr10 {
    margin-right: 10px;
}

</style>
<body>
    
<?php
    include "./header.php";
?>
<div class="page-content container">
    <div class="page-header text-blue-d2">
        <!-- <h1 class="page-title text-secondary-d1">
            Invoice
            <small class="page-info">
                <i class="fa fa-angle-double-right text-80"></i>
                ID: #111-222
            </small>
        </h1> -->

        <div class="page-tools">
            <div class="action-buttons">
                <a class="btn bg-white btn-light mx-1px text-95" href="#" data-title="Print">
                    <i class="mr-1 fa fa-print text-primary-m1 text-120 w-2"></i>
                    Print
                </a>
                <a class="btn bg-white btn-light mx-1px text-95" href="#" data-title="PDF">
                    <i class="mr-1 fa fa-file-pdf-o text-danger-m1 text-120 w-2"></i>
                    Export
                </a>
            </div>
        </div>
    </div>

    <div class="container px-0">
        <div class="row mt-4">
            <div class="col-12 col-lg-12">
                <div class="row">
                    <div class="col-12">
                        <div class="text-center text-150">
                            <i class="fa fa-book fa-2x text-success-m2 mr-1"></i>
                            <span class="text-default-d3">Tất cả hóa đơn</span>
                        </div>
                    </div>
                </div>
                <!-- .row -->

                <hr class="row brc-default-l1 mx-n1 mb-4" />

                <!-- <div class="row">
                    <div class="col-sm-6">
                        <div><i class="fa fa-circle text-blue-m2 text-xs mr-1"></i>
                            <span class="text-sm text-grey-m2 align-middle">To :</span>
                            <span class="text-600 text-110 text-blue align-middle"><?php  if(isset($info)&&($info)){
                                echo $info['name'];
                            } ?></span>
                        </div>
                        <div><i class="fa fa-circle text-blue-m2 text-xs mr-1"></i>
                            <span class="text-sm text-grey-m2 align-middle">Email :</span>
                            <span class="text-600 text-110 text-blue align-middle"><?php  if(isset($info)&&($info)){
                                echo $info['email'];
                            } ?></span>
                        </div>
                        <div class="text-grey-m2">
                            <div class="my-1"><i class="fa fa-circle text-blue-m2 text-xs mr-1"></i>
                            <span>Location : </span>

                            <?php  if(isset($info)&&($info)){
                                echo $info['location'];
                            } ?> 
                            </div>
                            <div class="my-1"><i class="fa fa-circle text-blue-m2 text-xs mr-1"></i>
                                <i class="fa fa-phone fa-flip-horizontal text-secondary"></i> 
                            <span>Number Phone : </span>

                            <b class="text-600">
                                <?php  if(isset($info)&&($info)){
                                echo $info['phone'];
                                } ?>
                            </b></div>
                        </div>
                    </div>
                </div> -->
                
                <?php 
                    // $listCart = getListCart($ma_us);
                    // $getList = getListCartNew($ma_us);
                ?>
                <form action="./buy.php?act=payment" method="post">
                    <table class="table table-striped" id="myTable">
                        <thead class="thead-dark">
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Lớp</th>
                                <th scope="col">Giá</th>
                                <th scope="col">Thời gian đăng ký</th>
                                <th scope="col">Thời gian thanh toán</th>
                                <th scope="col">Ngân hàng</th>
                                <th scope="col">Trạng thái</th>
                                <th scope="col">Hình thức</th>
                                <th scope="col"></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                $i = 0; 
                                foreach($listhoadon as $hoadon){ 
                                extract($hoadon);
                            ?>
                            <tr>
                                <td scope="row"><?=++$i?></td>
                                <td><?=$name?></td>
                                <td><?=$sotien_vnd?>$</td>
                                <td><?=$register_time?></td>
                                <td><?=$payment_time?></td>
                                <td><?=$bank_name?></td>
                                <td><?=$status?></td>
                                <td><?=$hinhthuc?></td>
                                <td>
                                    <button><a href="./cart.php?&id_class=<?=$lop_id?>&price=<?=$sotien_vnd?>&tenlop=<?=$name?>">
                                        <?php if($status == 'Chưa thanh toán' && $hinhthuc != 'Thanh toán tại trung tâm') echo 'Thanh toán'; ?>
                                    </a></button></td>
                            </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                    <div class="row border-b-2 brc-default-l2"></div>

                    <!-- <div class="row mt-3">
                        <div class="col-12 col-sm-7 text-grey-d2 text-95 mt-2 mt-lg-0">
                            Extra note such as company or payment information...
                        </div>

                        <div class="col-12 col-sm-5 text-grey text-90 order-first order-sm-last">
                            <div class="row my-2">
                                <div class="col-7 text-right" id="columnSum">
                                    Total price
                                </div>
                                <div class="col-5">
                                    <span class="text-120 text-secondary-d1"><?php echo $all ?></span>
                                </div>
                            </div>

                            <div class="row my-2">
                                <div class="col-7 text-right">
                                    Tax (10%)
                                </div>
                                <div class="col-5">
                                    <span class="text-110 text-secondary-d1"><?php $tax = $price*0.1; echo $tax ?></span>
                                </div>
                            </div>

                            <div class="row my-2 align-items-center bgc-primary-l3 p-2">
                                <div class="col-7 text-right">
                                    Total Amount
                                </div>
                                <div class="col-5">
                                    <span class="text-150 text-success-d3 opacity-2">
                                        <?php $sumAll = $all + $tax; echo $sumAll;
                                            $_SESSION['sumAll'] = $sumAll;
                                        ?>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div> -->
                    <!-- <div> -->
                        <!-- <span class="text-secondary-d1 text-105">Thank you for your business</span> -->
                        <!-- <button class="btn btn-info btn-bold px-4 float-right mt-3 mt-lg-0" value="Pay Now"></button> -->
                        <!-- <a href="./buy.php?act=add_order" class="btn btn-info btn-bold px-4 float-right mt-3 mt-lg-0" name="pay">Pay Now</a> -->
                        <!-- <div class="d-flex justify-content-center mx-4 mb-3 mb-lg-4"> -->
                            <!-- <input type="submit" name="pay" value="Chuyển khoản" class="mr10 btn btn-primary btn-lg"> -->
                            <!-- <input type="submit" name="pay-center" value="Thanh toán tại trung tâm" class="btn btn-primary btn-lg"> -->
                        <!-- </div> -->
                    <!-- </div> -->
                </form>

            </div>
        </div>
    </div>
</div>
</body>
