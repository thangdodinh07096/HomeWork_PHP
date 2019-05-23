<?php 

	session_start();
	$MaSP = $_GET['MaSP'];
	if (isset($_SESSION['cart'][$MaSP])) {
		unset($_SESSION['cart'][$MaSP]);
		setcookie('del', 'Xóa mặt hàng khỏi giỏ thành công!', time() + 1);
	}
	header('location: cart.php');
 ?>