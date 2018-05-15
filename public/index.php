<?php
require '../vendor/autoload.php';
$router = new AltoRouter();

define("VIEWS", $_SERVER['DOCUMENT_ROOT'] . '/Invoicing/src/views/');
define("CONTROLLER", $_SERVER['DOCUMENT_ROOT'] . '/Invoicing/src/Controller/');

$router = new AltoRouter();
$router->setBasePath('/Invoicing/public');
//main
$router->map('GET','/',  function() {
    require constant("VIEWS") . 'main.php';
} , 'main');
//form
$router->map('POST','/invoice/add',  function() {
    require constant("CONTROLLER") . 'InvoicingController.php';
	require constant("CONTROLLER") . 'InvoicingContentController.php';
} , 'addInvoicing');


// match current request
$match = $router->match();
if( $match && is_callable( $match['target'] ) ) {
    call_user_func_array( $match['target'], $match['params'] ); 
} else {
    // no route was matched
	echo "ok";
    header( $_SERVER["SERVER_PROTOCOL"] . ' 404 Not Found');
}



