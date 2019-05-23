<?php 
session_start();

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
	<center>
		<h1>GIỎ HÀNG</h1>
		<br>
	</center>
	<div style="color: red; float: left; font-size: 30px;" class="container">
			<?php 

				echo (isset($_COOKIE['add']))?$_COOKIE['add']:'';
				echo (isset($_COOKIE['add1']))?$_COOKIE['add1']:'';
				echo (isset($_COOKIE['minus']))?$_COOKIE['minus']:''; 
				echo (isset($_COOKIE['del']))?$_COOKIE['del']:'';
		 	?>
		</div>
	
	<table class="table">
		<thead>
			<tr>
				<th>STT</th>
				<th>Mã sản phẩm</th>
				<th>Tên sản phẩm</th>
				<th>Số lượng</th>
				<th>Giá tiền (VNĐ/SP)</th>
				<th>Thành tiền</th>
				<th>#</th>
			</tr>
		</thead>
		<tbody>
			<?php 
				$i=0;
				$tongtien = 0;
				foreach ($_SESSION['cart'] as $product) {
				$i++;
				$tongtien += $product['Gia']*$product['SoLuong'];
			 ?>
			<tr>
				<td><?php echo $i; ?></td>
				<td><?php echo $product['MaSP'];?></td>
				<td><?php echo $product['TenSP'];?></td>
				<td>
					<a href="add2cart.php?MaSP=<?php echo$product['MaSP']; ?>" class="btn btn-success">+</a>
					<?php echo $product['SoLuong'];?>
					<a href="minus_cart.php?MaSP=<?php echo$product['MaSP']; ?>" class="btn btn-danger">-</a>
				</td>
				<td><?php echo number_format($product['Gia']);?></td>
				<td><?php echo number_format($product['Gia']*$product['SoLuong']);?></td>
				<td>
					<a href="delete.php?MaSP=<?php echo $product['MaSP']; ?>" class="btn btn-danger">DELETE</a>
				</td>
			</tr>
			<?php } ?>
		</tbody>	
	</table>
	<h4 style="text-align: center;">Thành tiền: <?php echo number_format($tongtien).' VNĐ';?></h4>
	<br>
	<div class="container">
		<a href="product_list.php" class="btn btn-secondary" style="float: left;"><h6>Tiếp tục mua hàng</h6></a>
		<a href="signIn.php" class="btn btn-info" style="float: right;"><h6>Thanh toán</h6></a>
	</div>
	
</body>
</html>