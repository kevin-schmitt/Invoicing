<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title> Invoicing </title>
		<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		<link rel="stylesheet" href="https://www.w3schools.com/lib/w3.css">
		<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.css">
		<link rel="stylesheet" type="text/css" href="css/style.css">
	</head>
	<body lang="en">
		<section class="w3-container w3-row">
			<article class="w3-col m4 l4">
				<?php
					include_once('form/invoicingForm.php');
				?>
			</article>
			<article class="w3-margin-left w3-col m4 l4">
				<?php
					include_once('form/contentInvoice.php');
				?>
			</article>
		</section>
	</body>
</html>