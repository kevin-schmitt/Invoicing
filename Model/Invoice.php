<?php
	namespace Model;
	class Invoice{

		private $_number = null;
		private $_date = null;
		private $_buyer = null;
		private $_contentInvoice = array();
		private $_corporation = null;
		private $_total = null;

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

		public function getDate(){
			return $this->_date;
		}

		public function setDate($newDate){
			$this->_date = $newDate;
		}

		public function getBuyer(){
			return $this->_buyer;
		}

		public function setBuyer(Buyer $buyer){
      $this->_buyer = $buyer;
		}

		public function getCorporation(){
			return $this->_corporation;
		}

		public function setCorporation(Corporation $corporation){
			$this->_corporation = $corporation;
		}
		public function getTotal(){
			return $this->_total;
		}

		public function setTotal($total){
			$this->_total = $total;
		}

		/**
		 * Add new row to Invoice
		 *
		 * @access public
		 * @public
		 * @param object, key
		 * @return void
		 */
		public function addContentInvoice($obj, $key = null) {
	    if ($key == null) {
	        $this->items[] = $obj;
	    }
	    else {
	        if (isset($this->items[$key])) {
	            throw new KeyHasUseException("Key $key already in use.");
	        }
	        else {
	            $this->items[$key] = $obj;
	        }
	    }
		}

		/**
		 * delete row in Invoice
		 *
		 * @access public
		 * @public
		 * @param  key
		 * @return void
		 */
		public function deleteContentInvoice($key) {
	    if (isset($this->items[$key])) {
	        unset($this->items[$key]);
	    }
	    else {
	        throw new KeyInvalidException("Invalid key $key.");
	    }
		}

		/**
		 * get row of invoice with key
		 *
		 * @access public
		 * @public
		 * @param  key
		 * @return void
		 */
		public function getContentInvoice($key) {
		 if (isset($this->items[$key])) {
		 	return $this->items[$key];
		 }
		 else {
		   throw new KeyInvalidException("Invalid key $key.");
		 }
		}

	}
