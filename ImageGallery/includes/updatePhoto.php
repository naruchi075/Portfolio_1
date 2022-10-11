<?php
  //require "../header.php";
  //require "../navbar.php";
  session_start();
  include_once '../../includes/functions.inc.php';
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
        
        $imageTitle = $_POST['filetitle'];
        $imageDesc = $_POST['filedesc'];
    
        //file import to folder
        //$file_name = $_FILES['file']['name'];
        //$file_type = $_FILES['file']['type'];
        //$temp_name = $_FILES['file']['tmp_name'];
        //$file_size = $_FILES['file']['size'];
        //$error = $_FILES['file']['error'];
        $sql = "UPDATE p_gallery SET titleGallery = '$imageTitle', descGallery = '$imageDesc' 
        WHERE idGallery ='$id';";
        
        $result = mysqli_query($conn,$sql);
        if($result){
            header("location:galleryEditMode.php?upload=success");
        }else {
            echo 'Update not successful';
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
    <title>Document</title>
    
    <!--<link rel="stylesheet" href="css/reset.css">-->
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/bootstrap5.min.css">

</head>
<body>

<main>
  <section class="gallery-links">
    <div class="wrapper">
      <h2>Update Gallery</h2>

            <?php
                if (isset($_SESSION["useruid"])){
                    echo '<div class="gallery-upload">
                    <!-- put enctype to enable file upload into folder-->
                    <form class="form-signup" action="" method="post" enctype="">
                    <input type="text" name="filetitle" placeholder="Image title...">
                    <input type="text" name="filedesc" placeholder="Image Description...">
                    <button type="submit" name="update" class="btn btn-primary">UPDATE</button>
                    <a href = "galleryEditMode.php" class="btn btn-success btn-sm">CANCEL</a>
                    </form>
                </div>';
                    }
            ?>
    </div>
  </section>
</main>
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap5.bundle.min.js"></script>
<script src="js/custom.js"></script>

</body>
</html>
