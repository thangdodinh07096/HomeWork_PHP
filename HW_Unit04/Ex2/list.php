<?php 

	session_start();
	$MSV = $_POST['msv'];
	$_SESSION['infor'][$MSV] = array(
		"MSV" => $_POST['msv'],
		"TenSV" => $_POST['name'],
		"Mail" => $_POST['mail'],
		"Sdt" => $_POST['sdt'],
		"GT" => $_POST['gt'],
		"Address" => $_POST['address'],
		"#" => "#",
	);
	if (isset($_POST['msv']) && isset($_POST['name']) && isset($_POST['mail']) && isset($_POST['sdt']) && isset($_POST['gt']) && isset($_POST['address'])) {		
	} else {
		header('location: signIn.php');
	}

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>List</title>

	<link rel="stylesheet" href="bootstrap-4.3.1-dist/css/bootstrap.min.css">
	<script src="bootstrap-4.3.1-dist/js/bootstrap.min.js"></script>

</head>
<body>
	<center>
		<h1>DANH SÁCH SINH VIÊN</h1>
	</center>
	
	<br>
	<table class="table">
		<thead>
			<tr>
				<th>STT</th>
				<th>Tên sinh viên</th>
				<th>Mã Sinh Viên</th>
				<th>Email</th>
				<th>#</th>
			</tr>
		</thead>
		<tbody>
			<?php 
			$i=0;
			foreach ($_SESSION['infor'] as $student) {
				$i++;
				?>
				<tr>
					<td><?php echo $i; ?></td>
					<td><?php echo $student['TenSV']; ?></td>
					<td><?php echo $student['MSV']; ?></td>
					<td><?php echo $student['Mail']; ?></td>
					<td>#Detail</td>
				</tr>
			<?php } ?>
		</tbody>
		
	</table>
	<a href="signIn.php" class="btn btn-secondary"><h5>Back</h5></a>
</body>
</html>