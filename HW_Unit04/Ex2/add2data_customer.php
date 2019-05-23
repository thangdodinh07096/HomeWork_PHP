<?php 

	session_start();

	$MSV = $_POST['msv'];
	$_SESSION['infor'][$MSV] = array(
		"MSV" => $_POST['msv'],
		"TenSV" => $_POST['name'],
		"Mail" => $_POST['mail'],
		"SDT" => $_POST['sdt'],
		"GT" => $_POST['gt'],
		"Address" => $_POST['address'],
		"#" => "#",
	);

	header("location: list.php");

 ?>