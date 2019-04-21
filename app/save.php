<?php

	$today = date("H:i:s");
	$userFingerprintFb = $_SERVER['REMOTE_ADDR'] . $_SERVER['HTTP_USER_AGENT'] . 'fb' . $today;
	$userFingerprintFb = md5($userFingerprintFb);
	$userFingerprintVk = $_SERVER['REMOTE_ADDR'] . $_SERVER['HTTP_USER_AGENT'] . 'vk' . $today;
	$userFingerprintVk = md5($userFingerprintVk);
	$whoGen = $_SERVER['REMOTE_ADDR'] . $_SERVER['HTTP_USER_AGENT'] . 'whoIn';
  	$whoGen = md5($whoGen);
	$title="Космический день";
	$userFingerprintFbSrc='http://psbcosmos.ru/' . $userFingerprintFb . '.jpg';
	$url='http://psbcosmos.ru/' . $userFingerprintFb . '.html';
	$filename = $userFingerprintVk.'.jpg';

	// Генерация картинки для Facebook

	$filteredDataFb=substr($_POST['img-val-fb'], strpos($_POST['img-val-fb'], ",")+1);

	$unencodedDataFb=base64_decode($filteredDataFb);

	file_put_contents($userFingerprintFb . '.jpg', $unencodedDataFb);

	// Генерация картинки для VK

	$filteredDataVk=substr($_POST['img-val-vk'], strpos($_POST['img-val-vk'], ",")+1);

	$unencodedDataVk=base64_decode($filteredDataVk);

	file_put_contents($userFingerprintVk . '.jpg', $unencodedDataVk);

	// Генерация страницы поздравления

	$fname = $userFingerprintFb . '.html';
	if(touch($fname)) {
	    ob_start();
?>

<!DOCTYPE html>
<html prefix="og: http://ogp.me/ns#">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Космический день</title>
	<link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
	<meta property="og:type" content="website">
	<meta property="og:title" content="<? echo $title; ?>">
	<meta property="fb:app_id" content="807093306313734">
	<meta property="og:description" content="Поздравь близких с Днём Космонавтики!">
	<meta property="og:image:url" content="<? echo $userFingerprintFbSrc; ?>">
	<meta property="og:url" content="<? echo $url; ?>">
	<link rel="stylesheet" href="css/bootstrap-reboot.min.css">
	<link rel="stylesheet" href="css/bootstrap-grid.min.css">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/select2.min.css">
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css"
		integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
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
	<div style="display: none;" id="shareFb" class="btn btn-success"></div>
	<div style="display: none;" id="shareVk" class="btn btn-success"></div>
	<span style="display: none;" class="userFingerprintFb"><? echo $userFingerprintFb; ?></span>
	<span style="display: none;" class="userFingerprintVk"><? echo $userFingerprintVk; ?></span>
	<span style="display: none;" class="whoGen"><? echo $whoGen; ?></span>
	<span style="display: none;" class="filesize"><? echo filesize($filename); ?></span>
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
					<div class="hero-content hero-content-three">
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
							<a href="" onclick="ym(53203024, 'reachGoal', 'push_button2'); return true;" class="share-planet share-planet-fb">
								<img src="img/share-planet-fb.svg" alt="">
							</a>
							<a href="" onclick="ym(53203024, 'reachGoal', 'push_button'); return true;" class="share-planet share-planet-vk">
								<img src="img/share-planet-vk.svg" alt="">
							</a>
						</div>
						<a href="http://psbcosmos.ru/generation.php" class="repeat" onclick="ym(53203024, 'reachGoal', 'push_button3'); return true;"><span>Повторить</span> <i
								class="fas fa-redo"></i></a>
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
	<script src="js/jquery-3.2.1.min.js"></script>
	<script src="js/select2.min.js"></script>
	<script src="js/html2canvas.js"></script>
	<script src="js/jquery.plugin.html2canvas.js"></script>
	<script src="js/modernizr-custom.js"></script>
	<script src="js/main.js"></script>
</body>

</html>

<?
		$html = ob_get_contents();
		ob_end_clean();
		file_put_contents($fname, $html , FILE_APPEND | LOCK_EX);
		// Редирект на сгенерированную страницу
		header("Location:" .$userFingerprintFb. ".html");
		die();
	} else {
	    echo 'Ошибка при генерации поздравления';
	}
?>