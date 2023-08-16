<?php

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
                    `payment_time` = $time_value, `status` = '$status', `hinhthuc` = $hinhthuc_value , `register_time` = NULL
                WHERE `member_id` = $mem_id AND `lop_id` = $lop_id";
    
        // Thực thi câu lệnh SQL
        pdo_execute($sql);
    }
    function loadall_hoadon_member($id) {
        $sql = "SELECT dtb_lop.name,sotien_vnd,register_time,payment_time,bank_name,`status`,hinhthuc,dtb_hoadon.id FROM dtb_hoadon 
                INNER JOIN dtb_lop ON dtb_hoadon.lop_id = dtb_lop.id
                WHERE member_id = $id";
        $listhoadon = pdo_query($sql);
        return $listhoadon;
    }
    // function loadsame_hoadon_member($mem_id, $lop_id) {
    //     $sql = "SELECT * from dtb_hoadon where member_id = $mem_id and lop_id = $lop_id";
    //     $listhoadon = pdo_query($sql);
    //     return $listhoadon;
    // }
    function loadsame_hoadon_member($mem_id, $lop_id) {
        $sql = "SELECT * from dtb_hoadon where member_id = $mem_id and lop_id = $lop_id";
        $listhoadon = pdo_query($sql);
    
        // Kiểm tra số lượng bản ghi trả về từ câu truy vấn SQL
        $numRows = count($listhoadon);
    
        if ($numRows > 0) {
            // Nếu có bản ghi trả về, trả về false
            return false;
        } else {
            // Nếu không có bản ghi nào trả về, trả về true
            return true;
        }
    }
    function load_same_hoadon($id) {
        $sql = "SELECT `dtb_lop`.`id`,`dtb_lop`.`course_id`,`dtb_lop`.`name` as tenlop,`dtb_lop`.`customer_id`
        ,`dtb_lop`.`time`,`dtb_lop`.`ca_hoc_id`,`dtb_lop`.`day` as ngayhoc
        , `dtb_ca_hoc`.`name` as ca_name, time_start,time_end,
        dtb_customer.name as customer_name, dtb_lop.slot,dtb_course.price,
        dtb_hoadon.id as hoadon_id
        from dtb_hoadon
        join dtb_member on dtb_hoadon.member_id = dtb_member.id 
        join dtb_lop on dtb_hoadon.lop_id = dtb_lop.id 
        join dtb_ca_hoc on dtb_lop.ca_hoc_id=dtb_ca_hoc.id 
        join dtb_customer on dtb_lop.customer_id = dtb_customer.id
        join dtb_course on dtb_lop.course_id = dtb_course.id
        where dtb_hoadon.member_id = $id and `status` = 'Đã thanh toán'
        order by id  asc";
        $listhoadon = pdo_query($sql);
        return $listhoadon;
    }
    function del_hoa_don($id){
        $sql="DELETE FROM `dtb_hoadon` WHERE id=".$id;
        pdo_execute($sql);
    }
?>