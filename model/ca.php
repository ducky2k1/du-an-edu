<?php
function ca_hoc_selectAll(){
    $sql="SELECT * FROM `dtb_ca_hoc`";
    return pdo_query($sql);
}
function del_ca($ma_us){

    $sql="DELETE FROM `dtb_ca_hoc` WHERE id=".$ma_us;
    pdo_execute($sql);

}
function add_ca($name,$time_s,$time_e){

    $sql="INSERT INTO `dtb_ca_hoc`(`name`, `time_start`, `time_end`) VALUES (?,?,?)";
    pdo_execute($sql,$name,$time_s,$time_e);
}
function edit_ca($ma_us){
    $sql="SELECT * FROM `dtb_ca_hoc` where id=".$ma_us;
    return pdo_query_one($sql);
}
function up_ca($ma_us,$name,$time_s,$time_e){
    $sql="UPDATE `dtb_ca_hoc` SET `name`='".$name."',`time_start`='".$time_s."',`time_end`='".$time_e."' WHERE id=".$ma_us;
    pdo_execute($sql);
}
?>