<?php

define('db_user','root');
define('db_password','1234');
define('db_host','localhost');
define('db_name','jpkn_multimedia_collection');

$conn = mysqli_connect (db_host, db_user, db_password, db_name);
$dbconfig = mysqli_select_db($conn, db_name);
if (mysqli_connect_errno()){
	echo "Failed to connect to MySQL: " . mysql_connect_error();
}

?>