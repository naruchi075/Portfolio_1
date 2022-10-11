<?php
include_once 'dbConn.php';
//session_start();

//delete button handler
if (isset($_GET['deleteid'])){
    $id=$_GET['deleteid'];

    $sql="DELETE FROM v_gallery WHERE v_id = $id ORDER BY orderVideo;";
    $result=mysqli_query($conn,$sql);
    if($result){
        //message
        //$_SESSION['message'] = "Video has been deleted...";
        //$_SESSION['msg_type'] = "Success";
        header('location:../index_view_video.php');

    } else{
        die(mysqli_error($conn));

    }
    
}