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

    $sqlDelOrItem= "DELETE FROM `dtb_order_item` where course_id = ".$ma_us;
    pdo_execute($sqlDelOrItem);

    $sql= "DELETE FROM `dtb_course` where id = ".$ma_us;
    pdo_execute($sql);
}
?>