<?php
/**
* generate global information of invoice
**/
	require_once '../vendor/autoload.php';

	if(filter_input(INPUT_POST, 'generateInvoice', FILTER_SANITIZE_STRING))
	{
		// Entity
		try {

			$corporation = new Model\Corporation();
			$buyer = new Model\Buyer();
			$invoice = new Model\Invoice();

			// check data send
			$corporationName = filter_input(INPUT_POST, 'coporationName', FILTER_SANITIZE_STRING);
			$corporationName = $corporationName ? $corporationName : '';
			$corporationAdress = filter_input(INPUT_POST, 'corporationAdress', FILTER_SANITIZE_STRING);
			$corporationAdress = $corporationAdress ? $corporationAdress : '';

			$buyerName = filter_input(INPUT_POST, 'buyerName', FILTER_SANITIZE_STRING);
			$buyerAdress = filter_input(INPUT_POST, 'buyerAdress', FILTER_SANITIZE_STRING);
			$nbInvoice = filter_input(INPUT_POST, 'nbInvoice', FILTER_SANITIZE_STRING);
			$nbInvoice = filter_input(INPUT_POST, 'date', FILTER_SANITIZE_STRING);

			$corporation->setName($corporationName);
			$corporation->setAdress($corporationAdress);

			$buyer->setName($buyerName);
			$buyer->setAdress($buyerAdress);

			$invoice->setNumber($nbInvoice);
			$invoice->setCorporation($corporation);
			$invoice->setBuyer($buyer);

			session_start();
			$_SESSION['invoice'] = serialize($invoice);
			header('Location: InvoicingContentController.php');
			exit;
		} catch (Exception $e) {
			session_destroy();
			header('Location: index.php');
			exit;
		}


	}
