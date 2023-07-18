<?php
    function loadall_course() {
        $sql = "SELECT * from dtb_course order by id desc";
        $listcourse = pdo_query($sql);
        return $listcourse;
    }
?>