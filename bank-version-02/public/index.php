<?php

require_once __DIR__ .'/../vendor/autoload.php';

use App\Router;

$router = new \App\Router();

$router->get('/', function () {
    echo 'Home page';
});

$router->get('/about', function () {
    echo 'About page';
});

$router->run();
