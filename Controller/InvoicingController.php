<?php

	require_once '../vendor/autoload.php';

	if(filter_input(INPUT_POST, 'generateInvoice', FILTER_SANITIZE_STRING))
	{
		// Entity
		$corporation = new Model\Corporation();
		$buyer = new Model\Buyer();
		$invoice = new Model\Invoice();

		// check data send
		$corporationName = filter_input(INPUT_POST, 'coporationName', FILTER_SANITIZE_STRING);
		$corporationAdress = filter_input(INPUT_POST, 'corporationAdress', FILTER_SANITIZE_STRING);
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

		ob_start();
	    include('../functions/InvoicePdf.php');
	    $content = ob_get_clean();

		$mpdf=new mPDF('c','A4','','' , 0 , 0 , 0 , 0 , 0 , 0);

		$mpdf->SetDisplayMode('fullpage');

		$mpdf->list_indent_first_level = 0;  // 1 or 0 - whether to indent the first level of a list

		$mpdf->WriteHTML($content);

		$mpdf->Output();

	}
