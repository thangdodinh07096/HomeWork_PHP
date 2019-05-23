<?php 

	session_start();

	$_SESSION['MKH'] = $_POST['mkh'];
	$_SESSION['infor'][$_SESSION['MKH']] = array(
		"MKH" => $_POST['mkh'],
		"TenKH" => $_POST['name'],
		"Mail" => $_POST['mail'],
		"SDT" => $_POST['sdt'],
		"GT" => $_POST['gt'],
		"Address" => $_POST['address'],
		"#" => "#",
	);
	echo "<pre>";
			print_r($_SESSION['infor'][$_SESSION['MKH']]);
		echo "</pre>";

	header("location: customer-detail.php");

 ?>