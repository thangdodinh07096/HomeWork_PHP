<?php 

	session_start();

	$MSV = $_POST['msv'];

	$_SESSION['infor'][$MSV] = array(
		"MSV" => $_POST['msv'],
		"TenSV" => $_POST['name'],
		"Mail" => $_POST['mail'],
		"Sdt" => $_POST['sdt'],
		"GT" => $_POST['gt'],
		"Address" => $_POST['address'],
		"#" => "#",
	);

	$i=0;
	foreach ($_SESSION['infor'] as $student) {
		$i++;
	}
	header("list.php");
	

 ?>