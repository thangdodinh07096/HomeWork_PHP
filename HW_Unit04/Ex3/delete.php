<?php 

	session_start();
	$MaSP = $_GET['MaSP'];
	if (isset($_SESSION['cart'][$MaSP])) {
		unset($_SESSION['cart'][$MaSP]);
	}
	header('location: cart.php');
 ?>