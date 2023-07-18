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
?>