<?php
	require_once '../vendor/autoload.php';
	
	if(filter_input(INPUT_POST, 'generateInvoice', FILTER_SANITIZE_STRING))
	{
		$Invoice = new Model\Corporation();
		
		$corporationName = filter_input(INPUT_POST, 'corporationName', FILTER_SANITIZE_STRING);
		$corporationAdress = filter_input(INPUT_POST, 'corporationAdress', FILTER_SANITIZE_STRING);
		
		$Corporation->setName($corporationName);
		$Corporation->setName($corporationAdress);
		
		
		$mpdf=new mPDF('c','A4','','' , 0 , 0 , 0 , 0 , 0 , 0); 
		$mpdf->SetDisplayMode('fullpage');
		 
		$mpdf->list_indent_first_level = 0;  // 1 or 0 - whether to indent the first level of a list
		 
		$mpdf->WriteHTML(file_get_contents('./functions/InvoicePdf.html'));
				 
		$mpdf->Output();
	}



	
?>