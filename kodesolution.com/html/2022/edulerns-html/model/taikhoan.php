<?php
    function insert_taikhoan_member($email,$pass,$name) {
        $sql = "INSERT INTO `dtb_member` (`id`, `name`, `pass`, `email`, `image`, `location`, `phone`) 
                    VALUES (NULL, '$name', '$pass', '$email', '', '', '')";
        pdo_execute($sql);
    }
 
?>