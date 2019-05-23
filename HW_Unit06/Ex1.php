<?php 
	
	class product{
		var $MSP;
		var $TenSP;
		var $soLuong;
		var $hangSX;
		function inTT(){
			echo "Thông tin của sản phẩm: ".$this->TenSP;
			echo "<br>--------------------------------------";
			echo "<br>Mã sản phẩm: ".$this->MSP;
			echo "<br>Tên sản phẩm: ".$this->TenSP;
			echo "<br>Số lượng sản phẩm: ".$this->soLuong;
			echo "<br>Hãng sản xuất: ".$this->MSP;
			echo "<br>";
		}
	}
	// Sản phẩm 1
	$laptop_ASUS = new product();
	$laptop_ASUS->MSP = "20148984";
	$laptop_ASUS->TenSP = "Laptop ASUS TUF-503";
	$laptop_ASUS->soLuong = "200";
	$laptop_ASUS->hangSX = "ASUS";
	$laptop_ASUS->inTT();
	// Sản phẩm 2
	$bmwi8 = new product();
	$bmwi8->MSP = "15031998";
	$bmwi8->TenSP = "BMW i8";
	$bmwi8->soLuong = "5";
	$bmwi8->hangSX = "BMW";
	$bmwi8->inTT();
	// Sản phẩm 1
	$ipXSmax = new product();
	$ipXSmax->MSP = "07091998";
	$ipXSmax->TenSP = "Iphone XS max";
	$ipXSmax->soLuong = "50";
	$ipXSmax->hangSX = "APPLE";
	$ipXSmax->inTT();
 ?>