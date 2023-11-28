<?php
function product_selectAll(){
    $sql="SELECT * FROM `dtb_course`";
    return pdo_query($sql);
}

function add_pro($fullname,$gia,$mota){
    $sql="INSERT INTO `dtb_course`(`name`, `price`, `mo_ta`) VALUES (?,?,?)";
    pdo_execute($sql,$fullname,$gia,$mota);
}
function del_course($ma_us){
    $sqlDelCom="DELETE FROM `dtb_recomment` WHERE course_id=".$ma_us;
    pdo_execute($sqlDelCom);

    $sqlDelClass= "DELETE FROM `dtb_lop` where course_id = ".$ma_us;
    pdo_execute($sqlDelClass);

    $sql= "DELETE FROM `dtb_course` where id = ".$ma_us;
    pdo_execute($sql);
}
function edit_pro($ma_us){
    $sql="SELECT * FROM `dtb_course` where id=".$ma_us;
    return pdo_query_one($sql);
}
function up_pro($ma_us,$fullname, $gia, $mota){
    $sql="UPDATE `dtb_course` SET `name`='".$fullname."',`price`='".$gia."',`mo_ta`='".$mota."' WHERE id=".$ma_us;
    pdo_execute($sql);
}
function count_course(){
    $sql ="SELECT COUNT(id) as count_course FROM dtb_course";
    return pdo_query($sql);
}
?>