<?php
require_once '../vendor/autoload.php';

ob_start();
require_once '../src/views/invoicePdf.php';
$content = ob_get_clean();

$mpdf = new \Mpdf\Mpdf();
// Write some HTML code:
$mpdf->WriteHTML($content);

// Output a PDF file directly to the browser
$mpdf->Output();
