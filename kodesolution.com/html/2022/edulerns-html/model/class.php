<?php
    function load_same_course($id) {
        $sql = "SELECT `dtb_lop`.`id`,`dtb_lop`.`course_id`,`dtb_lop`.`name`,`dtb_lop`.`customer_id`
        ,`dtb_lop`.`time`,`dtb_lop`.`ca_hoc_id`,`dtb_lop`.`day`
        , `dtb_ca_hoc`.`name` as ca_name, time_start,time_end,
        dtb_customer.name as customer_name, dtb_lop.slot,dtb_course.price
        from dtb_lop 
        join dtb_ca_hoc on dtb_lop.ca_hoc_id=dtb_ca_hoc.id 
        join dtb_customer on dtb_lop.customer_id = dtb_customer.id
        join dtb_course on dtb_lop.course_id = dtb_course.id
        where course_id = $id 
        order by id  asc";
        $listclass = pdo_query($sql);
        return $listclass;
    }
    function list_ca(){
        $sql="SELECT * FROM `dtb_ca_hoc`";
        return pdo_query($sql);
    }
    function count_num($id){
        $sql ="SELECT COUNT(lop_id) as count_lop_id
        FROM dtb_order
        WHERE lop_id = $id";
        return pdo_query($sql);
    }


?>