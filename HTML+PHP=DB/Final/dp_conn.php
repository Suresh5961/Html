<?php  

$sname = "localhost";
$uname = "root";
$password = "";

$db_name = "review";

$conn = mysqli_connect('localhost','root','','review');
if (!$conn) {
	echo "Connection failed!";
	exit();
}