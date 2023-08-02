<?php
    function getComment(){
        $sql="SELECT content, day_comment, dtb_member.name, dtb_member.image,dtb_recomment.id, dtb_course.name as course_name,`status`
                FROM dtb_recomment 
                JOIN dtb_member ON dtb_recomment.member_id = dtb_member.id
                JOIN dtb_course ON dtb_recomment.course_id = dtb_course.id
                ";
        return pdo_query($sql);
    }
    function delComment($id){
        $sqlDelCo="DELETE FROM `dtb_recomment` WHERE id=".$id;
        pdo_execute($sqlDelCo);
    }
    function editComment($id){
        $sql = "UPDATE `dtb_recomment` SET `status`='đã duyệt' WHERE id=".$id;
        pdo_execute($sql);
    }
?>