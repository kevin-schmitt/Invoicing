<?php

	require_once '../../vendor/autoload.php';

	// check data
	if($nbSI = filter_input(INPUT_POST, 'nbSI', FILTER_SANITIZE_STRING))
	{
		if($product = filter_input(INPUT_POST, 'product', FILTER_SANITIZE_STRING))
		{
			if($quantity = filter_input(INPUT_POST, 'quantity', FILTER_VALIDATE_INT))
			{
				if($rate = filter_input(INPUT_POST, 'rate', FILTER_VALIDATE_INT))
			 {
				 	session_start();
					$invoice = unserialize($_SESSION['invoice']);

			 }
			 else {
					die("Problem with quantity of invoice");
			 }

			}
			else {
				 die("Problem with quantity of invoice");
			}

		}
		else {
			 die("Problem with product of invoice");
		}

	}
	else {
		 die("Problem with id of invoice");
	}
