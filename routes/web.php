<?php

/** @var \System\Routing\Router $router */

$router->get('', function () {
    echo view('home', ['name' => 'Rahul']);
});


$router->get('about', function () {
    echo "This is the About page!";
});
$router->get('contact-us', function () {
    echo "This is the contact page!";
});
