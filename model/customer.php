<?php
function customer_selectAll(){
    $sql="SELECT * FROM `dtb_customer`";
    return pdo_query($sql);
}
function add_cus($name, $pass, $mail, $anh, $loca, $phone,$date){
    $sql="INSERT INTO `dtb_customer`(`name`, `pass`, `email`, `phone`, `location`, `image`, `birth_day`) VALUES (?,?,?,?,?,?,?)";
    pdo_execute($sql,$name,$pass, $mail, $anh, $loca, $phone,$date);
}
function del_cus($ma_us)
{

    // delete class
    $sqlDelOrder= "DELETE FROM `dtb_lop` where customer_id = ".$ma_us;
    pdo_execute($sqlDelOrder);

    // delete customer
    $sql = "DELETE from `dtb_customer` where id=" . $ma_us;
    pdo_execute($sql);
}
function up_cus($ma_us,$name,$pass, $mail, $img, $phone, $loca, $date){
    $sql="UPDATE `dtb_customer` SET `name`='".$name."',`pass`='".$pass."',`email`='".$mail."',`image`='".$img."',`phone`='".$phone."',`location`='".$loca."',`birth_day`='".$date."' WHERE id=".$ma_us;
    pdo_execute($sql);
}
function edit_customer($ma_us){
    $sql="SELECT * FROM `dtb_customer` where id=".$ma_us;
    return pdo_query_one($sql);
}
function count_customer(){
    $sql ="SELECT COUNT(id) as count_gv FROM dtb_customer WHERE `role`='gv'";
    return pdo_query($sql);
}
?>