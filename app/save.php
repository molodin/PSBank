<?php
	$filteredDataFb=substr($_POST['img-val-fb'], strpos($_POST['img-val-fb'], ",")+1);

	$unencodedDataFb=base64_decode($filteredDataFb);

	$userFingerprintFb = $_SERVER['REMOTE_ADDR'].$_SERVER['HTTP_USER_AGENT'].'fb';
	$userFingerprintFb = md5($userFingerprintFb);

	file_put_contents($userFingerprintFb . '.png', $unencodedDataFb);

	$filteredDataVk=substr($_POST['img-val-vk'], strpos($_POST['img-val-vk'], ",")+1);

	$unencodedDataVk=base64_decode($filteredDataVk);

	$userFingerprintVk = $_SERVER['REMOTE_ADDR'].$_SERVER['HTTP_USER_AGENT'].'vk';
	$userFingerprintVk = md5($userFingerprintVk);

	file_put_contents($userFingerprintVk . '.png', $unencodedDataVk);

	header("Location: index.php");
	die();
?>