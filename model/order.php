<?php
    function order_selectAll(){
        $sql="SELECT dtb_order.id as order_id, dtb_course.name as course_name, dtb_member.name as member_name, dtb_member.id as member_id, 
        dtb_member.phone,dtb_member.email,dtb_member.location, dtb_course.price , dtb_order.date_buy
        FROM `dtb_order` JOIN dtb_order_item ON dtb_order.id = dtb_order_item.order_id 
        JOIN dtb_course ON dtb_order_item.course_id = dtb_course.id
        JOIN dtb_member ON dtb_order.member_id = dtb_member.id";
        return pdo_query($sql);
    }
    function del_order($ma_us){
        $sqlDelOrItem="DELETE FROM `dtb_order_item` WHERE order_id=".$ma_us;
        pdo_execute($sqlDelOrItem);
        $sqlDelOr="DELETE FROM `dtb_order` WHERE id=".$ma_us;
        pdo_execute($sqlDelOr);

    }


?>