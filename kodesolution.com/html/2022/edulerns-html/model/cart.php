<?php  


function getListCart($id_member){
$sql = "SELECT dtb_course.name as course_name, price
from dtb_cart
join dtb_member on dtb_cart.member_id=dtb_member.id
join dtb_course on dtb_cart.course_id = dtb_course.id
where member_id = $id_member
order by dtb_cart.id asc";
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
order by dtb_cart.id desc limit 1";
$listCart = pdo_query($sql);
return $listCart;
}
function delCartNew($id_member){
$sql="DELETE FROM `dtb_cart` WHERE member_id=$id_member order by dtb_cart.id desc limit 1";
pdo_execute($sql);
}
function set_hoadon($mem_id, $lop_id, $vnd, $bank, $time){
$sql = "INSERT INTO `dtb_hoadon` (`id`,`member_id`, `lop_id`,`sotien_vnd`,`bank_name`,`payment_time`)
VALUES (NULL, $mem_id, $lop_id, $vnd, '$bank', '$time')";
pdo_execute($sql);

//Gửi email

}

?>