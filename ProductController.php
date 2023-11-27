<?php

	class POS_Activity{
      public function POS_System($price,$dis,$vat){
        static $s1 = 1;
        $dis_price = $price - ($price * $dis)/100;
        $vat_price = $dis_price + ($dis_price*$vat)/100;
        $data = [$s1,$vat_price];
        $s1++;
        return $data;	
      }

    }
    if(isset($_post['submit'])){
      $POS_System = new POS_Activity;
      $result_arry = $POS_System->POS_System($_post['product_price'],$_post['product_discount'],$_post['product_vat']);
	  print_r($result_arry);

    }




?>