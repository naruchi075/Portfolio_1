<?php

/* check if there are submit button */
if (isset($_POST['submit'])) {

  $newFileName = $_POST['filename'];
  if (empty($newFileName)) {
    $newFileName = "gallery";
  } else {
    /*filter and remove unusual chracters*/ 
    $newFileName = strtolower(str_replace(" ", "-", $newFileName));
  }
  $imageTitle = $_POST['filetitle'];
  $imageDesc = $_POST['filedesc'];

  $file = $_FILES['file'];

  $fileName = $file["name"];
  $fileType = $file["type"];
  $fileTempName = $file["tmp_name"];
  $fileError = $file["error"];
  $fileSize = $file["size"];

  $fileExt = explode(".", $fileName);/* take apart the name and take the last one*/
  $fileActualExt = strtolower(end($fileExt));/*turn extension to lower case*/

  $allowed = array("jpg", "jpeg", "png");/*tell what type of file allowed to be added*/ 


  if (in_array($fileActualExt, $allowed)) {
    /*error number check*/
    if ($fileError === 0) {
      /*size check*/
      if ($fileSize < 200000000)  {
        $imageFullName = $newFileName . "." . uniqid("", true) . "." . $fileActualExt;
        $fileDestination = "../img/gallery/" . $imageFullName;

        include_once "dbConn.php";
        
        /* error check if there is an empty input*/
        if (empty($imageTitle) || empty($imageDesc)) {
          header("Location: ../gallery.php?upload=empty");
          exit();
        } else {
          $sql = "SELECT * FROM p_gallery;";
          $stmt = mysqli_stmt_init($conn); /*grab information from the database*/
          if (!mysqli_stmt_prepare($stmt, $sql)) {
            echo "SQL statement failed!";
          } else {
            mysqli_stmt_execute($stmt);
            $result = mysqli_stmt_get_result($stmt);
            $rowCount = mysqli_num_rows($result);
            $setImageOrder = $rowCount + 1;

            $sql = "INSERT INTO p_gallery (titleGallery, descGallery, imgFullNameGallery, orderGallery) VALUES (?, ?, ?, ?);";
            if (!mysqli_stmt_prepare($stmt, $sql)) {
              echo "SQL statement failed!";
            } else {
              mysqli_stmt_bind_param($stmt, "ssss", $imageTitle, $imageDesc, $imageFullName, $setImageOrder);
              mysqli_stmt_execute($stmt);

              move_uploaded_file($fileTempName, $fileDestination);

              header("Location: ../gallery.php?upload=success");
            }
          }
        }
      } else {
        echo "File size is too big!";
        exit();
      }
    } else {
      echo "You had an error!";
      exit();
    }
  } else {
    echo "You need to upload a proper file type!";
    exit();
  }
}
