<?php
	namespace Model;
	class Invoice{
		
		private $_number;
		private $_date;
		private $_builder;
		private $_total;
		
		public function __construct(){
			
		}
		
		public function getNumber(){
			return $this->_number;
		}
		
		public function setNumber($number){			
			$this->_number = $number;
		}
		
		public function getDate(){
			return $this->_date;
		}
		
		public function setDate($newDate){			
			$this->_date = $newDate;
		}
		
		public function getBuilder(){
			return $this->_person;
		}
		
		public function setBuilder(Person $person){			
			$this->_person = $person;
		}
		
		public function getTotal(){
			return $this->_total;
		}
		
		public function setTotal($total){			
			$this->_total = $total;
		}
		
	}

