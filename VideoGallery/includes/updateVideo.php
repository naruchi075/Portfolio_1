
<?php 
//include_once '../header.php';
//include_once '../navbar.php';
?>


<?php
    
    include_once 'dbConn.php';
    //$id = $_GET['updateid'];
    if(isset($_POST['update'])) {
        //$name = $_FILES['file']; // show and catch code execution in browser/live server
        //echo"<pre>";
        //print_r($file_name);
        //exit();
        $id = $_GET["updateid"];
        //form input
        
        $videoTitle = $_POST['filetitle'];
        $videoDesc = $_POST['filedesc'];
    
        //file import to folder
        //$file_name = $_FILES['file']['name'];
        //$file_type = $_FILES['file']['type'];
        //$temp_name = $_FILES['file']['tmp_name'];
        //$file_size = $_FILES['file']['size'];
        //$error = $_FILES['file']['error'];
        $sql = "UPDATE v_gallery SET v_title = '$videoTitle', descVideo = '$videoDesc' 
        WHERE v_id ='$id';";
        
        $result = mysqli_query($conn,$sql);
        if($result){
            header('location:../index_view_video.php');
        }else {
            die(mysqli_error($conn));
        }
    
    }
    ?>
        
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update video</title>

    <!--<link rel="stylesheet" href="assets/css/reset.css">-->

    <link rel="stylesheet" href="../css/reset.css">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/bootstrap5.min.css">
</head>
<body>

<main>
  <section class="gallery-links">
        <div class="wrapper">
            <h2>Update Gallery</h2>
                <div class ="gallery-upload">
        
                    <form  class="form-signup" action="" method="post">

                            <label for=""><strong>Update here:</strong></label>
                            <input type="text" name="filetitle" placeholder="Video title...">
                            <input type="text" name="filedesc" placeholder="Video Description...">
                        
                        <?php if(isset($success)) {?>
                        <div class="alert alert-success">

                            <?php echo $success;?>

                        </div>
                            <?php } ?>
                            <?php if(isset($failed)) {?>
                        <div class="alert alert-danger">

                            <?php echo $failed;?>

                        </div>
                            <?php }?>

                            <?php if(isset($msz)){ ?>
                        <div class= "alert alert-danger">

                            <?php echo $msz;?>

                        </div>
                            
                            <?php }?>
                            <hr>
                            <button type="submit" name="update" values="Upload">UPDATE</button>
                            <button onclick="location.href='../index_view_video.php'" type="button">CANCEL</button>
                            <br>
                    </form>
                </div>

        </div>
  </section>
</main>

<?php
include_once '../footer.php';?>



