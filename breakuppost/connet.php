<?php 

$host="localhost";
$user="root";
$pass="";
$database="phpmyeducation";

$connet=mysqli_connect($host, $user, $pass, $database);

if (!$connet) {
	echo "connet error".mysqli_connect_error();
}





?>