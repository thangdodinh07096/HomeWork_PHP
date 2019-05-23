<?php 
    include_once('email.php');
	
	session_start();
    $products = $_SESSION['cart'];
    ob_start();
    include_once 'mail-content.php';
    $contents= ob_get_contents();
    ob_clean();
	send_email($_SESSION['infor'][$_SESSION['MKH']]['Mail'],$_SESSION['infor'][$_SESSION['MKH']]['TenKH'],$contents,'Đơn hàng');
    header('location: success.php');
    session_destroy();
 ?>
 