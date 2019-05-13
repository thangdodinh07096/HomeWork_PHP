<?php

$a = [2, 3, 8, 1, 7, 9, 6, 12, 15, 13,2524132];
$chan = array();
$le = array();

for ($j=0; $j < count($a) ; $j++) { 
	if ($a[$j]%2==0)
		$chan[] = $a[$j];
	else
		$le[] = $a[$j];
}

echo "Mang ban dau: ";
foreach ($a as $key => $value)
	echo $value.' ';
echo "<br>Mang chan: ";
foreach ($chan as $key => $value)
	echo $value.' ';

echo "<br>Mang le: ";
foreach ($le as $key => $value)
	echo $value.' ';