<?php

	session_start();
	$MaSP = $_GET['MaSP'];
	if (isset($_SESSION['cart'][$MaSP]) && $_SESSION['cart'][$MaSP]['SoLuong'] > 1) {
		$_SESSION['cart'][$MaSP]['SoLuong']--;
		setcookie('minus', 'Bỏ 1 hàng khỏi giỏ!', time() + 1);
	}
	else {
		unset($_SESSION['cart'][$MaSP]);
		setcookie('del', 'Xóa mặt hàng khỏi giỏ thành công!', time() + 1);
	}
	header('location: cart.php');

 ?>