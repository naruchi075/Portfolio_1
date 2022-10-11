<?php include('header.php');?>
<?php include('navbar.php');?>

<div class="py-5">
    <div class="contrainer">
        <div class="row justify-content-center">
            <div class="col-md-5">

                <?php /*include('message.php');*/ ?>

                <div class="card">
                        <div class="card-header">
                            <h4>Sign Up</h4>
                        </div>
                    <div class="card-body">
                        <form action="includes/signup.inc.php" method="post">
                            <div class="form-group mb-3">
                                <label for="">Name</label>
                                <input type="text" name="name" placeholder="Full name..." class="form-control">
                            </div>
                            <div class="form-group mb-3">
                                <label for="">Email Id</label>
                                <input type="text" name="email" placeholder="@gmail.com..." class="form-control">
                            </div>
                            <div class="form-group mb-3">
                                <label for="">Username</label>
                                <input type="text" name="uid" placeholder="Username..." class="form-control">
                            </div>
                            <div class="form-group mb-3">
                                <label for="">Password</label>
                                <input type="password" name="pwd"placeholder="Password..." class="form-control">
                            </div>
                            <div class="form-group mb-3">
                                <label for="">Confirm Password</label>
                                <input type="password" name="pwdrepeat"placeholder="Enter password again..." class="form-control">
                            </div>
                        
                            <button class="btn btn-primary" type="submit" name="submit" >Register</button>
                        </form>

                    </div>
                            <?php
                                // Error messages $_GET["for data we can see"] $_POST["for data we can't see"]
                                if (isset($_GET["error"])) {
                                if ($_GET["error"] == "emptyinput") {//if forgot to input
                                    echo "<p>Fill in all fields!</p>";
                                }
                                else if ($_GET["error"] == "invaliduid") {//
                                    echo "<p>Choose a proper username!</p>";
                                }
                                else if ($_GET["error"] == "invalidemail") {
                                    echo "<p>Choose a proper email!</p>";
                                }
                                else if ($_GET["error"] == "passwordsdontmatch") {
                                    echo "<p>Passwords doesn't match!</p>";
                                }
                                else if ($_GET["error"] == "stmtfailed") {
                                    echo "<p>Something went wrong!</p>";
                                }
                                else if ($_GET["error"] == "usernametaken") {
                                    echo "<p>Username already taken!</p>";
                                }
                                else if ($_GET["error"] == "none") {
                                    echo "<p>Registration successful!</p>";
                                }
                                }
                            ?>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include('footer.php');?>
