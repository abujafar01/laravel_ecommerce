<?php
	namespace BaseFunction;
	class Controller{
		public $parent_property = "parent";
		public function DatabaseConnection(){
			echo "data base connected";
		}	
		
	}
	
	namespace UserDefineFunction;
	class Controller{
		public $parent_property = "parent";
		public function DatabaseConnection(){
			echo " User Define data base connected";
			echo "<br>";
		}	
		
	}
	
	$UserDefineFunction = new \UserDefineFunction\Controller;
	$UserDefineFunction->DatabaseConnection();
		
	$BaseFunction = new \BaseFunction\Controller;
	$BaseFunction->DatabaseConnection();

?>