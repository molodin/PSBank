<?php

	$today = date("H:i");

	$filteredDataFb=substr($_POST['img-val-fb'], strpos($_POST['img-val-fb'], ",")+1);

	$unencodedDataFb=base64_decode($filteredDataFb);

	$userFingerprintFb = $_SERVER['REMOTE_ADDR'] . $_SERVER['HTTP_USER_AGENT'] . 'fb' . $today;
	$userFingerprintFb = md5($userFingerprintFb);

	file_put_contents($userFingerprintFb . '.jpg', $unencodedDataFb);

	$filteredDataVk=substr($_POST['img-val-vk'], strpos($_POST['img-val-vk'], ",")+1);

	$unencodedDataVk=base64_decode($filteredDataVk);

	$userFingerprintVk = $_SERVER['REMOTE_ADDR'] . $_SERVER['HTTP_USER_AGENT'] . 'vk' . $today;
	$userFingerprintVk = md5($userFingerprintVk);

	file_put_contents($userFingerprintVk . '.jpg', $unencodedDataVk);

	$title="Космический день";
	$userFingerprintFbSrc='http://psbcosmos.ru/' . $userFingerprintFb . '.jpg';
	$url='http://psbcosmos.ru/' . $userFingerprintFb . '.html';

	$filename = $userFingerprintVk.'.jpg';

	$filename_out= $userFingerprintFb . '.html';
	$f_out=fopen($filename_out,"w+t") or die("Ошибка при создании файла");

	fwrite($f_out,"<!DOCTYPE html>");
	fwrite($f_out,"<html prefix=\"og: http://ogp.me/ns#\">");
	fwrite($f_out,"\n"."<head>");
	fwrite($f_out,"<title>".$title."</title>");
	fwrite($f_out,"\n"."<meta property=\"og:type\" content=\"website\">");
	fwrite($f_out,"\n"."<meta property=\"og:title\" content=\"Космический день\">");
	fwrite($f_out,"\n"."<meta property=\"fb:app_id\" content=\"807093306313734\">");
	fwrite($f_out,"\n"."<meta property=\"og:description\" content=\"desc\">");
	fwrite($f_out,"\n"."<meta property=\"og:image:url\" content=\"".$userFingerprintFbSrc."\">");
	fwrite($f_out,"\n"."<meta property=\"og:url\" content=\"".$url."\">");
	fwrite($f_out,"\n"."<script src=\"https://vk.com/js/api/share.js?95\" charset=\"windows-1251\"></script>");
	fwrite($f_out,"\n"."</head>");
	fwrite($f_out,"\n"."<body>");
	fwrite($f_out,"\n"."<div id=\"shareBtn\" class=\"btn btn-success clearfix\">Share FB</div/>");
	fwrite($f_out,"\n"."<div id=\"vk_share_button\" class=\"btn btn-success clearfix\">Share VK</div/>");
	fwrite($f_out,"<h6>".$userFingerprintFb."</h6>");
	fwrite($f_out,"<h5 class=\"userFingerprintVk\">".$userFingerprintVk."</h5>");
	fwrite($f_out,"<h5 class=\"filesize\">".filesize($filename)."</h5>");
	fwrite($f_out,"\n"."<script src=\"js/jquery-3.2.1.min.js\"></script>");
	fwrite($f_out,"\n"."<script src=\"js/main.js\"></script>");
	fwrite($f_out,"\n"."</body>");
	fwrite($f_out,"\n"."</html>");
	fclose($f_out);

	header("Location:" .$userFingerprintFb. ".html");
	die();

?>