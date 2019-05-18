<?php 
require_once("data.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Products</title>

	<link rel="stylesheet" href="bootstrap-4.3.1-dist/css/bootstrap.min.css">
	<script src="bootstrap-4.3.1-dist/js/bootstrap.min.js"></script>

</head>
<body>
	<center><h1>DANH SÁCH SẢN PHẨM</h1></center>
	<br>
	<table class="table">
		<thead>
			<tr>
				<th>STT</th>
				<th>Mã sản phẩm</th>
				<th>Tên sản phẩm</th>
				<th>Số lượng</th>
				<th>Giá</th>
				<th>#</th>

			</tr>
		</thead>
		<tbody>
			<?php 
				$i=0;
				foreach ($products as $product) {
				$i++;
			 ?>
			<tr>
				<td><?php echo $i; ?></td>
				<td><?php echo $product['MaSP']; ?></td>
				<td><?php echo $product['TenSP']; ?></td>
				<td><?php echo $product['SoLuong']; ?></td>
				<td><?php echo $product['Gia']; ?></td>
				<td><a href="add2cart.php?MaSP=<?php echo$product['MaSP']; ?>" class="btn btn-success">ADD</a></td>
			</tr>

		<?php } ?>
		</tbody>
		
	</table>
</body>
</html>