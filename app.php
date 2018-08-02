<?php

require __DIR__ . '/vendor/autoload.php';

use EdersonLRF\DI\Resolver;
use EdersonLRF\Renderer\PHPRenderer;
use EdersonLRF\Router\Router;

$path_info = $_SERVER['PATH_INFO'] ?? '/';
$request_method = $_SERVER['REQUEST_METHOD'] ?? 'GET';

$router = new Router($path_info, $request_method);

require __DIR__ . "/router.php";

$result = $router->run();

$data = (new Resolver)->method($result['callback'], [
    'params' => $result['params']
]);

$renderer = new PHPRenderer;

$renderer->setData($data);
$renderer->run();
