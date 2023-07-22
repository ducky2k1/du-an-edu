<?php
    function load_same_course($id) {
        $sql = "SELECT * from dtb_lop where course_id = ".$id;
        $listclass = pdo_query($sql);
        return $listclass;
    }
    function loadall_info_class($id) {
        $sql = "SELECT dtb_lop.name as tenlop, dtb_ca_hoc.name as cahoc, 
                    dtb_ca_hoc.time_start as cahoc_start, dtb_ca_hoc.time_end as cahoc_end,  
                    dtb_customer.name as tengv, dtb_course.price as gia, dtb_course.name as tenkh
                    from dtb_lop 
                    INNER JOIN dtb_course on dtb_lop.course_id=dtb_course.id
                        INNER JOIN dtb_customer on dtb_lop.customer_id=dtb_customer.id
                            INNER JOIN dtb_ca_hoc on dtb_lop.ca_hoc_id=dtb_ca_hoc.id
                                WHERE dtb_lop.course_id = ".$id;
        $list_infoclass = pdo_query($sql);
        return $list_infoclass;
    }
?>