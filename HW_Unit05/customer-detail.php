<?php 
	session_start();

 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Customer Detail</title>
	<link rel="stylesheet" href="bootstrap-4.3.1-dist/css/bootstrap.min.css">
	<script src="bootstrap-4.3.1-dist/js/bootstrap.min.js"></script>
</head>
<body>
	<div class="container">		
		<h1>Thông tin khách hàng có MSKH: <?php echo $_SESSION['MKH']; ?></h1>
		<br>
		<h5>
		<?php 

		echo 'Họ và tên: '.$_SESSION['infor'][$_SESSION['MKH']]['TenKH'].'<br>';
		echo 'Mã khách hàng: '.$_SESSION['infor'][$_SESSION['MKH']]['MKH'].'<br>';
		echo 'Mail: '.$_SESSION['infor'][$_SESSION['MKH']]['Mail'].'<br>';
		echo 'Số điện thoại: '.$_SESSION['infor'][$_SESSION['MKH']]['SDT'].'<br>';
		echo 'Giới tính: '.$_SESSION['infor'][$_SESSION['MKH']]['GT'].'<br>';
		echo 'Địa chỉ: '.$_SESSION['infor'][$_SESSION['MKH']]['Address'].'<br>';

	 	?>
	 	</h5>
	 	<br>
	 	<a href="signIn.php" class="btn btn-secondary" style="float: left;"><h5>Sửa thông tin</h5></a>
	 	<a href="send-mail.php" class="btn btn-warning" style="float: right;"><h5>Xác nhận</h5></a>
	</div>
</body>
</html>
