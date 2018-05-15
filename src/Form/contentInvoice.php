<!-- deefinition of row in invoice -->
<form class="form " id="contentInvoice" action="../Controller/add/addRowInvoiceController.php" method="POST">
	<label class="well"><h1> Invoicing content </h1></label>
	<a id="pdf" ><img class="pdf" src="../img/pdf.png"></img></a>
	<input type="number" placeholder="row ifdentification" name="nbSI" id="nbSI">
	<input type="text" placeholder="Product" name="product" id="product">
	<input type="text" placeholder="quantity" name="quantity" id="quantity">
	<input type="number" placeholder="Rate" name="rate" id="rate">
	
	<button type="submit" name="generateContentInvoice" class="form-control input-lg btn btn-success">
		<span class="glyphicon glyphicon-send"> Add row in invoice</span>
	</button>
</form>
