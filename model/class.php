<?php
function class_selectAll(){
    $sql="SELECT `dtb_lop`.`id`,`dtb_course`.`name` as `ten_khoa`,`dtb_lop`.`name`,`dtb_customer`.`name` 
    as `ten_customer`,`time`,`dtb_ca_hoc`.`name` as `ten_ca`,`dtb_ca_hoc`.`time_start`,`dtb_ca_hoc`.`time_end`,`customer_id` ,`dtb_course`.`id` as `cou_id`
    FROM `dtb_lop` JOIN `dtb_course` ON `dtb_lop`.`course_id` = `dtb_course`.`id` 
    JOIN `dtb_ca_hoc` ON `dtb_lop`.`ca_hoc_id` = `dtb_ca_hoc`.`id` 
    JOIN `dtb_customer` ON `dtb_lop`.`customer_id` = `dtb_customer`.`id`";
    return pdo_query($sql);
}
// function add_mem($name, $pass, $mail, $anh, $loca, $phone){
//     $sql="INSERT INTO `dtb_member`(`name`, `pass`, `email`, `image`, `location`, `phone`) VALUES (?,?,?,?,?,?)";
//     pdo_execute($sql,$name,$pass, $mail, $anh, $loca, $phone);
// }
function countMem(){
    $sql="SELECT COUNT(*) as `sl` FROM `dtb_lop` JOIN dtb_order_item ON dtb_lop.id = dtb_order_item.lop_id 
    WHERE dtb_order_item.course_id=? AND dtb_lop.id=?";
    pdo_execute($sql);
}

function gv_selectAll(){
    $sql="SELECT * FROM `dtb_customer` WHERE `role`='gv'";
    return pdo_query($sql);
}
function add_class($khoaHoc,$name , $caHoc, $giangVien){

    $sql="INSERT INTO `dtb_lop`(`course_id`, `name`, `customer_id`,`ca_hoc_id`) VALUES (?,?,?,?)";
    pdo_execute($sql,$khoaHoc,$name , $caHoc, $giangVien);
}
function del_class($ma_us){
    $sql= "DELETE FROM `dtb_lop` where `dtb_lop`.`id` = ".$ma_us;
    pdo_execute($sql);
}
?>