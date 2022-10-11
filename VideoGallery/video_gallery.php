
<?php include_once 'header.php';
      include_once 'navbar.php';
      //if(isset($_SESSION['message'])): 
?>



<main>
  <section class="gallery-links">
        <div class="wrapper">
            <h2>Video Gallery</h2>
                <div class ="gallery-upload">
        
                    <form  class="form-signup" action="includes/video_gallery.inc.php" method="post" enctype="multipart/form-data">

                            <label for=""><strong>Upload a Video Here:</strong></label>
                            <input type="text" name="name" placeholder="File name...">
                            <input type="text" name="filetitle" placeholder="Video title...">
                            <input type="text" name="filedesc" placeholder="Video Description...">
                            <input type="file" name="file" class="form-control">
                        
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
                            <button type="submit" name="upload" values="Upload">UPLOAD</button>
                            <br>
    
                            <button onclick="location.href='index_view_video.php'" type="button">GALLERY</button> 
                    </form>
                </div>

        </div>
  </section>
</main>

<?php
include_once 'footer.php';
?>