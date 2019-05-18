<?php

	session_start();
	$MaSP = $_GET['MaSP'];
	if (isset($_SESSION['cart'][$MaSP]) && $_SESSION['cart'][$MaSP]['SoLuong'] > 1) {
		$_SESSION['cart'][$MaSP]['SoLuong']--;
	}
	else {
		unset($_SESSION['cart'][$MaSP]);
	}
	header('location: cart.php');

 ?>