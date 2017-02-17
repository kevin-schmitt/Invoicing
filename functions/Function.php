<?php
	namespace Invoicing\functions;
	class Function{
	
		public function test_input($var){
			$data = trim($data);
		    $data = stripslashes($data);
		    $data = htmlspecialchars($data);
		    return $data;
		}
		
		public function __autoload($className) {
			$file = $className . '.php';
			if(file_exists($file)) {
				require_once $file;
			}
		}
		
	}


?>