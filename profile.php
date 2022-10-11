<?php
  session_start();
  include_once 'includes/functions.inc.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>JPKN-SPBM</title>

    <!--<link rel="stylesheet" href="assets/css/reset.css">-->
    

    <link rel="stylesheet" href="assets/css/bootstrap5.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/customprofile.css">


    <!--<style>
      .navbar{

      }
      .nav-link{

      }
      .nav-brand{
        
      }
    </style>-->
</head>
<body>
    


<!--navbar starts-->

<nav class="navbar navbar-expand-lg bg-light">

  <div class="container">
    <img src="assets/logo/jpkn.png" width="65" height="65" alt="" srcset="">
    <a class="navbar-brand disabled" href="#">Multimedia Collection</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">About Us</a>
        </li>
        <!--<li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Dropdown
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">Action</a></li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
          </ul>
        </li>-->
        <?php
        if (isset($_SESSION["useruid"])) {
           echo '<li class="nav-item"><a class="nav-link active" href="ImageGallery/gallery.php">Image Gallery</a></li>';
           echo '<li class="nav-item"><a class="nav-link active" href="VideoGallery/video_gallery.php">Video Gallery</a></li>';
           echo '<li class="nav-item"><a class="nav-link active" href="profile.php">My profile</a></li>';
           echo '<li class="nav-item"><a class="nav-link active" href="signup.php">Register New User</a></li>';
           echo '<li class="nav-item"><a class="nav-link active" href="logout.php">Log out</a></li>';
           
        }else{
           echo '<li class="nav-item"><a class="nav-link active" href="login.php">Log in</a></li>';
           
        }
        ?>
      </ul>
     
    </div>
  </div>
</nav>

<!--navbar ends-->
    

<div class="container">


    <div class="row profile">
		<div class="col-md-3">
			<div class="profile-sidebar">
				<!-- SIDEBAR USERPIC -->
				<div class="profile-userpic">
					<img src="https://static.change.org/profile-img/default-user-profile.svg" class="img-responsive" alt="">
				</div>
				<!-- END SIDEBAR USERPIC -->
				<!-- SIDEBAR USER TITLE -->
				<div class="profile-usertitle">
					<div class="profile-usertitle-name">
						Marcus Doe
					</div>
					<div class="profile-usertitle-job">
						Developer
					</div>
				</div>
				<!-- END SIDEBAR USER TITLE -->
				<!-- SIDEBAR BUTTONS -->
				<div class="profile-userbuttons">
					<button onclick="location.href='userprofile/index.php'" type="button" class="btn btn-success btn-sm">Upload</button>
					<button onclick="location.href='userprofile/update.php'" type="button" class="btn btn-danger btn-sm">Change</button>
				</div>
				<!-- END SIDEBAR BUTTONS -->
				<!-- SIDEBAR MENU -->
				<div class="profile-usermenu">
					<ul class="nav">
						<li class="active">
							<a href="#">
							<i class="glyphicon glyphicon-home"></i>
							Overview </a>
						</li>
						<li>
							<a href="#">
							<i class="glyphicon glyphicon-user"></i>
							Account Settings </a>
						</li>
						<li>
							<a href="#" target="_blank">
							<i class="glyphicon glyphicon-ok"></i>
							Tasks </a>
						</li>
						<li>
							<a href="#">
							<i class="glyphicon glyphicon-flag"></i>
							Help </a>
						</li>
					</ul>
				</div>
				<!-- END MENU -->
			</div>
		</div>
		<div class="col-md-9">
            <div class="profile-content">
			   Some user related content goes here...
            </div>
		</div>
	</div>
</div>
<!--<center>
<strong>Powered by <a href="" target="_blank"></a></strong>
</center>-->
<br>
<br>

<!--footer here-->
<script src="assets/js/jquery.min.js"></script>
<script src="assets/js/bootstrap5.bundle.min.js"></script>
<script src="assets/js/custom.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
</body>
</html>

