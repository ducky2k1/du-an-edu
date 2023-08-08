<?php
    function getComment($id){
        $sql="SELECT content, day_comment, dtb_member.name, dtb_member.image
                FROM dtb_recomment 
                JOIN dtb_member ON dtb_recomment.member_id = dtb_member.id
                JOIN dtb_course ON dtb_recomment.course_id = dtb_course.id
                WHERE dtb_recomment.course_id =$id && dtb_recomment.status = 'đã duyệt'";
        return pdo_query($sql);
    }
    function postComment($mem_id,$content,$course_id,$getDate){
        $sql="INSERT INTO `dtb_recomment`(`member_id`, `content`, `course_id`, `day_comment`) 
        VALUES ('$mem_id','$content','$course_id','$getDate')";
        return pdo_execute($sql);
    }
    function getAllComment(){
        $sql="SELECT content,dtb_member.name, dtb_member.image, dtb_course.name as course_name
        FROM dtb_recomment 
        JOIN dtb_member ON dtb_recomment.member_id = dtb_member.id
        JOIN dtb_course ON dtb_recomment.course_id = dtb_course.id
        WHERE dtb_recomment.status = 'đã duyệt'";
        return pdo_query($sql);
    }


?>