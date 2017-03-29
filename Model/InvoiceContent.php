<?php
	namespace Model;
	class InvoiceContent{

		private $_number = 0;
		private $_product = "";
		private $_quantity = 0;
		private $_rate;
		private $_total = 0;

		public function __construct(){

		}

		public function getNumber(){
			return $this->_number;
		}

		public function setNumber($number){
            if(is_int($number)){
                $this->_number = $number;
			}

		}

		public function getProduct(){
			return $this->_product;
		}

		public function setProduct($product){
            if(is_string($product)){
                $this->_product = $product;
			}
		}

		public function getQuantity(){
			return $this->_quantity;
		}

		public function setQuantity($quantity){
            if(is_int($quantity)){
                $this->_quantity = $quantity;
			}
		}
		public function setRate($rate){
			$this->_rate = $rate;
		}

		public function getRate(){
			return $this->_rate;
		}

		public function setTotal($total){
			if(is_int($total)){
                $this->_total = $total;
			}
		}

		public function getTotal(){
			return $this->_total;
		}



	}
