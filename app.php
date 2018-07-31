<?php

require __DIR__ . '/vendor/autoload.php';

$path_info = $_SERVER['PATH_INFO'] ?? '/';
$request_method = $_SERVER['REQUEST_METHOD'] ?? 'GET';

$router = new EdersonLRF\Router\Router($path_info, $request_method);

$router->get('/hello/{name}', function($params) {
    return 'Meu nome é ' . $params[1];
});

$result = $router->run();

var_dump($result['callback']($result['params']));
