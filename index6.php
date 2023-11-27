<?php 

	interface APIResource{
		public function APIUsername();
		public function APIPassword($password);
		public function APISecretkey();
		
		
		
	}	
	
	class APIImplement implements APIResource{
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