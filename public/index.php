<?php

use System\Http\Request;
use System\Http\Response;
use System\Routing\Router;

require_once __DIR__ . '/../vendor/autoload.php';

// initialize core
$request = new Request();
$response = new Response();
$router = new Router($request, $response);

// include routes
require_once __DIR__ . '/../routes/web.php';

// run router
$router->dispatch();
