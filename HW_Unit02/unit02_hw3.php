<?php

$arr = [1,3,4,74,1555,54,120,144];
$max = $arr[0];

for ($i = 0; $i < (count($arr)-1); $i++) { 
	if ($max <= $arr[$i])
		$max = $arr[$i];
}

echo "Mang dau vao: ";
foreach ($arr as $key => $value)
	echo $value.' ';
echo "<br>Phan tu lon nhat trong mang: ".$max;