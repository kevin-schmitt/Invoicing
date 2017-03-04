<form class="form " id="contentInvoice" action="../Controller/add/addRowInvoiceController.php" method="POST">
	<label class="well w3-blue"> Invoicing content</label>
	<input type="number" placeholder="row ifdentification" name="nbSI" id="nbSI">
	<input type="text" placeholder="Product" name="product" id="product">
	<input type="text" placeholder="quantity" name="quantity" id="quantity">
	<input type="number" placeholder="Rate" name="rate" id="rate">
	<input type="submit" name="generateContentInvoice" value="Add row in invoice">
</form>
