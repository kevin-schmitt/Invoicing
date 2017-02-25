<?php
	namespace functions;
	class Function{

		public function test_input($var){
			$data = trim($data);
		    $data = stripslashes($data);
		    $data = htmlspecialchars($data);
		    return $data;
		}
		
		public function validateDate($date)
		{
			$d = DateTime::createFromFormat('Y-m-d', $date);
			if($d && $d->format('Y-m-d') === $date){
				return $date;
			}
			else
			{
				return date("d/m/Y") ;
			}
			
		}

	}


?>
