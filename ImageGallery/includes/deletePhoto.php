<?php
include_once 'dbConn.php';
//session_start();

//delete button handler
if (isset($_GET['deleteid'])){
    $id=$_GET['deleteid'];

    $sql="DELETE FROM p_gallery WHERE idGallery = $id;";
    $result = mysqli_query($conn,$sql);
    if($result){
        //message
        //$_SESSION['message'] = "Video has been deleted...";
        //$_SESSION['msg_type'] = "Success";
        header('location:galleryEditmode.php');

    } else{
        die(mysqli_error($conn));

    }
    
}