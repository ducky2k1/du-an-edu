<?php
    function getListCart($id_member){
        $sql = "SELECT dtb_course.name as course_name, price
        from dtb_cart 
        join dtb_member on dtb_cart.member_id=dtb_member.id
        join dtb_course on dtb_cart.course_id = dtb_course.id
        where member_id = $id_member
        order by dtb_cart.id  asc";
        $listCart = pdo_query($sql);
        return $listCart;
    }
    function setCart($ma_us,$course_id,$getDate,$id_class){
        $sql = "INSERT INTO `dtb_cart` (`id`,`member_id`, `course_id`,`day_buy`,`class_id`) 
        VALUES (NULL, $ma_us,$course_id,'$getDate',$id_class)";
        pdo_execute($sql);
    }
    function getListCartNew($id_member){
        $sql = "SELECT dtb_course.name as course_name, price, course_id,class_id
        from dtb_cart 
        join dtb_member on dtb_cart.member_id=dtb_member.id
        join dtb_course on dtb_cart.course_id = dtb_course.id
        where member_id = $id_member
        order by dtb_cart.id  desc limit 1";
        $listCart = pdo_query($sql);
        return $listCart;
    }
    function delCartNew($id_member){
        $sql="DELETE FROM `dtb_cart` WHERE member_id=$id_member order by dtb_cart.id  desc limit 1";
        pdo_execute($sql);
    }

    function set_hoadon($mem_id, $lop_id, $vnd, $bank, $regis_time, $time, $status, $hinhthuc) {
        // Xử lí giá trị NULL cho trường `sotien_vnd`
        if ($vnd === null) {
            $vnd_value = "NULL"; // Nếu $vnd là NULL, thì giá trị được gán là NULL (không có dấu nháy đơn)
        } else {
            $vnd_value = intval($vnd); // Chuyển đổi giá trị thành số nguyên nếu không phải NULL
        }
    
        // Xử lí giá trị NULL cho trường `bank_name`
        if ($bank === null) {
            $bank_value = "NULL"; // Nếu $bank là NULL, thì giá trị được gán là NULL (không có dấu nháy đơn)
        } else {
            $bank_value = "'" . $bank . "'"; // Nếu không phải NULL, thì bọc giá trị bằng dấu nháy đơn
        }
    
        // Xử lí giá trị NULL cho trường `register_time`
        if ($regis_time === null) {
            $regis_time_value = "NULL"; // Nếu $regis_time là NULL, thì giá trị được gán là NULL (không có dấu nháy đơn)
        } else {
            $regis_time_value = "'" . $regis_time . "'"; // Nếu không phải NULL, thì bọc giá trị bằng dấu nháy đơn
        }
    
        // Xử lí giá trị NULL cho trường `payment_time`
        if ($time === null) {
            $time_value = "NULL"; // Nếu $time là NULL, thì giá trị được gán là NULL (không có dấu nháy đơn)
        } else {
            $time_value = "'" . $time . "'"; // Nếu không phải NULL, thì bọc giá trị bằng dấu nháy đơn
        }
    
        // Xử lí giá trị NULL cho trường `hinhthuc`
        if ($hinhthuc === null) {
            $hinhthuc_value = "NULL"; // Nếu $hinhthuc là NULL, thì giá trị được gán là NULL (không có dấu nháy đơn)
        } else {
            $hinhthuc_value = "'" . $hinhthuc . "'"; // Nếu không phải NULL, thì bọc giá trị bằng dấu nháy đơn
        }
    
        // Tạo câu lệnh SQL với giá trị đã được xử lí NULL
        $sql = "INSERT INTO `dtb_hoadon` (`id`, `member_id`, `lop_id`, `sotien_vnd`, `bank_name`, `register_time`, `payment_time`, `status`, `hinhthuc`) 
                VALUES (NULL, $mem_id, $lop_id, $vnd_value, $bank_value, $regis_time_value, $time_value, '$status', $hinhthuc_value)";
    
        // Thực thi câu lệnh SQL
        pdo_execute($sql);
    }
    function update_hoadon($mem_id, $lop_id, $bank, $time, $status, $hinhthuc) {
        // Xử lí giá trị NULL cho trường `bank_name`
        if ($bank === null) {
            $bank_value = "NULL"; // Nếu $bank là NULL, thì giá trị được gán là NULL (không có dấu nháy đơn)
        } else {
            $bank_value = "'" . $bank . "'"; // Nếu không phải NULL, thì bọc giá trị bằng dấu nháy đơn
        }
        // Xử lí giá trị NULL cho trường `payment_time`
        if ($time === null) {
            $time_value = "NULL"; // Nếu $time là NULL, thì giá trị được gán là NULL (không có dấu nháy đơn)
        } else {
            $time_value = "'" . $time . "'"; // Nếu không phải NULL, thì bọc giá trị bằng dấu nháy đơn
        }
    
        // Xử lí giá trị NULL cho trường `hinhthuc`
        if ($hinhthuc === null) {
            $hinhthuc_value = "NULL"; // Nếu $hinhthuc là NULL, thì giá trị được gán là NULL (không có dấu nháy đơn)
        } else {
            $hinhthuc_value = "'" . $hinhthuc . "'"; // Nếu không phải NULL, thì bọc giá trị bằng dấu nháy đơn
        }
    
        // Tạo câu lệnh SQL UPDATE với giá trị đã được xử lí NULL và điều kiện WHERE
        $sql = "UPDATE `dtb_hoadon`
                SET `bank_name` = $bank_value, 
                    `payment_time` = $time_value, `status` = '$status', `hinhthuc` = $hinhthuc_value
                WHERE `member_id` = $mem_id AND `lop_id` = $lop_id";
    
        // Thực thi câu lệnh SQL
        pdo_execute($sql);
    }
    function loadall_hoadon_member($id) {
        $sql = "SELECT * from dtb_hoadon where member_id = $id";
        $listhoadon = pdo_query($sql);
        return $listhoadon;
    }
?>