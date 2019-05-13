<?php 

	function tachTen ($name){
		$data = explode(" ",$name);
		$ho = $data[0];
		$ten = $data[str_word_count($name)-3];
		$delDau = array_shift($data);
		$delCuoi = array_pop($data);
		$tenDem = implode(" ",$data);

		echo "Họ và Tên: ".$name;
		echo "<br>Họ: ".$ho;
		echo "<br>Đệm: ".$tenDem;
		echo "<br>Tên: ".$ten;
	}

	$duongQua = "Duơng Vũ Văn Quá";
	$coCo = "Lưu Diệc Phi";

	tachTen($duongQua);
	echo "<br>-----------------------------------<br>";
	tachTen($coCo);