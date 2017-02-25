<form class="form " action="Controller/invoicingController.php" method="POST">
	<label class="well w3-blue"> Invoicing </label>
	<input type="text" placeholder="corporation name" name="coporationName" id="coporationName">
	<input type="text" placeholder="corporation adress" name="corporationAdress" id="corporationAdress">
	<input type="text" placeholder="buyer Name" name="buyerName" id="BuyerName">
	<input type="text" placeholder="buyer Adress" name="buyerAdress" id="buyerAdress">
	<input type="number" placeholder="number of invoice" name="nbInvoice" id="nbInvoice">
	<input type="date"  name="date" id="date">
	<input type="submit" name="generateInvoice" value="Generate invoicing">
</form>
