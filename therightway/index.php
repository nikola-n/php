<?php

use TheRightWay\App\Controllers\HomeController;
use TheRightWay\App\Controllers\InvoiceController;
use TheRightWay\App\Router;

define('STORAGE_PATH', __DIR__ . '/storage');
define('VIEW_PATH', __DIR__ . '/views');

require_once __DIR__ . '/../vendor/autoload.php';

try {

    $router = new Router();
    $router
        ->get('/therightway', [HomeController::class, 'index'])
        ->get('/therightway/invoices', [InvoiceController::class, 'index'])
        ->get('/therightway/invoices/create', [InvoiceController::class, 'create'])
        ->post('/therightway/invoices/upload', [InvoiceController::class, 'upload'])
        ->get('/therightway/invoices/download', [InvoiceController::class, 'download']);

    echo $router->resolve($_SERVER['REQUEST_URI'], strtolower($_SERVER['REQUEST_METHOD']));
} catch (\TheRightWay\App\Exceptions\RouteNotFoundException $exception) {
    //to change the response code
    //header('HTTP/1.1 404 Not Found');
    http_response_code(404);

    echo \TheRightWay\App\Support\View::make('errors/404');
}

//sessions must be assigned before any actions is invoked
// so this should throw and error
// but is not throwing an error because of the output buffering
// that php has and that can be checked in phpinfo.
// that variable in phpinfo has a value in stored in bytes.

//It means instead of sending the response to the browser
//right away it will buffer /save  in some variable (somewhere) until it reaches
//the limit of bytes and after that it will be executed in the screen.
session_start();

// to test it, this won't output 1 then wait 3 sec and output 2.
//it will wait 3 sec and output 1 and 2
//echo 1;
//sleep(3);
//echo 2;
// this may work like this even though its disabled cause
//there is also server conf that needs to be adjusted

// in production is set, usually its disabled for local.

// in CLI is always disabled.