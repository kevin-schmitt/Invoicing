<?php
require_once '../vendor/autoload.php';
ob_start();

include_once('../view/InvoicePdf.php');
$content = ob_get_clean();

$mpdf=new mPDF('c','A4','','' , 0 , 0 , 0 , 0 , 0 , 0);

$mpdf->SetDisplayMode('fullpage');

$mpdf->list_indent_first_level = 0;  // 1 or 0 - whether to indent the first level of a list

$mpdf->WriteHTML($content);

$mpdf->Output();
