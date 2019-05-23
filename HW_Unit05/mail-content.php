
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Đơn Hàng</title>
</head>
<body>
	<center>
		<h1>ĐƠN HÀNG</h1>
		<br>
	</center>
	
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
				foreach ($products as $product) {
				$i++;
				$tongtien += $product['Gia']*$product['SoLuong'];
			 ?>
			<tr>
				<td><?php echo $i; ?></td>
				<td><?php echo $product['MaSP'];?></td>
				<td><?php echo $product['TenSP'];?></td>
				<td><?php echo $product['SoLuong'];?></td>
				<td><?php echo number_format($product['Gia']);?></td>
				<td><?php echo number_format($product['Gia']*$product['SoLuong']);?></td>
			</tr>
			<?php } ?>
		</tbody>	
	</table>
	<h4 style="text-align: center;">Thành tiền: <?php echo number_format($tongtien).' VNĐ';?></h4>
	<br>
	
</body>
</html>