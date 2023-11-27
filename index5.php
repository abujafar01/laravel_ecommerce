<?php

	include('master.php');
	include('helper.php');
	
	class POS_Activity extends Controller{
		use userActivation;
		public $servername = "Localhost";
		protected  $password = "123";
		private $username = "korim";
		
		
		public function POS_System($price,$dis,$vat){
			static $s1 = 1;
			$dis_price = $price - ($price * $dis)/100;
			$vat_price = $dis_price + ($dis_price*$vat)/100;
			$data = [$s1,$vat_price];
			$s1++;
			return $data;	
		}
		public function checkPrivate(){
			echo $this->username;
		}
		public function userId(){
			return 32;
		}
	}
	
	$POS_Activity = new POS_Activity;
	/*
	$POS_Activity = new POS_Activity;
	$return_data = $POS_Activity->POS_System(100,2,10);
	$POS_Activity->DatabaseConnection();
	$POS_Activity->checkPrivate();
	echo $POS_Activity->username;
	echo $return_data[0].". Product Price ".$return_data[1]."<br>";
	*/
	$ids = $POS_Activity->userId();
	$POS_Activity->activeUser($ids);	
?>