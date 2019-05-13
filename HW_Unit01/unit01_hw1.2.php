<?php 
	$a = 100;
	$b = 10;
	echo "Cho phuong trinh: ".$a."x + ".$b." = 0";
	echo "<br>--------------------------------------";
	if ($a == 0 ) {
		if ($b == 0) {
			echo "<br>Phuong trinh vo so nghiem.";
		} else echo "<br>Phuong trinh vo nghiem.";
	} else echo "<br>Phuong trinh co nghiem: x = ".-$b/$a;
	
?>