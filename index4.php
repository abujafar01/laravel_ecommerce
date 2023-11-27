<?php
	function POS_System($price,$dis,$vat){
		static $s1 = 1;
		$dis_price = $price - ($price * $dis)/100;
		$vat_price = $dis_price + ($dis_price*$vat)/100;
		$data = [$s1,$vat_price];
		$s1++;
		return $data;	
	}
	//print_r(POS_System(100,2,10));
	$return_data = POS_System(100,2,10);
	echo $return_data[0].". Product Price ".$return_data[1]."<br>";
	
	
	$return_data = POS_System(200,2,10);
	echo $return_data[0].". Product Price ".$return_data[1]."<br>";
	
	
	$data = "My Name is Karim";
	echo ucfirst($data);
	
	echo "<br>";
	echo md5($data);
	
	echo "<br>";
	echo str_word_count($data);
	
	
	echo "<br>";
	echo trim($data);
	
	echo "<br>";
	echo strtoupper($data);
	
	echo "<br>";
	echo strtolower($data);
	
	echo "<br>";
	echo strip_tags($data);
	
	echo "<br>";
	echo htmlentities($data);
	
	
	echo "<br>";
	echo substr($data,0,3);
	
	
	
?>