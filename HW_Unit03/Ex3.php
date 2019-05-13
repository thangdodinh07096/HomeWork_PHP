<?php
    function kiem_tra_chuoi_palindrome($string)   
	{  
	if ($string == strrev($string))  
		return 1;  
	else  
		return 0;  
	}
	$str = "ZenttneZ";
	echo "Chuỗi đầu vào: ".$str;  
	if (kiem_tra_chuoi_palindrome($str) == 1)
		echo "<br>Chuỗi: ".$str." có là chuỗi Palindrome."; 
	else 
		echo "<br>Chuỗi: ".$str." không là chuỗi Palindrome.";
?>