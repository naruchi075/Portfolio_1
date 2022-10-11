<?php
  require "header.php";
  require "navbar.php";
?>

<main>
  <section class="gallery-links">
    <div class="wrapper">
      <h2>Photo Gallery</h2>
      <div class="gallery-container">

        <?php
        include_once 'includes/dbConn.php';

        $sql = "SELECT * FROM p_gallery ORDER BY orderGallery DESC;"; 
        $stmt = mysqli_stmt_init($conn);
        if (!mysqli_stmt_prepare($stmt, $sql)){
          echo "SQL statement failed!";
        } else {
            mysqli_stmt_execute($stmt); 
            $result = mysqli_stmt_get_result($stmt);
            //display and fetch data
            while ($row = mysqli_fetch_assoc($result)) {
              echo '<a href="includes/galleryEditMode.php">
                <div style="background-image: url(img/gallery/'.$row["imgFullNameGallery"] . ');"></div>
                <h3>'.$row["titleGallery"].'</h3>
                <p>'.$row["descGallery"].'</p>
              </a>'; 
              ?>
        
        <?php
            }
        }

        ?>
      </div>

      <?php
      if (isset($_SESSION["useruid"])){
        echo '<div class="gallery-upload">
        <!-- put enctype to enable file upload into folder-->
        <form class="form-signup" action="includes/gallery-upload.inc.php" method="post" enctype="multipart/form-data">
          <input type="text" name="filename" placeholder="File name...">
          <input type="text" name="filetitle" placeholder="Image title...">
          <input type="text" name="filedesc" placeholder="Image Description...">
          <input type="file" name="file">
          <button type="submit" name="submit">UPLOAD</button>
        </form>
      </div>';
        }
      ?>
    </div>
  </section>
</main>

<?php
  // And just like we include the header from a separate file, we do the same with the footer.
  require "footer.php";
?>
