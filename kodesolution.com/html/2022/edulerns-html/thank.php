<?php
function currency_format($number) {
     if (!empty($number)) {
         return number_format($number, 0, ',', '.') . " VNĐ";
     }
     if($number==0)return "0 VNĐ";
 }

    session_start();
    require "./model/pdo.php";
    require "./model/cart.php";
    //Gui email
    $Mem_id=intval($_SESSION['id_mem']);
    $Mem_email=mysqli_fetch_array(mysqli_query($db_con,"SELECT email FROM dtb_member WHERE id=$Mem_id"))['email'];
    $Mem_name=mysqli_fetch_array(mysqli_query($db_con,"SELECT name FROM dtb_member WHERE id=$Mem_id"))['name'];
    $Mem_location=mysqli_fetch_array(mysqli_query($db_con,"SELECT location FROM dtb_member WHERE id=$Mem_id"))['location'];
    $Mem_phone=mysqli_fetch_array(mysqli_query($db_con,"SELECT phone FROM dtb_member WHERE id=$Mem_id"))['phone'];


     
    $money=currency_format($_GET['vnp_Amount']);
    $date=substr($_GET['vnp_PayDate'],6,2)."-".substr($_GET['vnp_PayDate'],4,2)."-".substr($_GET['vnp_PayDate'],0,4);
    $subject="Payment Success "; 

//     $message="<h1 style='color:orange'>Kính chào người mua :".$Mem_name."<h1><br><h3 style='color:red'>Hình thức thanh toán: ".$_GET['vnp_CardType']." ".$_GET['vnp_BankCode']."<br>Mã thanh toán: ".$_GET['vnp_BankTranNo']."<br>Số tiền: ".$money."<br>Ngày: ".$date."</h3>";
    //
    $message=urlencode('
    <div style="margin-left:30px;width:350px;padding:40px;border:1px #ccc solid;border-radius:10px;color:#000;background-image: linear-gradient(-45deg, #cfcfcf, transparent);">
    <h1 style="font-weight:400;text-align:center">Hoá đơn thanh toán</h1>
                            <div>🔵 <b style="padding-left:5px;color:#888a8d;margin-top:">To : </b><b style="color:#478fcc;font-weight: 500;margin-top:-30px;margin-left:30px">'.$Mem_name.'</b>
                            <div>🔵 <b style="padding-left:5px;color:#888a8d;margin-top:">Email : </b><b style="color:#478fcc;font-weight: 500;margin-top:-30px;margin-left:30px">'.$Mem_email.'</b>
                            <div>🔵 <b style="padding-left:5px;color:#888a8d;margin-top:">Location : </b><b style="color:#959595;font-weight: 500;margin-top:-30px;margin-left:30px">'.$Mem_location.'</b>
                            <div>🔵 <b style="padding-left:5px;color:#888a8d;margin-top:">Number Phone : </b><b style="color:#000;font-weight: 500;margin-top:-30px;margin-left:30px">'.$Mem_phone.'</b>


                    <div style="border-bottom: 1px #ccc dashed;width:250px;height:10px;margin:10px 0px"></div>
                    <div style="margin: 20px 0px;">
                           
                            <div>Price : <b style="color:#009688;font-weight: bold;">'.$money.'</b></div>
                    </div>
</div>
');
    $vnd = $_GET['vnp_Amount'] / 100;
   // set_hoadon($_SESSION['id_mem'], $_SESSION['id_class'], $vnd, $_GET['vnp_BankCode'], $_GET['vnp_PayDate']);
    // echo $_SESSION['id_class'].'<br>';
    // echo $_SESSION['id_mem'].'<br>';
    // echo $_SESSION['sumAll'];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bootstrap 5 Thank You Example</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <script>
    var xhttp = new XMLHttpRequest();
    xhttp.open("GET",
        "https://ketquaday99.com/api/AutoSendEmail.php?email=<?=$Mem_email?>&message=<?=$message?>&subject=<?=$subject?>",
        true);
    xhttp.send();
    </script>
    <div class="vh-100 d-flex justify-content-center align-items-center">
        <div class="card col-md-4 bg-white shadow-md p-5">
            <div class="mb-4 text-center">
                <svg xmlns="http://www.w3.org/2000/svg" class="text-success" width="75" height="75" fill="currentColor"
                    class="bi bi-check-circle" viewBox="0 0 16 16">
                    <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z" />
                    <path
                        d="M10.97 4.97a.235.235 0 0 0-.02.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-1.071-1.05z" />
                </svg>
            </div>
            <div class="text-center">
                <h1>Successful !</h1>
                <p>We've send the link to your inbox. Lorem ipsum dolor sit,lorem lorem </p>
                <a href="./index.php" class="btn btn-outline-success">Back Home</a>
            </div>
        </div>
</body>

</html>