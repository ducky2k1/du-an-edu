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
?>