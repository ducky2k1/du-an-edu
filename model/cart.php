<?php
    function getListCart(){
        $sql="SELECT dtb_cart.id as cart_id, dtb_course.name as course_name, dtb_member.name as member_name, dtb_member.id as member_id, 
        dtb_member.phone,dtb_member.email,dtb_member.location, dtb_course.price , dtb_cart.day_buy , dtb_lop.name as class_name,`status`,
        tong_tien
        FROM `dtb_cart` 
        JOIN dtb_course ON dtb_cart.course_id = dtb_course.id
        JOIN dtb_member ON dtb_cart.member_id = dtb_member.id
        JOIN dtb_lop ON dtb_cart.class_id = dtb_lop.id
        order by dtb_cart.id  asc
        ";
        return pdo_query($sql);
    }
    function del_cart($ma_cart){
        $sqlDelOr="DELETE FROM `dtb_cart` WHERE id=".$ma_cart;
        pdo_execute($sqlDelOr);
    }
    function getListCartNew($id_member){
        $sql = "SELECT dtb_course.name as course_name, price, course_id,class_id,day_buy,tong_tien
        from dtb_cart 
        join dtb_member on dtb_cart.member_id=dtb_member.id
        join dtb_course on dtb_cart.course_id = dtb_course.id
        where member_id = $id_member
        order by dtb_cart.id  desc limit 1";
        $listCart = pdo_query($sql);
        return $listCart;
    }
?>