<?php
require '../vendor/autoload.php';
$router = new AltoRouter();

define("VIEWS", $_SERVER['DOCUMENT_ROOT'] . '/Invoicing/src/views/');
define("CONTROLLER", $_SERVER['DOCUMENT_ROOT'] . '/Invoicing/src/Controller/');
define("FORM", $_SERVER['DOCUMENT_ROOT'] . '/Invoicing/src/Form/');

$router = new AltoRouter();
$router->setBasePath('/Invoicing/public');
//main
$router->map('GET','/',  function() {
    require constant("VIEWS") . 'main.php';
} , 'main');

//*********************************   form

// information invoice corporation ect....
$router->map('POST','/invoice/add',  function() {
    require constant("CONTROLLER") . 'InvoicingController.php';
} , 'InvoiceFormAdd');

// add row in invoice
$router->map('GET','/invoice/formAddRow',  function() {
	require constant("VIEWS") . 'invoiceContent.php';
} , 'InvoiceFormAddRow');

$router->map('POST','/invoice/addRow',  function() {
    require constant("CONTROLLER") . 'add/addRowInvoiceController.php';
} , 'InvoiceAddRowController');

// pdf generation
$router->map('GET','/invoice/pdf',  function() {
    require constant("CONTROLLER") . 'generatePdf.php';
} , 'invoicePdf');


// match current request
$match = $router->match();
if( $match && is_callable( $match['target'] ) ) {
    call_user_func_array( $match['target'], $match['params'] ); 
} else {
    // no route was matched
    header( $_SERVER["SERVER_PROTOCOL"] . ' 404 Not Found');
}



