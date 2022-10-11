<?php include_once 'header.php'; 
      include_once 'navbar.php';?>

<div class="py-5">
    <div class="contrainer">
        <div class="row justify-content-center">
            <div class="col-md-5">

                <div class="card">
                    <div class="card-header">
                        <h4>Sign in with Email</h4>
                    </div>
                    <div class="card-body">
                        <form action="includes/login.inc.php" method="post">
                            <div class="form-group mb-3">
                                <label for="">Email Id</label>
                                <input type="text" name="uid" placeholder="Username/Enter Email..." class="form-control">
                            </div>
                            <div class="form-group mb-3">
                                <label for="">Password</label>
                                <input type="password" name="pwd"placeholder="Password..." class="form-control">
                            </div>
                            <button class="btn btn-primary" type="submit" name="submit" >Login</button>
                        </form>
                        <?php
                            // Error messages
                            if (isset($_GET["error"])) {
                            if ($_GET["error"] == "emptyinput") {
                                echo "<p>Fill in all fields!</p>";
                            }
                            else if ($_GET["error"] == "wronglogin") {
                                echo "<p>Wrong login!</p>";
                             }
                            }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
</div>

<?php 
    include_once 'footer.php';
?>
