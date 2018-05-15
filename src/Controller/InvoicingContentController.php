<?php

	$invoice = unserialize($_SESSION['invoice']);

	require __DIR__ . '/../views/invoiceContent.php';

?>
