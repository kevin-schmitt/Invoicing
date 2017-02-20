<?php
	namespace test2;
	class Function{
	
		public function test_input($var){
			$data = trim($data);
		    $data = stripslashes($data);
		    $data = htmlspecialchars($data);
		    return $data;
		}
		
	}


?>