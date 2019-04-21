<!DOCTYPE html>
<html lang="ru">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>PSBank</title>
	<link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
	<link rel="stylesheet" href="css/bootstrap-reboot.min.css">
	<link rel="stylesheet" href="css/bootstrap-grid.min.css">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/select2.min.css">
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
	<script src="https://vk.com/js/api/share.js?95" charset="windows-1251"></script>
	<!-- Yandex.Metrika counter -->
	<script type="text/javascript" >
	   (function(m,e,t,r,i,k,a){m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)};
	   m[i].l=1*new Date();k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)})
	   (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");

	   ym(53203024, "init", {
	        clickmap:true,
	        trackLinks:true,
	        accurateTrackBounce:true
	   });
	</script>
	<noscript><div><img src="https://mc.yandex.ru/watch/53203024" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
	<!-- /Yandex.Metrika counter -->
</head>

  <body>

	<div class="hero">
		<div class="star star-1"></div>
		<div class="star star-2"></div>
		<div class="star star-3"></div>
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
						<p>12 апреля поздравляют только космонавтов. Мы  решили это исправить!</p>
						<a href="generation.php" class="btn-custom btn-start">Поздравить</a>
					</div>
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

	<div id="shareFb" style="display: none;"></div>
  <div id="shareVk" style="display: none;"></div>

	<script src="js/jquery-3.2.1.min.js"></script>
	<script src="js/select2.min.js"></script>
	<script src="js/html2canvas.js"></script>
	<script src="js/jquery.plugin.html2canvas.js"></script>
	<script src="js/modernizr-custom.js"></script>
	<script src="js/main.js"></script>
</body>

</html>