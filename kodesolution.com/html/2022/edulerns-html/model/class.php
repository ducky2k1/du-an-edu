<?php
    function load_same_course($id) {
        $sql = "SELECT * from dtb_lop where course_id = ".$id;
        $listclass = pdo_query($sql);
        return $listclass;
    }
?>