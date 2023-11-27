<?php

	trait userActivation{
		public function activeUser($ids){
			$active_user_list = [1,2,3,4,5,6,7];
			if(in_array($ids,$active_user_list)){
				echo "Active";	
			}else{
				echo "Deactive";
			}
		}
	
	}




?>