<?php

require __DIR__ . '/vendor/autoload.php';

$router = new EdersonLRF\Router\Router;

$router->get('/hello', function() {
    return 'teste';
});
