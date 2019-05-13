<?php

$arr = [1, 3, 4, 74, 15, 54, 120, 144];
$out = array();

for ($i = (count($arr)-1); $i >= 0; $i--) { 
	$out[] = $arr[$i];
}

echo "Mang dau vao: ";
foreach ($arr as $key => $value)
	echo $value.' ';
echo "<br>Mang in ra: ";
foreach ($out as $key => $value)
	echo $value.' ';