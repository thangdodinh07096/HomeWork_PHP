<?php 

	session_start();

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
					<td><a href="detail.php?MSV=<?php echo$student['MSV']; ?>" class="btn btn-info">#Detail</a></td>
				</tr>
			<?php } ?>
		</tbody>
		
	</table>
	<a href="signIn.php" class="btn btn-secondary"><h5>Back</h5></a>
</body>
</html>