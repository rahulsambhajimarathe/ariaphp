<?php

/** @var \System\Routing\Router $router */

$router->get('', function () {
    echo "Welcome to AiraPHP Home Route!";
});

$router->get('about', function () {
    echo "This is the About page!";
});
$router->get('contact-us', function () {
    echo "This is the contact page!";
});
