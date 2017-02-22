<?php

	require_once '../vendor/autoload.php';

	if(filter_input(INPUT_POST, 'generateInvoice', FILTER_SANITIZE_STRING))
	{
		$corporation = new Model\Corporation();

		$corporationName = filter_input(INPUT_POST, 'coporationName', FILTER_SANITIZE_STRING);
		$corporationAdress = filter_input(INPUT_POST, 'corporationAdress', FILTER_SANITIZE_STRING);

		$corporation->setName($corporationName);
		$corporation->setAdress($corporationAdress);

		session_start();
		$_SESSION['corporation'] = serialize($corporation);
		ob_start();  
	    include('../functions/InvoicePdf.php');
	    $content = ob_get_clean(); 

  	$mpdf=new mPDF('c','A4','','' , 0 , 0 , 0 , 0 , 0 , 0);

		$mpdf->SetDisplayMode('fullpage');

		$mpdf->list_indent_first_level = 0;  // 1 or 0 - whether to indent the first level of a list

		$mpdf->WriteHTML($content);

		$mpdf->Output();

	}




?>
