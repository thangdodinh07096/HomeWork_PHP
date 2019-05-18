<?php 

	session_start();
	require_once("data.php");
	$MaSP = $_GET['MaSP'];
	if (isset($_SESSION['cart'][$MaSP])) {
		$_SESSION['cart'][$MaSP]['SoLuong']++;
	}
	else {
		$product = $products[$MaSP];
		$product['SoLuong']='1';
		$_SESSION['cart'][$MaSP] = $product;
	}
	header('location: cart.php');

 ?>