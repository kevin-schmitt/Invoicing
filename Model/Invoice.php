<?php

	class Facture{
		
		private $_id;
		private $_date;
		private $_person;
		private $_total;
		
		public function __construct(){
			
		}
		
		public function getId(){
			return $this->_id;
		}
		
		public function setId($id){			
			$this->_id = $id;
		}
		
		public function getDate(){
			return $this->_date;
		}
		
		public function setDate($newDate){			
			$this->_date = $newDate;
		}
		
		public function getPerson(){
			return $this->_person;
		}
		
		public function setPerson(Person $person){			
			$this->_person = $person;
		}
		
		public function getTotal(){
			return $this->_total;
		}
		
		public function setTotal($total){			
			$this->_total = $total;
		}
		
	}

