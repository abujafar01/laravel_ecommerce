<?php 

	abstract class APIResource{
		public abstract function APIUsername();
		
		
		
		
	}	
	
	class APIImplement extends APIResource{
		public function APIUsername(){
			echo "root";
		}
		public function APIPassword($password){
			echo md5($password);
		}
		public function APISecretkey(){
			echo "12345";
		}
		
		
	}
	
	$APIImplemen = new  APIImplement;
	$APIImplemen->APIUsername();
	$APIImplemen->APIPassword("blank");
	


?>