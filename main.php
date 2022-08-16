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
	<header>
		<div class="header-wrapper d-flex jcsb aic">
			<div class="crumbs">Course - React & next js</div>
			<div class="user_btn">
				<a href="user.php">
					<img src="img/user.svg">
				</a>
			</div>
		</div>
	</header>

	<div class="container container-bg pt-3">
		<div class="block block-passed row">
			<div class="col-2 block-num">#5</div>
			<div class="col-6 block-name">Компоненты Head и Document</div>
			<div class="col-2 block-time">~ 23м</div>
			<div class="col-2 block-btn"><a href="#">Пройти</a></div>
		</div>


		<div class="block block-active row">
			<div class="col-2 block-num">#5</div>
			<div class="col-6 block-name">Компоненты Head и Document</div>
			<div class="col-2 block-time">~ 23м</div>
			<div class="col-2 block-btn"><a href="#">Пройти</a></div>
		</div>



		<div class="block block-close row">
			<div class="col-2 block-num">#5</div>
			<div class="col-6 block-name">Компоненты Head и Document</div>
			<div class="col-2 block-time">~ 23м</div>
			<div class="col-2 block-btn"><a href="#">Пройти</a></div>
		</div>
		
	</div>


	<?php include('includes/script.php');?>
	<script src="js/main.js"></script>
</body>
</html>