<?php 
	$a = 1;
	$b = -5;
	$c = 6;
	$delta = $b*$b - 4*$a*$c;
	echo "Cho phuong trinh: ".$a."x^2 + ".$b."x + ".$c." = 0";
	echo "<br>--------------------------------------";
	if ($a == 0) {
		if ($b == 0 ) {
			if ($c == 0) {
				echo "<br>Phuong trinh vo so nghiem.";
			} else echo "<br>Phuong trinh vo nghiem.";
		} else echo "<br>Phuong trinh co nghiem: x = ".-$c/$b;
	} else {
		if ($delta < 0) {
			echo "<br>Phuong trinh vo nghiem.";
		}
		if ($delta == 0) {
			echo "<br>Phuong trinh co nghiem kep: x1 = x2 = ".-$b/(2*$a);
		}
		if ($delta > 0) {
			echo "<br>Phuong trinh co 2 nghiem phan biet: x1 = ".(-$b-sqrt($delta))/(2*$a)."; x2 = ".(-$b+sqrt($delta))/(2*$a);
		}
	}
?>