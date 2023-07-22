<?php
    // unset($_SESSION['login']);
    unset($_SESSION['email']);
    session_destroy();
    // header("location:./index.php");
    echo '<script>window.location.href="./index.php"</script>';
    die;
?>


