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
<body class="lesson">
	<header>
		<div class="header-wrapper d-flex jcsb aic">
			<div class="crumbs">lesson</div>
			<div class="user_btn">
				<a href="user.php">
					<img src="img/user.svg">
				</a>
			</div>
		</div>
	</header>

	<div class="container container-bg pt-3">
		<div class="tac">
			<video src="base/001.mp4" controls controlsList="nodownload"></video>
		</div>
		<div class="tac">
			<div class="btn mt-3">Отметить как пройденный</div>
		</div>
	</div>


	<?php include('includes/script.php');?>
	<script src="js/main.js"></script>
</body>
</html>