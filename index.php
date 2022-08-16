<?php
session_start();
date_default_timezone_set('Etc/GMT-3');
error_reporting(0);
include('vendor/db.php');

if ($_SESSION["user"]) {
	header("Location: main.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<?php include('includes/head.php');?>
<body class="login">

	<div class="container container-bg">
		<div class="login-wrapper tac">
			<div>
				<input class="login2" type="text" placeholder="Логин">
			</div>
			<div>
				<input class="pass" type="password" placeholder="Пароль">
			</div>
			<div class="btn enter-accaunt">Вход</div>
		</div>	
	</div>


	<?php include('includes/script.php');?>
	<script src="js/login.js"></script>
</body>
</html>