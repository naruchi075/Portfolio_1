<?php

if (isset($_POST["submit"])) {

  // First we get the form data from the URL
  $name = $_POST["name"];
  $email = $_POST["email"];
  $username = $_POST["uid"];
  $pwd = $_POST["pwd"];
  $pwdRepeat = $_POST["pwdrepeat"];

  // Then we run a bunch of error handlers to catch any user mistakes we can (you can add more than I did)
  // These functions can be found in functions.inc.php

  require_once "dbConn.php";
  require_once "functions.inc.php";

  // Left inputs empty
  // We set the functions "!== false" since "=== true" has a risk of giving us the wrong outcome
  if (emptyInputSignup($name, $email, $username, $pwd, $pwdRepeat) !== false) {
    header("location: ../signup.php?error=emptyinput");
		exit();
  }
	// Proper username chosen
  if (invalidUid($uid) !== false) {
    header("location: ../signup.php?error=invaliduid");
		exit();
  }
  // Proper email chosen
  if (invalidEmail($email) !== false) {
    header("location: ../signup.php?error=invalidemail");
		exit();
  }
  // Do the two passwords match?
  if (pwdMatch($pwd, $pwdRepeat) !== false) {
    header("location: ../signup.php?error=passwordsdontmatch");
		exit();
  }
  // Is the username taken already
  if (uidExists($conn, $username, $email) !== false) {
    header("location: ../signup.php?error=usernametaken or emailtaken");
		exit();
  }

  // If we get to here, it means there are no user errors

  $sqlImg = "SELECT * FROM users WHERE usersUid = '$username' AND usersEmail = '$email';";
  $resultImg = mysqli_query($conn, $sqlImg);

  // User profileimg
  if (mysqli_num_rows($resultImg) > 0){
    while ($row = mysqli_fetch_assoc($resultImg)) {
      $userid = $row['usersId'];
      $sqlImg = "INSERT INTO profileimg (userid, statusImg) 
      VALUES('$userid', 1);";//we put 1 to tell, users exist but dont have profileimage yet
      mysqli_query($conn, $sqlImg);
    }
  }

  // Now we insert the user into the database
  createUser($conn, $name, $email, $username, $pwd);

  
 

} else {
	header("location: ../signup.php");
    exit();
}
