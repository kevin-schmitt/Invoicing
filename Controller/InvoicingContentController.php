<?php

	require_once '../vendor/autoload.php';
  session_start();
	$invoice = unserialize($_SESSION['invoice']);

	include_once('../view/invoiceContent.php')

?>
