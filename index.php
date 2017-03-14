<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title> Invoicing </title>
		<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.css">
		<link rel="stylesheet" type="text/css" href="css/style.css">
	</head>
	<body lang="en">
		<nav class="container-fluid row">
  		<ul class="nav nav-pills nav-justified">
		    <li class="active"><a href="#">Home</a></li>
		  </ul>
		</nav>
		<section class="row">
			<article class="col-12">
				<?php
					include_once('form/invoicingForm.php');
				?>
			</article>
		</section>
		<script
		src="https://code.jquery.com/jquery-3.1.1.min.js"
		integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8="
		crossorigin="anonymous"></script>
		<script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	</body>
</html>
