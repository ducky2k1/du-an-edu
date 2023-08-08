<?php
function member_selectAll(){
    $sql="SELECT * FROM `dtb_member`";
    return pdo_query($sql);
}
function add_mem($name, $pass, $mail, $anh, $loca, $phone){
    $sql="INSERT INTO `dtb_member`(`name`, `pass`, `email`, `image`, `location`, `phone`) VALUES (?,?,?,?,?,?)";
    pdo_execute($sql,$name,$pass, $mail, $anh, $loca, $phone);
}
function del_mem($ma_us)
{
    // // get order id
    // $sqlSelOrderId = "SELECT `dtb_order`.`id` FROM `dtb_order` WHERE `dtb_order`.`member_id` = ".$ma_us;
    // $runSqlSelOrderId = pdo_query($sqlSelOrderId);
    // $i = 0;
    // foreach ($runSqlSelOrderId as $runSql){
    //     foreach ($runSql as $run){
    //         if($i == 0){
    //             $sqlDelOrderItem= "DELETE FROM `dtb_order_item` where order_id = ".$run;
    //             pdo_execute($sqlDelOrderItem);
    //         }
    //         $i++;
    //     }
    // }
    // delete order in order
    $sqlDelOrder= "DELETE FROM `dtb_hoadon` where member_id = ".$ma_us;
    pdo_execute($sqlDelOrder);
    // delete recom in recom
    $sqlDelRecomn = "DELETE FROM `dtb_recomment` where member_id = ".$ma_us;
    pdo_execute($sqlDelRecomn);
    // delete member in member
    $sql = "DELETE from `dtb_member` where id=" . $ma_us;
    pdo_execute($sql);
}
function edit_member($ma_us){
    $sql="SELECT * FROM `dtb_member` where id=".$ma_us;
    return pdo_query_one($sql);
}
function up_mem($ma_us,$name,$pass, $mail, $img, $loca, $phone){
    $sql="UPDATE `dtb_member` SET `name`=?,`pass`=?,`email`=?,`image`=?,`location`=?,`phone`=? WHERE id=".$ma_us;
    pdo_execute($sql,$name,$pass, $mail, $img, $loca, $phone);
}
?>