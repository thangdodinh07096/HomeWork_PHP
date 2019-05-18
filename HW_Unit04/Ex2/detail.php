<?php 

	session_start();

	require_once("data.php")

	$MSV = $_POST['msv'];

	$_SESSION['infor'][$MSV]; 

	echo $student['TenSV'];
	echo $student['MSV'];
	echo $student['Mail'];
	// = array(
	// 	"MSV" => $_POST['msv'],
	// 	"TenSV" => $_POST['name'],
	// 	"mail" => $_POST['mail'],
	// 	"sdt" => $_POST['sdt'],
	// 	"gt" => $_POST['gt'],
	// 	"address" => $_POST['address'],
	// 	"#" => "#",
	// );

	// 	echo "<pre>";
	// 		print_r($_SESSION['infor']);
	// 	echo "</pre>";

 ?>