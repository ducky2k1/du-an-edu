<?php
function class_selectAll(){
    $sql="SELECT `dtb_lop`.`id`,`dtb_course`.`name` as `ten_khoa`,`dtb_lop`.`name`,`dtb_customer`.`name` 
    as `ten_customer`,`time`,`dtb_ca_hoc`.`name` as `ten_ca`,`dtb_ca_hoc`.`time_start`
    ,`dtb_ca_hoc`.`time_end`,`customer_id` ,`dtb_course`.`id` as `cou_id`,`dtb_lop`.`day`, slot
    FROM `dtb_lop` JOIN `dtb_course` ON `dtb_lop`.`course_id` = `dtb_course`.`id` 
    JOIN `dtb_ca_hoc` ON `dtb_lop`.`ca_hoc_id` = `dtb_ca_hoc`.`id` 
    JOIN `dtb_customer` ON `dtb_lop`.`customer_id` = `dtb_customer`.`id`
    order by id asc";
    return pdo_query($sql);
}
function class_selectAll_teacher($id){
    $sql="SELECT `dtb_lop`.`id`,`dtb_course`.`name` as `ten_khoa`,`dtb_lop`.`name`,`dtb_customer`.`name` 
    as `ten_customer`,`time`,`dtb_ca_hoc`.`name` as `ten_ca`,`dtb_ca_hoc`.`time_start`
    ,`dtb_ca_hoc`.`time_end`,`customer_id` ,`dtb_course`.`id` as `cou_id`,`dtb_lop`.`day`, slot
    FROM `dtb_lop` JOIN `dtb_course` ON `dtb_lop`.`course_id` = `dtb_course`.`id` 
    JOIN `dtb_ca_hoc` ON `dtb_lop`.`ca_hoc_id` = `dtb_ca_hoc`.`id` 
    JOIN `dtb_customer` ON `dtb_lop`.`customer_id` = `dtb_customer`.`id`
    where customer_id = $id
    order by id asc";
    return pdo_query($sql);
}
function class_selectAllById($id){
    $sql="SELECT `dtb_lop`.`id`,`dtb_course`.`name` as `ten_khoa`,`dtb_lop`.`name`,`dtb_customer`.`name` 
    as `ten_customer`,`time`,`dtb_ca_hoc`.`name` as `ten_ca`,`dtb_ca_hoc`.`time_start`
    ,`dtb_ca_hoc`.`time_end`,`customer_id` ,`dtb_course`.`id` as `cou_id`,`dtb_lop`.`day`, slot
    FROM `dtb_lop` JOIN `dtb_course` ON `dtb_lop`.`course_id` = `dtb_course`.`id` 
    JOIN `dtb_ca_hoc` ON `dtb_lop`.`ca_hoc_id` = `dtb_ca_hoc`.`id` 
    JOIN `dtb_customer` ON `dtb_lop`.`customer_id` = `dtb_customer`.`id`
    WHERE dtb_course.id = $id
    order by id asc";
    return pdo_query($sql);
}
function class_selectAllById_teacher($idlh,$id){
    $sql="SELECT `dtb_lop`.`id`,`dtb_course`.`name` as `ten_khoa`,`dtb_lop`.`name`,`dtb_customer`.`name` 
    as `ten_customer`,`time`,`dtb_ca_hoc`.`name` as `ten_ca`,`dtb_ca_hoc`.`time_start`
    ,`dtb_ca_hoc`.`time_end`,`customer_id` ,`dtb_course`.`id` as `cou_id`,`dtb_lop`.`day`, slot
    FROM `dtb_lop` JOIN `dtb_course` ON `dtb_lop`.`course_id` = `dtb_course`.`id` 
    JOIN `dtb_ca_hoc` ON `dtb_lop`.`ca_hoc_id` = `dtb_ca_hoc`.`id` 
    JOIN `dtb_customer` ON `dtb_lop`.`customer_id` = `dtb_customer`.`id`
    WHERE dtb_course.id = $idlh && customer_id = $id
    order by id asc";
    return pdo_query($sql);
}

function gv_selectAll(){
    $sql="SELECT * FROM `dtb_customer` WHERE `role`='gv'";
    return pdo_query($sql);
}
function add_class($khoaHoc,$name , $caHoc, $giangVien,$ngayHoc){

    $sql="INSERT INTO `dtb_lop`(`course_id`, `name`, `customer_id`,`ca_hoc_id`,`day`) VALUES (?,?,?,?,?)";
    pdo_execute($sql,$khoaHoc,$name , $caHoc, $giangVien,$ngayHoc);
}
function del_class($ma_us){
    $sql= "DELETE FROM `dtb_lop` where `dtb_lop`.`id` = ".$ma_us;
    pdo_execute($sql);
}
function edit_class($ma_us){
    $sql="SELECT `dtb_lop`.`id`,`dtb_course`.`name` as `ten_khoa`,`dtb_lop`.`name`,`dtb_customer`.`name` 
    as `ten_customer`,`time`,`dtb_ca_hoc`.`name` as `ten_ca`,`dtb_ca_hoc`.`time_start`
    ,`dtb_ca_hoc`.`time_end`,`customer_id` ,`dtb_course`.`id` as `cou_id`,`dtb_lop`.`day`,
    `dtb_ca_hoc`.`id` as `ca_id`
    FROM `dtb_lop` JOIN `dtb_course` ON `dtb_lop`.`course_id` = `dtb_course`.`id` 
    JOIN `dtb_ca_hoc` ON `dtb_lop`.`ca_hoc_id` = `dtb_ca_hoc`.`id` 
    JOIN `dtb_customer` ON `dtb_lop`.`customer_id` = `dtb_customer`.`id` where dtb_lop.id=".$ma_us;
    return pdo_query_one($sql);
}
function up_class($ma_us,$name,$caHoc,$time,$giangVien,$ngayHoc){
    $sql="UPDATE `dtb_lop` SET `name`='".$name."',`customer_id`='".$giangVien."',`time`='".$time."',`ca_hoc_id`='".$caHoc."',`day`='".$ngayHoc."' WHERE `dtb_lop`.id=".$ma_us;
    
    pdo_execute($sql);
}
function count_class(){
    $sql ="SELECT COUNT(id) as count_class FROM dtb_lop";
    return pdo_query($sql);
}
function count_class_for_teacher($id){
    $sql ="SELECT COUNT(id) as count_class FROM dtb_lop where customer_id = $id";
    return pdo_query($sql);
}
function member_class($id_class){
    $sql ="SELECT dtb_member.name,dtb_lop.name as lop_name,dtb_member.location,dtb_member.phone,dtb_member.email,dtb_member.image
    FROM dtb_lop
    JOIN dtb_hoadon ON dtb_lop.id = dtb_hoadon.lop_id
    JOIN dtb_member ON dtb_hoadon.member_id = dtb_member.id
    WHERE dtb_lop.id = ".$id_class;
    return pdo_query($sql);
}
function get_class_all($id){
    $sql="SELECT * FROM dtb_lop WHERE id =".$id;
    return pdo_query($sql);
}
function member_class_for_teacher($id){
    $sql ="SELECT dtb_member.name,dtb_lop.name as lop_name,dtb_member.location,dtb_member.phone,dtb_member.email,dtb_member.image
    FROM dtb_lop
    JOIN dtb_hoadon ON dtb_lop.id = dtb_hoadon.lop_id
    JOIN dtb_member ON dtb_hoadon.member_id = dtb_member.id
    WHERE dtb_lop.customer_id = ".$id;
    return pdo_query($sql);
}
?>