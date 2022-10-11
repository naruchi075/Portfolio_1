<?php
    include_once "header.php";
    include_once "navbar.php";
?>

<div class="py-5">
    <div class="contrainer">
        <div class="row justify-content-center">
            <div class="col-md-5">
                
                    <?php
                        include_once 'includes/dbConn.php';

                        //search users account
                            $sql= "SELECT * FROM users";
                            $result = mysqli_query($conn, $sql);
                            if(mysqli_num_rows($result) > 0){
                                while($row = mysqli_fetch_assoc($result)){
                                    $id = $row['usersId'];
                                    $sqlImg = "SELECT * FROM profileimg WHERE userid = '$id'";//validate if Users have profileimg or no
                                    $resultImg = mysqli_query($conn, $sqlImg);
                                    while ($rowImg = mysqli_fetch_assoc($resultImg)){
                                        echo"<div>";
                                            if($rowImg['statusImg'] == 0){
                                                echo '<img src="img/upload/profile'.$id. '.jpg?'. mt_rand() . '">'; //if the user has picture it will display the id
                                            } else {
                                                echo '<img src="img/upload/defaultimg.png">';// if no fetch default img
                                            }

                                            echo "<p>" .$row['usersUid'] . "</p>";
                                        echo '</div>';
                                    }
                                }
                            } 
                            else{
                                echo "There are no users yet! please sign up...";
                            }
                            ?>
                        
                <div class="card">
                                <div class="card-header">
                                        <h3>Upload User Profile</h3>
                                </div>
                           
                        <div class="card-body">

                                <form action="" method="post" enctype="multipart/form-data">
                                        <div class="form-group mb-3">
                                            <label class="form-label" for="customFile">Choose Image</label>
                                            <input name="file" type="file" class="form-control" id="customFile" />
                                        </div>
                                    <button name = "submit" type="button" class="btn btn-primary btn-sm">UPLOAD</button>  
                                </form> 
                         </div>
                        
                            
                           

                        
                </div>
            </div>
        </div>
    </div>
</div>


<?php
include_once "footer.php";
?>
<?php

$uid = $_SESSION['useruid'];

if (isset($_POST['submit'])) {

  // We grab the core file
  $file = $_FILES['file'];

  $fileName = $_FILES['file']['name'];
  $fileTmpName = $_FILES['file']['tmp_name'];
  $fileSize = $_FILES['file']['size'];
  $fileError = $_FILES['file']['error'];
  $fileType = $_FILES['file']['type'];
  // We could also have shortened this by writing:
  // $fileName = $file['name'];
  // Since we grabbed the core file at the start...

  // Here we get the file extension of the uploaded file
  $fileExt = explode('.', $fileName);
  $fileActualExt = strtolower(end($fileExt));

  // Here WE decide which file types we will allow
  $allowed = array('jpg', 'jpeg', 'png', 'pdf');

  // Now we check if the file is an allowed file type
  if (in_array($fileActualExt, $allowed)) {
    // Here we check for upload errors
    if ($fileError === 0) {
      // Here we check for file size
      if ($fileSize < 1000000) {
        // Here we create a new unique name for the file that matches the user
        $fileNameNew = "profile" . $uid . "." . $fileActualExt;
        // Here we create the path the file should get uploaded to
        $fileDestination = 'img/upload/' . $fileNameNew;
        // Now we upload the file!
        move_uploaded_file($fileTmpName, $fileDestination);
        // And now we update the profile image in the database to the new image
        $sql = "UPDATE profileimg SET statusImg= 0 WHERE userid='$uid'";
        $result = mysqli_query($conn, $sql);
        // And send the user back to the front page
        header("Location:index.php?upload=success");
      }
      else {
        echo "Your file is too big!";
      }
    }
    else {
      echo "There was an error uploading your file!";
    }
  }
  else {
    echo "You cannot upload files of this type!";
  }

}
?>