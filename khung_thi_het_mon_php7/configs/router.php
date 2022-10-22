<?php
use Phroute\Phroute\RouteCollector;

$router = new RouteCollector();

$router->get('/', function () {
    return 'Thi het mon';
});


$dispatcher = new Phroute\Phroute\Dispatcher($router->getData());

$url = isset($_GET['url']) ? ($_GET['url']) : '/';
$response = $dispatcher->dispatch($_SERVER['REQUEST_METHOD'], $url);
echo $response;
