<?php
    function setOrder($ma_us,$id_course,$getDate,$id_class){
        $sql = "INSERT INTO `dtb_order` (`id`, `member_id`, `date_buy`, `course_id`, `lop_id`) 
        VALUES (NULL, $ma_us,'$getDate',$id_course,$id_class)";
        pdo_execute($sql);
    }
?>