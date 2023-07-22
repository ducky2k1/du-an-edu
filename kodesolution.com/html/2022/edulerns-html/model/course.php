<?php
    function loadall_course() {
        $sql = "SELECT * from dtb_course ";
        $listcourse = pdo_query($sql);
        return $listcourse;
    }
?>