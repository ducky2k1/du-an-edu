<!-- <?php
    // session_start();
    // require "./model/pdo.php";
    // require "./model/cart.php";
    // $vnd = $_GET['vnp_Amount'] / 2350000;
    // $hinhthuc = 'Chuyển khoản';
    // $status = 'Đã thanh toán';
    // $dateTime = new DateTime();
    // $currentDateTime = $dateTime->format("Y-m-d H:i:s");
    // if(loadsame_hoadon_member($_SESSION['id_mem'], $_SESSION['id_class']) == true) {
        // set_hoadon($_SESSION['id_mem'], $_SESSION['id_class'], $vnd, $_GET['vnp_BankCode'], $currentDateTime, $_GET['vnp_PayDate'], $status, $hinhthuc);
    // } else {
        // update_hoadon($_SESSION['id_mem'], $_SESSION['id_class'], $_GET['vnp_BankCode'], $_GET['vnp_PayDate'], $status, $hinhthuc);
    // }
?>
<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Successful!</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet">
    </head>

    <body>
        <div class="vh-100 d-flex justify-content-center align-items-center">
            <div class="card col-md-4 bg-white shadow-md p-5">
                <div class="mb-4 text-center">
                    <svg xmlns="http://www.w3.org/2000/svg" class="text-success" width="75" height="75"
                        fill="currentColor" class="bi bi-check-circle" viewBox="0 0 16 16">
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

</html>  -->
<?php
    session_start();
    require "./model/pdo.php";
    require "./model/cart.php";
    $vnd = $_GET['vnp_Amount'] / 2350000;
    $hinhthuc = 'Chuyển khoản';
    $status = 'Đã thanh toán';
    if($_GET['vnp_TransactionNo'] != 0) {
        if(loadsame_hoadon_member($_SESSION['id_mem'], $_SESSION['id_class']) == true) {
            set_hoadon($_SESSION['id_mem'], $_SESSION['id_class'], $vnd, $_GET['vnp_BankCode'], NULL, $_GET['vnp_PayDate'], $status, $hinhthuc);
        } else {
            update_hoadon($_SESSION['id_mem'], $_SESSION['id_class'], $_GET['vnp_BankCode'], $_GET['vnp_PayDate'], $status, $hinhthuc);
        }
    }
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
        <title>Successful!</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet">
    </head>

    <body>
        <div class="vh-100 d-flex justify-content-center align-items-center">
            <div class="card col-md-4 bg-white shadow-md p-5">
                
                <div class="text-center">
                    <?php if($_GET['vnp_TransactionNo'] != 0) {
                        echo '
                        <div class="mb-4 text-center">
                    <svg xmlns="http://www.w3.org/2000/svg" class="text-success" width="75" height="75"
                        fill="currentColor" class="bi bi-check-circle" viewBox="0 0 16 16">
                        <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z" />
                        <path
                            d="M10.97 4.97a.235.235 0 0 0-.02.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-1.071-1.05z" />
                    </svg>
                </div>
                        <h1>Successful !</h1> 
                        <p>We have send the link to your inbox. Lorem ipsum dolor sit,lorem lorem </p>
                        <a href="./index.php" class="btn btn-outline-success">Back Home</a>';
                        } else {
                            echo '<h1>Cancel succcess !</h1> 
                            <a href="./index.php" class="btn btn-outline-success">Back Home</a>';
                        }
                    ?>
                </div>
            </div>
    </body>

</html>