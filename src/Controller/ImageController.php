<?php

	require_once '../vendor/autoload.php';
    if((filter_input(INPUT_POST, 'addImageForm'))
	{
		 if((filter_input(INPUT_FILE, 'addImageForm'))
		{
			if(@!empty($_FILES['avatar']['tmp_name']))
			{
				uploadFile($_FILES['avatar']['tmp_name']);
			}
		}
		
	}


