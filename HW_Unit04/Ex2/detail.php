<?php 
	session_start();
	$MSV = $_GET['MSV'];
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Student Detail</title>
	<link rel="stylesheet" href="bootstrap-4.3.1-dist/css/bootstrap.min.css">
	<script src="bootstrap-4.3.1-dist/js/bootstrap.min.js"></script>
</head>
<body>
	
	<h1>Thông tin sinh viên có MSV: <?php echo $MSV; ?></h1>
	<br>
	<h5>
	<?php 

	echo 'Họ và tên: '.$_SESSION['infor'][$MSV]['TenSV'].'<br>';
	echo 'Mã sinh viên: '.$_SESSION['infor'][$MSV]['MSV'].'<br>';
	echo 'Mail: '.$_SESSION['infor'][$MSV]['Mail'].'<br>';
	echo 'Số điện thoại: '.$_SESSION['infor'][$MSV]['SDT'].'<br>';
	echo 'Giới tính: '.$_SESSION['infor'][$MSV]['GT'].'<br>';
	echo 'Địa chỉ: '.$_SESSION['infor'][$MSV]['Address'].'<br>';

 	?>
 	</h5>
 	<br>
 	<a href="list.php" class="btn btn-secondary"><h5>Back to list</h5></a>

</body>
</html>
