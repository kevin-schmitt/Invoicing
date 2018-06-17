<!-- general form for definition of corporation No si ...-->
<form class="form " name="addInvoice" action="invoice/add" method="POST">
	<label class="well"><h1> Invoicing </h1></label>
	<input type="text" placeholder="corporation name" name="coporationName" id="coporationName">
	<input type="text" placeholder="corporation adress" name="corporationAdress" id="corporationAdress">
	<input type="text" placeholder="buyer Name" name="buyerName" id="BuyerName">
	<input type="text" placeholder="buyer Adress" name="buyerAdress" id="buyerAdress">
	<input type="number" placeholder="number of invoice" name="nbInvoice" id="nbInvoice">
	<input type="date"  name="date" id="date">
	<button type="submit" name="generateInvoice" value="generateInvoice" class="form-control input-lg btn btn-success">
		<span class="glyphicon glyphicon-send">Generate invoicing</span>
	</button>
</form>
