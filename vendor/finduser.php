<?php 
session_start();
$login = $_POST['login'];
$pass = $_POST['pass'];
include('db.php');
$result = mysqli_query($connection, "SELECT * FROM `users` WHERE `login` = '$login' AND  `password` = '$pass'");

$finder = mysqli_num_rows($result);

if ($finder != 0) {
	$cat = mysqli_fetch_assoc($result);
	$_SESSION["user"] = $cat;
	// echo "good";
	print_r($_SESSION["user"]);

}else{
	echo "no";
}


?>