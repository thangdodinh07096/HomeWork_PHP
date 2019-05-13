<?php 

	function chuanHoa($str){
		$str = trim($str);
		$str = strtolower($str);
		$str_cp = $str;
		$n = strlen($str);
		$str{0} = strtoupper($str{0});
		for($i = 1; $i < $n; $i++)
		{
			if($str{$i} == ' ')
			{
				$str{$i+1} = strtoupper($str{$i+1});
				$i++;
			}   
		}
		echo $str;
	}

		$str = "    dO     dInh                     ThAng      ";
		echo htmlentities($str)."<br>";
		echo chuanHoa($str);
?>