<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title> Invoicing </title>
		<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.css">
		<link rel="stylesheet" type="text/css" href="../css/style.css">
	</head>
	<body lang="en">
		<section>
			<article class="col-12">
				<?php
					require __DIR__ . '/../Form/contentInvoice.php';
				?>
			</article>
		</section>
	</body>
	<script
	src="https://code.jquery.com/jquery-3.1.1.min.js"
	integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8="
	crossorigin="anonymous"></script>
	<script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
		<script type="text/javascript" src="../js/generatePdf.js"></script>
  <script src="../js/invoiceContentAjax.js"></script>
</html>
