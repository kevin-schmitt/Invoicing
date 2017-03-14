<form class="form " id="contentInvoice" action="../Controller/add/addRowInvoiceController.php" method="POST">
	<label class="well"> Invoicing content</label>
	<a href=""><img class="pdf" src="../img/pdf.png"></img></a>
	<input type="number" placeholder="row ifdentification" name="nbSI" id="nbSI">
	<input type="text" placeholder="Product" name="product" id="product">
	<input type="text" placeholder="quantity" name="quantity" id="quantity">
	<input type="number" placeholder="Rate" name="rate" id="rate">
	<input type="submit" name="generateContentInvoice" value="Add row in invoice">
</form>
