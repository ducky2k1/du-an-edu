<?php
    function order_selectAll(){
        $sql="SELECT dtb_hoadon.id as order_id, dtb_member.name as member_name, dtb_member.id as member_id, 
        dtb_member.phone,dtb_member.email,dtb_member.location, sotien_vnd , register_time , dtb_lop.name as class_name,`status`,
        payment_time,hinhthuc
        FROM `dtb_hoadon` 
        JOIN dtb_member ON dtb_hoadon.member_id = dtb_member.id
        JOIN dtb_lop ON dtb_hoadon.lop_id = dtb_lop.id
        ";
        return pdo_query($sql);
    }
    function del_order($ma_us){
        $sqlDelOr="DELETE FROM `dtb_hoadon` WHERE id=".$ma_us;
        pdo_execute($sqlDelOr);

    }
    function edit_order($ma_us,$currentDateTime){
        $sqlEdOr="UPDATE `dtb_hoadon` SET `payment_time`='$currentDateTime',`status`='Đã thanh toán' WHERE id=".$ma_us;
        pdo_execute($sqlEdOr);
    }

    function count_num($id){
        $sql ="SELECT COUNT(lop_id) as count_lop_id
        FROM dtb_hoadon
        WHERE lop_id = $id && dtb_hoadon.status = 'Đã thanh toán'";
        return pdo_query($sql);
    }
    function setOrder($ma_us,$id_course,$getDate,$id_class,$sumAll){
        $sql = "INSERT INTO `dtb_order` (`id`, `member_id`, `date_buy`, `course_id`, `lop_id`,`tong_tien`) 
        VALUES (NULL, $ma_us,'$getDate',$id_course,$id_class,$sumAll)";
        pdo_execute($sql);
    }
    function count_order(){
        $sql ="SELECT COUNT(id) as count_order FROM dtb_hoadon WHERE `status` = 'Đã thanh toán'";
        return pdo_query($sql);
    }
    function count_not_order(){
        $sql ="SELECT COUNT(id) as count_order FROM dtb_hoadon WHERE `status` = 'Chưa thanh toán'";
        return pdo_query($sql);
    }
    function tong_tien(){
        $sql = "SELECT SUM(sotien_vnd) AS sum
        FROM dtb_hoadon
        WHERE status = 'Đã thanh toán'";
        return pdo_query($sql);
    }

    function getOrder(){
        $sql="SELECT SUM(sotien_vnd) as tong,dtb_course.name as course_name FROM `dtb_hoadon` 
        JOIN dtb_lop ON dtb_hoadon.lop_id = dtb_lop.id 
        JOIN dtb_course on dtb_lop.course_id = dtb_course.id
        GROUP BY dtb_course.name";
        return pdo_query($sql);
    }
    function getOrderByDay($date){
        $sql="SELECT SUM(sotien_vnd) as tong,dtb_course.name as course_name FROM `dtb_hoadon` 
        JOIN dtb_lop ON dtb_hoadon.lop_id = dtb_lop.id 
        JOIN dtb_course on dtb_lop.course_id = dtb_course.id
        WHERE dtb_hoadon.payment_time = '$date'
        GROUP BY dtb_course.name";
        return pdo_query($sql);
    }


?>