<!DOCTYPE html>
<html lang="ru">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>PSBank</title>
	<link rel="stylesheet" href="css/bootstrap-reboot.min.css">
	<link rel="stylesheet" href="css/bootstrap-grid.min.css">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/select2.min.css">
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
	<script src="https://vk.com/js/api/share.js?95" charset="windows-1251"></script>
</head>

	<?
		if ($_SERVER['REMOTE_ADDR'] == '5.8.177.90' or $_SERVER['REMOTE_ADDR'] == '212.112.100.44' or $_SERVER['REMOTE_ADDR'] == '212.112.122.230' or $_SERVER['REMOTE_ADDR'] == '94.25.169.182') {
    		echo '<body>';
		} else {
			echo '<body style="display: none;">';
		}
	?>
	<!-- <body> -->

  <div id="shareFb" style="display: none;"></div>
  <div id="shareVk" style="display: none;"></div>

	<div class="hero">
		<div class="planet">
			<div class="planet-one"></div>
			<div class="planet-two"></div>
		</div>
		<div class="container">
			<div class="row">
				<div class="col-md-10 offset-md-1">
					<div class="hero-content hero-content-srart">
						<div class="cosmonaut">
							<img src="img/cosmonaut.png" alt="">
						</div>
						<h3>Космический день</h3>
						<p>12 апреля поздравляют только космонавтов. Мы решили исправить эту несправедливость.</p>
						<a href="" class="btn-custom btn-start">Поздравить</a>
					</div>
					<div class="hero-content hero-content-two off">
						<div class="cosmonaut">
							<img src="img/cosmonaut.png" alt="">
						</div>
						<h3>Поехали!</h3>
						<p>Поздравь своих близких, пусть они узнают какие они классные, точнее, какие они...
							<span>Космические</span></p>
						<form class="greeting-form">
							<div class="row">
								<div class="col-xl-10 offset-xl-1 col-lg-12">
									<div class="row">
										<div class="col-lg-4">
											<input type="text" placeholder="Введите Имя" id="name">
										</div>
										<div class="col-lg-4 select-item">
											<select name="sex" id="sex" class="select-custom">
												<option value="man">Космический</option>
												<option value="woman">Космическая</option>
											</select>
										</div>
										<div class="col-lg-4 select-item">
											<select name="who" id="who" class="select-custom">
												<option></option>
												<!-- Man -->
												<option value="man">Выдумщик</option>
												<option value="man">Изобретатель</option>
												<option value="man">Герой</option>
												<option value="man">Друг</option>
												<option value="man">Тусовщик</option>
												<option value="man">Космос</option>
												<option value="man">Экономист</option>
												<option value="man">Военный</option>
												<option value="man">Джедай</option>
												<option value="man">Штурмовик</option>
												<option value="man">Чубака</option>
												<option value="man">Бухгалтер</option>
												<option value="man">Кот</option>
												<option value="man">Судья</option>
												<option value="man">Пират</option>
												<option value="man">Финансист</option>
												<option value="man">Судак</option>
												<option value="man">Лидер</option>
												<option value="man">Менеджер</option>
												<option value="man">Банкир</option>
												<option value="man">Трудяга</option>
												<option value="man">Любовник</option>
												<option value="man">Краб</option>
												<option value="man">Тренер</option>
												<option value="man">Учитель</option>
												<option value="man">Красавчик</option>
												<option value="man">Зайка</option>
												<option value="man">Блоггер</option>
												<option value="man">Транжира</option>
												<option value="man">Скромник</option>
												<option value="man">Растяпа</option>
												<option value="man">Неряха</option>
												<option value="man">Неудачник</option>
												<!-- Woman -->
												<option value="woman">Выдумщица</option>
												<option value="woman">Изобретательница</option>
												<option value="woman">Героиня</option>
												<option value="woman">Подруга</option>
												<option value="woman">Тусовщица</option>
												<option value="woman">Космос</option>
												<option value="woman">Экономистка</option>
												<option value="woman">Чубака</option>
												<option value="woman">Бухгалтер</option>
												<option value="woman">Котейка</option>
												<option value="woman">Судья</option>
												<option value="woman">Стюардесса</option>
												<option value="woman">Финансистка</option>
												<option value="woman">Рыбка</option>
												<option value="woman">Трудяга</option>
												<option value="woman">Любовница</option>
												<option value="woman">Апельсинка</option>
												<option value="woman">Учительница</option>
												<option value="woman">Красавица</option>
												<option value="woman">Зайка</option>
												<option value="woman">Транжира</option>
												<option value="woman">Скромница</option>
											</select>
										</div>
									</div>
								</div>
							</div>
						</form>
						<a href="" class="btn-custom btn-two name-off who-off">Сгенерировать</a>
						<h4 class="greeting" style="display: none;">
							<span class="greeting-name"></span>
							<span class="greeting-sex"></span>
							<span class="greeting-who"></span>
						</h4>
					</div>
					<!-- <div class="hero-content hero-content-three off">
						<div class="cosmonaut">
							<img src="img/cosmonaut.png" alt="">
						</div>
						<h3>Космический день</h3>
						<h4 class="greeting">
							<span class="greeting-name"></span>
							<span class="greeting-sex"></span>
							<span class="greeting-who"></span>
						</h4>
						<p class="share-title"><span>Поделись с другом</span></p>
						<div>
							<a href="" class="share-planet share-planet-fb">
								<img src="img/share-planet-fb.svg" alt="">
							</a>
							<a href="" class="share-planet share-planet-vk">
								<img src="img/share-planet-vk.svg" alt="">
							</a>
						</div>
						<a href="" class="repeat">Повторить <i class="fas fa-redo"></i></a>
					</div> -->
				</div>
			</div>
		</div>
	</div>

	<footer class="footer">
		<div class="container">
			<div class="row">
				<div class="col-md-3 col-sm-6">
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

	<div class="image-vk image-social off">
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
	<div class="image-fb image-social off">
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
	<script src="js/modernizr-custom.js"></script>
	<script src="js/main.js"></script>
</body>

</html>