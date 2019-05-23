<?php 

	session_start();
	require_once("data_product.php");
	$MaSP = $_GET['MaSP'];
	if (isset($_SESSION['cart'][$MaSP])) {
		$_SESSION['cart'][$MaSP]['SoLuong']++;
		setcookie('add1', 'Thêm 1 hàng vào giỏ!', time() + 1);
	}
	else {
		$product = $products[$MaSP];
		$product['SoLuong']='1';
		$_SESSION['cart'][$MaSP] = $product;
		setcookie('add', 'Thêm hàng vào giỏ thành công!', time() + 1);
	}
	header('location: cart.php');

 ?>