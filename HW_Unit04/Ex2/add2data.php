<?php 

	session_start();
	$MSV = $_POST['msv'];

	$_SESSION['infor'][$MSV] = array(
		"MSV" => $_POST['msv'],
		"TenSV" => $_POST['name'],
		"mail" => $_POST['mail'],
		"sdt" => $_POST['sdt'],
		"gt" => $_POST['gt'],
		"address" => $_POST['address'],
		"#" => "#",
	);

		echo "<pre>";
			print_r($_SESSION['infor']);
		echo "</pre>";

		// header('loaction: data.php');

 ?>