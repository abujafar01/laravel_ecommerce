<?php
	
	class HtmlGenerator{
		public $doctype = "<!DOCTYPE html>";
		public $head = "<head>";
		public $body = "<body>";
		public $head_end = "</head>";
		public $body_end = "</body>";
		public function __construct(){
			echo $this->doctype.$this->head.$this->head_end;
		}
		public function body(){
			echo "Your dynamic content here";
		}
		public function __destruct(){
			echo $this->body_end;
		}
		public function __get($error){
			echo "$error not exists";
		}
		public function __call($e,$value){
			echo "$e not exists".implode("",$value);
		}
		

	}
	
	$HtmlGenerator =new HtmlGenerator();
	$HtmlGenerator->body();
	$HtmlGenerator->randomData;
	$HtmlGenerator->demq("data1", "data2");
	

?>