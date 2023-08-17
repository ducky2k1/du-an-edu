<?php
    function insert_taikhoan_member($email,$pass,$name) {
        $sql = "INSERT INTO `dtb_member` (`id`, `name`, `pass`, `email`, `image`, `location`, `phone`, `birth_day`) 
        VALUES (NULL, '$name', '$pass', '$email', '', '', '0',NULL)";
        pdo_execute($sql);
    }
    function up_mem($ma_us,$name,$pass, $mail, $img, $loca, $phone,$day){
        $sql="UPDATE `dtb_member` SET `name`=?,`pass`=?,`email`=?,`image`=?,`location`=?,`phone`=?,`birth_day`=? WHERE id=".$ma_us;
        pdo_execute($sql,$name,$pass, $mail, $img, $loca, $phone,$day);
    }
?>