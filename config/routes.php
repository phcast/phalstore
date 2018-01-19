<?php

use Phalcon\Mvc\Router;
//use App\Http\Filter\Ajax;

$router = new Router(false);

$router->add(
    '/index',
    [
       'controller' => 'index',
       'action'     => 'index'
    ]
);

return $router;
