<?php
session_start();
date_default_timezone_set('Etc/GMT-3');
include('vendor/db.php');

if ($_SESSION["user"]) {

	$id = $_SESSION["user"]["id"];

	$reloadUserInfo = mysqli_query($connection, "SELECT * FROM `users` WHERE `id` = '$id' ");
	$cat = mysqli_fetch_assoc($reloadUserInfo);
	$_SESSION["user"] = $cat;

}else{
	header("Location: index.php");
}

$title = "Главная";


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



		<?php 

		$take_lessons = mysqli_query($connection, "SELECT * FROM `lessons`");

		while ($item = mysqli_fetch_assoc($take_lessons)) {
			?>	

			<?php
			$needlevel = $item["needlevel"];
			$level = $_SESSION["user"]["level"];

			?>


			<div class="block 
			<?php if ($needlevel == $level) {
				echo 'block-active';
				}elseif ($needlevel > $level) {
					echo 'block-close';
					}elseif($needlevel < $level){
						echo 'block-passed';
					} ?>
					row">
					<div class="col-2 block-num"><?php echo "#" . $item['num']; ?></div>
					<div class="col-6 block-name"><?php echo $item["name"] ?></div>
					<div class="col-2 block-time"><?php echo "~" . $item["time"] . "мин" ?></div>
					<div class="col-2 block-btn">

						<a href="<?php echo "part.php?" . $item['num']; ?>">
							<?php if ($needlevel == $level) {
								echo "Пройти";
							}elseif ($needlevel > $level) {
								echo "Недоступно";
							}elseif($needlevel < $level){
								echo "Повторить";
							} ?>
						</a>


					</div>
				</div>

			<?php } ?>



		</div>


		<?php include('includes/script.php');?>
		<script src="js/main.js"></script>
	</body>
	</html>