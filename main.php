<?php
session_start();
date_default_timezone_set('Etc/GMT-3');
include('vendor/db.php');

if ($_SESSION["user"]) {
	





}else{
	header("Location: index.php");
}


?>
<!DOCTYPE html>
<html lang="en">
<?php include('includes/head.php');?>
<body class="main">

	<div class="container container-bg">
		1
	</div>


	<?php include('includes/script.php');?>
	<script src="js/main.js"></script>
</body>
</html>