<?php

$router->get('/hello/{name}', function($params) {
    return 'Meu nome é ' . $params[1];
});
