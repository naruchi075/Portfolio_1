

<nav class="navbar navbar-expand-lg bg-light">
  <div class="container">
  <img src="../assets/logo/tag.png" width="65" height="65" alt="" srcset="">
    <a class="navbar-brand disabled" href="#">Multimedia Collection</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
        
        <li class="nav-item">
          <a class="nav-link" href="../aboutus.php">About Us</a>
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
          echo '<li class="nav-item">
          <a class="nav-link active" aria-current="page" href="../index.php">Home</a>
        </li>';
           echo '<li class="nav-item"><a class="nav-link active" href="../ImageGallery/gallery.php">Image Gallery</a></li>';
           echo '<li class="nav-item"><a class="nav-link active" href="video_gallery.php">Video Gallery</a></li>';
           //echo '<li class="nav-item"><a class="nav-link active" href="../userprofile/index.php">My profile</a></li>';
           echo '<li class="nav-item"><a class="nav-link active" href="../signup.php">Register New User</a></li>';
           echo '<li class="nav-item"><a class="nav-link active" href="../logout.php">Log out</a></li>';
        }else{
           
           echo '<li class="nav-item"><a class="nav-link active" href="../login.php">Log in</a></li>';
          
        }
        ?>
      </ul>
     
    </div>
  </div>
</nav>