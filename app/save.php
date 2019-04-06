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

	fwrite($f_out,"\n"."<div id=\"shareBtn\" class=\"btn btn-success clearfix\">Share FB</div/>");
	fwrite($f_out,"\n"."<div id=\"vk_share_button\" class=\"btn btn-success clearfix\">Share VK</div/>");
	fwrite($f_out,"\n"."<h6 class=\"userFingerprintFb\">".$userFingerprintFb."</h6>");
	fwrite($f_out,"\n"."<h5 class=\"userFingerprintVk\">".$userFingerprintVk."</h5>");
	fwrite($f_out,"\n"."<h5 class=\"filesize\">".filesize($filename)."</h5>");

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