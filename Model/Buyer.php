<?php
	namespace Model;
	class Buyer{
		
		private $_id;
		private $_name;
		private $_adress;
		
		public function __construct(){
			
		}
		
		public function getId(){
			return $this->_id;
		}
		
		public function setId($id){			
			$this->_id = $id;
		}
		
		public function getName(){
			return $this->_name;
		}
		
		public function setName($name){			
			$this->_name = $name;
		}
		
		public function getAdress(){
			return $this->_adress;
		}
		
		public function setAdress($adress){			
			$this->_adress = $adress;
		}
		
		
	}

