<?php include_once 'header.php';
      include_once 'navbar.php';
?>

    <div class="container mt-3 mb-3">
        <h1><b>Video Gallery</b></h1>
            
                <a href="video_gallery.php" class="btn btn-primary mt-3">Upload New Video</a>
            <hr>
        <div class="row">
            <?php
            include_once 'includes/dbConn.php';

            $sql = "SELECT * FROM v_gallery ORDER BY orderVideo DESC;";
            $stmt = mysqli_stmt_init($conn);
            if (!mysqli_stmt_prepare($stmt, $sql)){
                echo "SQL statement failed!";
            } else {
                mysqli_stmt_execute($stmt);
                $result = mysqli_stmt_get_result($stmt);
                //display and fetch data
                while($row = mysqli_fetch_assoc($result)) {

                ?>

                <div class="col-md-4">
                    <video id="video" width="100%" controls="controls">
                        <source src="upload/<?=$row['vidFullNameGallery']?>" type="video/mp4" />
                        <source src="upload/<?=$row['vidFullNameGallery']?>" type="video/ogg" />
                        <source src="upload/<?=$row['vidFullNameGallery']?>" type="video/webm" />
                    </video>
                    <?php echo '<p>'.$row["v_title"].'</p>';?>
                    <?php echo '<p>'.$row["descVideo"].'</p>';?>
                          <td><a href="includes/updateVideo.php?updateid=<?php echo $row['v_id'];?>"
                           class="btn btn-info">Edit</a></td>

                          <td><a href="includes/deleteVideo.php?deleteid=<?php echo $row['v_id'];?>"
                          class="btn btn-danger">Delete</a></td>
                          
        
                    <hr>
                </div>
    
       <?php }
            
            } ?>
            
            

           
        </div>
    </div>
    
<?php
    
    include_once 'footer.php';
?>

<?php 



?>