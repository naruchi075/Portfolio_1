<?php

if (isset($_POST["submit"])) {

  // First we get the form data from the URL
  $username = $_POST["uid"];
  $pwd = $_POST["pwd"];

  // Then we run a bunch of error handlers to catch any user mistakes we can (you can add more than I did)
  // These functions can be found in functions.inc.php
  
  require_once "dbConn.php";
  require_once 'functions.inc.php';

  // Left inputs empty
  if (emptyInputLogin($username, $pwd) === true) {
    header("location: ../login.php?error=emptyinput");
		exit();
  }

  // If we get to here, it means there are no user errors
  // Now we insert the user into the database
  loginUser($conn, $username, $pwd);
  
  //Admin login
  /*$login_query =  "SELECT * FROM users WHERE usersName = '$username' AND usersPwd = '$pwd' LIMIT 1";
  $login_query_run = mysqli_query($conn, $login_query);

  if (mysqli_num_rows($login_query_run) > 0){
    foreach($login_query_run as $data){
      $user_id = $data['usersId'];
      $user_name = $data['usersName'];
      $user_email = $data['usersEmail'];
      $role_as = $data['roleAs'];
    }

    $_SESSION['auth'] = true;
    $_SESSION['auth_role'] = "$role_as";
    $_SESSION['auth_user'] = [
      'usersID' => $user_id,
      'usersName' => $user_name,
      'usersEmail' => $user_email,
    ];

    if($_SESSION['auth_role'] == '1')//1 = admin
    {

      $_SESSSION ['message'] ="welcome to dashboard";
      header("location: ../adminPanel/index.php");
      exit(0);

    } elseif($_SESSION['auth_role'] == '0')//0 = regular user 
    {

      $_SESSSION ['message'] ="you are logged in";
      header("location: ../index.php");
      exit(0);
    }

  }*/


} else {
	header("location: ../login.php");
    exit();
}
