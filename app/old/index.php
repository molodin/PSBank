<!DOCTYPE html>
<html lang="ru">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>PSBank</title>
  <meta property="og:url"           content="http://psbcosmos.ru" />
  <meta property="og:type"          content="website" />
  <meta property="og:title"         content="Your Website Title" />
  <meta property="og:description"   content="Your description" />
  <?
    $today = date("H:i");
    $userFingerprint2 = $_SERVER['REMOTE_ADDR'].$_SERVER['HTTP_USER_AGENT'].'fb'.$today;
    $userFingerprint2 = md5($userFingerprint2);

    $userFingerprint3 = $_SERVER['REMOTE_ADDR'].$_SERVER['HTTP_USER_AGENT'].'vk'.$today;
    $userFingerprint3 = md5($userFingerprint3);
  ?>
  <meta property="og:image"         content="http://psbcosmos.ru/<? echo $userFingerprint2; ?>.jpg" />
  <meta property="fb:app_id" content="807093306313734" />


	<link rel="stylesheet" href="css/bootstrap-reboot.min.css">
	<link rel="stylesheet" href="css/bootstrap-grid.min.css">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/select2.min.css">
	<link rel="stylesheet" href="css/style.css">
</head>

	<?
		if ($_SERVER['REMOTE_ADDR'] == '5.8.177.90' or $_SERVER['REMOTE_ADDR'] == '212.112.100.44') {
    		echo '<body>';
		} else {
			echo '<body style="display: none;">';
		}
	?>

	<h6 style="color: #fff; font-size: 0px; display: none"><? echo $userFingerprint2; ?></h6>
	<h5 style="color: #fff; font-size: 0px; display: none"><? echo $userFingerprint3; ?></h5>


  <div id="shareBtn" class="btn btn-success clearfix" style="display: none;">NO</div>


<!-- <a href="#" class="fb-share">Share on Facebook</a>
<div id="fb-root"></div> -->

	<div class="hero">
		<!-- <div class="planet">
			<div class="planet-one"></div>
			<div class="planet-two"></div>
		</div> -->
		<div class="container">
			<div class="row">
				<div class="col-md-10 offset-md-1">
					<div class="hero-content hero-content-srart off">
						<div class="cosmonaut">
							<img src="img/cosmonaut.png" alt="">
						</div>
						<h3>Космический день</h3>
						<p>12 апреля поздравляют только космонавтов. Мы решили исправить эту несправедливость.</p>
						<a href="" class="btn-custom btn-start">Поздравить</a>
					</div>
					<div class="hero-content hero-content-two">
						<div class="cosmonaut">
							<!-- <img src="img/cosmonaut.png" alt=""> -->
						</div>
						<h3>Поехали!</h3>
						<p>Поздравь своих близких, пусть они узнают какие они классные, точнее, какие они...
							<span>Космические</span></p>
						<form class="greeting-form">
							<div class="row">
								<div class="col-md-10 offset-md-1">
									<div class="row">
										<div class="col-md-4">
											<input type="text" placeholder="Введите Имя" id="name">
										</div>
										<div class="col-md-4">
											<select name="sex" id="sex" class="select-custom">
												<option value="man">Космический</option>
												<option value="woman">Космическая</option>
											</select>
										</div>
										<div class="col-md-4">
											<select name="who" id="who" class="select-custom">
												<option></option>
												<!-- Man -->
												<option value="man">Выдумщик</option>
												<option value="man">Изобретатель</option>
												<option value="man">Герой</option>
												<option value="man">Друг</option>
												<!-- Woman -->
												<option value="woman">Выдумщица</option>
												<option value="woman">Изобретательница</option>
											</select>
										</div>
									</div>
								</div>
							</div>
						</form>
						<a href="" class="btn-custom btn-two name-off who-off">Сгенерировать</a>
					</div>
					<div class="hero-content hero-content-three off">
						<div class="cosmonaut">
							<img src="img/cosmonaut.png" alt="">
						</div>
						<h3>Космический день</h3>
						<h4 class="greeting">
							<span class="greeting-name"></span>
							<span class="greeting-sex"></span>
							<span class="greeting-who"></span>
						</h4>
					</div>
				</div>
			</div>
		</div>
	</div>

	<footer class="footer">
		<div class="container">
			<div class="row">
				<div class="col-md-3">
					<a href="">
						<img src="img/logo.svg" class="img-fluid" alt="">
					</a>
				</div>
				<div class="col-md-9">
					<p>© 2001 — 2019 ПAO «Промсвязьбанк», все права защищены.</p>
					<p>Генеральная лицензия на осуществление банковских операций № 3251 от 17 декабря 2014</p>
				</div>
			</div>
		</div>
	</footer>

	<div class="image-vk image-social">
		<div class="planet">
			<img src="img/image-social/planet.png" alt="">
		</div>
		<div class="image-social-content">
			<div class="cosmonaut">
				<img src="img/cosmonaut.png" alt="">
			</div>
			<h3>С днём Космонавтики!</h3>
			<h4 class="greeting">
				<span class="greeting-name"></span>
				<span class="greeting-sex"></span>
				<span class="greeting-who"></span>
			</h4>
		</div>
		<img src="img/image-social/logo.png" class="image-social-logo" alt="">
	</div>
	<div class="image-fb image-social">
		<div class="planet">
			<img src="img/image-social/planet.png" alt="">
		</div>
		<div class="image-social-content">
			<div class="cosmonaut">
				<img src="img/cosmonaut.png" alt="">
			</div>
			<h3>С днём Космонавтики!</h3>
			<h4 class="greeting">
				<span class="greeting-name"></span>
				<span class="greeting-sex"></span>
				<span class="greeting-who"></span>
			</h4>
		</div>
		<img src="img/image-social/logo.png" class="image-social-logo" alt="">
	</div>

	<form method="POST" enctype="multipart/form-data" action="save.php" id="image-form">
		<input type="hidden" name="img-val-fb" id="img-val-fb" value="">
		<input type="hidden" name="img-val-vk" id="img-val-vk" value="">
	</form>

	<script src="js/jquery-3.2.1.min.js"></script>
	<script src="js/select2.min.js"></script>
	<script src="js/html2canvas.js"></script>
	<script src="js/jquery.plugin.html2canvas.js"></script>
	<script src="js/main.js"></script>
</body>

</html>