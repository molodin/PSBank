<?php

	$today = date("H:i:s");
	$userFingerprintFb = $_SERVER['REMOTE_ADDR'] . $_SERVER['HTTP_USER_AGENT'] . 'fb' . $today;
	$userFingerprintFb = md5($userFingerprintFb);
	$userFingerprintVk = $_SERVER['REMOTE_ADDR'] . $_SERVER['HTTP_USER_AGENT'] . 'vk' . $today;
	$userFingerprintVk = md5($userFingerprintVk);
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

	$filename_out= $userFingerprintFb . '.html';
	$f_out=fopen($filename_out,"w+t") or die("Ошибка при создании файла");

	fwrite($f_out,"<!DOCTYPE html>");
	fwrite($f_out,"\n"."<html prefix=\"og: http://ogp.me/ns#\">");

	fwrite($f_out,"\n"."<head>");
	fwrite($f_out,"\n"."<meta charset=\"UTF-8\">");
	fwrite($f_out,"\n"."<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">");
	fwrite($f_out,"\n"."<meta http-equiv=\"X-UA-Compatible\" content=\"ie=edge\">");
	fwrite($f_out,"\n"."<title>".$title."</title>");
	fwrite($f_out,"\n"."<meta property=\"og:type\" content=\"website\">");
	fwrite($f_out,"\n"."<meta property=\"og:title\" content=\"Космический день\">");
	fwrite($f_out,"\n"."<meta property=\"fb:app_id\" content=\"807093306313734\">");
	fwrite($f_out,"\n"."<meta property=\"og:description\" content=\"desc\">");
	fwrite($f_out,"\n"."<meta property=\"og:image:url\" content=\"".$userFingerprintFbSrc."\">");
	fwrite($f_out,"\n"."<meta property=\"og:url\" content=\"".$url."\">");
	fwrite($f_out,"\n"."<link rel=\"stylesheet\" href=\"css/bootstrap-reboot.min.css\">");
	fwrite($f_out,"\n"."<link rel=\"stylesheet\" href=\"css/bootstrap-grid.min.css\">");
	fwrite($f_out,"\n"."<link rel=\"stylesheet\" href=\"css/bootstrap.min.css\">");
	fwrite($f_out,"\n"."<link rel=\"stylesheet\" href=\"css/select2.min.css\">");
	fwrite($f_out,"\n"."<link rel=\"stylesheet\" href=\"css/style.css\">");
	fwrite($f_out,"\n"."<link rel=\"stylesheet\" href=\"https://use.fontawesome.com/releases/v5.8.1/css/all.css\" integrity=\"sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf\" crossorigin=\"anonymous\">");
	fwrite($f_out,"\n"."<script src=\"https://vk.com/js/api/share.js?95\" charset=\"windows-1251\"></script>");
	fwrite($f_out,"\n"."</head>");

	fwrite($f_out,"\n"."<body>");

	fwrite($f_out,"\n"."<div style=\"display: none;\" id=\"shareFb\" class=\"btn btn-success\">Share FB</div/>");
	fwrite($f_out,"\n"."<div style=\"display: none;\" id=\"shareVk\" class=\"btn btn-success\">Share VK</div/>");
	fwrite($f_out,"\n"."<h6 style=\"display: none;\" class=\"userFingerprintFb\">".$userFingerprintFb."</h6>");
	fwrite($f_out,"\n"."<h5 style=\"display: none;\" class=\"userFingerprintVk\">".$userFingerprintVk."</h5>");
	fwrite($f_out,"\n"."<h5 style=\"display: none;\" class=\"filesize\">".filesize($filename)."</h5>");

	// Content
	fwrite($f_out,"\n"."<div class=\"hero\">");
	fwrite($f_out,"\n"."<div class=\"planet\">");
	fwrite($f_out,"\n"."<div class=\"planet-one\"></div>");
	fwrite($f_out,"\n"."<div class=\"planet-two\"></div>");
	fwrite($f_out,"\n"."</div>");
	fwrite($f_out,"\n"."<div class=\"container\">");
	fwrite($f_out,"\n"."<div class=\"row\">");
	fwrite($f_out,"\n"."<div class=\"col-md-10 offset-md-1\">");
	fwrite($f_out,"\n"."<div class=\"hero-content hero-content-three\">");
	fwrite($f_out,"\n"."<div class=\"cosmonaut\">");
	fwrite($f_out,"\n"."<img src=\"img/cosmonaut.png\" alt=\"\">");
	fwrite($f_out,"\n"."</div>");
	fwrite($f_out,"\n"."<h3>Космический день</h3>");
	fwrite($f_out,"\n"."<h4 class=\"greeting\">");
	fwrite($f_out,"\n"."<span class=\"greeting-name\"></span>");
	fwrite($f_out,"\n"."<span class=\"greeting-sex\"></span>");
	fwrite($f_out,"\n"."<span class=\"greeting-who\"></span>");
	fwrite($f_out,"\n"."</h4>");
	fwrite($f_out,"\n"."<p class=\"share-title\"><span>Поделись с другом</span></p>");
	fwrite($f_out,"\n"."<div>");
	fwrite($f_out,"\n"."<a href=\"\" class=\"share-planet share-planet-fb\">");
	fwrite($f_out,"\n"."<img src=\"img/share-planet-fb.svg\" alt=\"\">");
	fwrite($f_out,"\n"."</a>");
	fwrite($f_out,"\n"."<a href=\"\" class=\"share-planet share-planet-vk\">");
	fwrite($f_out,"\n"."<img src=\"img/share-planet-vk.svg\" alt=\"\">");
	fwrite($f_out,"\n"."</a>");
	fwrite($f_out,"\n"."</div>");
	fwrite($f_out,"\n"."<a href=\"\" class=\"repeat\">Повторить <i class=\"fas fa-redo\"></i></a>");
	fwrite($f_out,"\n"."</div>");
	fwrite($f_out,"\n"."</div>");
	fwrite($f_out,"\n"."</div>");
	fwrite($f_out,"\n"."</div>");
	fwrite($f_out,"\n"."</div>");

	// Footer
	fwrite($f_out,"\n"."<footer class=\"footer\">");
	fwrite($f_out,"\n"."<div class=\"container\">");
	fwrite($f_out,"\n"."<div class=\"row\">");
	fwrite($f_out,"\n"."<div class=\"col-md-3 col-sm-6\">");
	fwrite($f_out,"\n"."<a href=\"\">");
	fwrite($f_out,"\n"."<img src=\"img/logo.svg\" class=\"img-fluid\" alt=\"\">");
	fwrite($f_out,"\n"."</a>");
	fwrite($f_out,"\n"."</div>");
	fwrite($f_out,"\n"."<div class=\"col-md-9\">");
	fwrite($f_out,"\n"."<p>© 2001 — 2019 ПAO «Промсвязьбанк», все права защищены.</p><p>Генеральная лицензия на осуществление банковских операций № 3251 от 17 декабря 2014</p>");
	fwrite($f_out,"\n"."</div>");
	fwrite($f_out,"\n"."</div>");
	fwrite($f_out,"\n"."</div>");
	fwrite($f_out,"\n"."</footer>");
	// End Footer

	fwrite($f_out,"\n"."<script src=\"js/jquery-3.2.1.min.js\"></script>");
	fwrite($f_out,"\n"."<script src=\"js/select2.min.js\"></script>");
	fwrite($f_out,"\n"."<script src=\"js/html2canvas.js\"></script>");
	fwrite($f_out,"\n"."<script src=\"js/jquery.plugin.html2canvas.js\"></script>");
	fwrite($f_out,"\n"."<script src=\"js/modernizr-custom.js\"></script>");
	fwrite($f_out,"\n"."<script src=\"js/main.js\"></script>");
	fwrite($f_out,"\n"."</body>");
	fwrite($f_out,"\n"."</html>");
	fclose($f_out);

	// Редирект на сгенерированную страницу
	header("Location:" .$userFingerprintFb. ".html");
	die();

?>