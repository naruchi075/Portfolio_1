<?php

define('db_user','root');
define('db_password','1234');
define('db_host','localhost');
define('db_name','jpkn_multimedia_collection');

$conn = mysqli_connect (db_host, db_user, db_password, db_name);

if (!$conn){
	header("Location: ../errors/dberror.php");
	die();
}

?>