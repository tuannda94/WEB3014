<?php
use Phroute\Phroute\RouteCollector;
use App\Controllers\ProductController;
use App\Controllers\CategoryController;
use App\Controllers\CustomerController;
use App\Controllers\OrderController;
use App\Controllers\HomeController;
$router = new RouteCollector();

$router->get('/', [HomeController::class, 'index']);

$router->group(['prefix' => 'admin'], function($router){
$router->get('/ds-san-pham', [ProductController::class, 'index']);
$router->get('/them-san-pham', [ProductController::class, 'create']);
$router->get('/chi-tiet-san-pham/{id}', [ProductController::class, 'show']);
$router->get('/cap-nhat-san-pham/{id}', [ProductController::class, 'edit']);
$router->post('/cap-nhat-san-pham/{id}', [ProductController::class, 'update']);
$router->post('/xoa-san-pham/{id}', [ProductController::class, 'destroy']);

$router->get('/ds-danh-muc', [CategoryController::class, 'index']);
$router->get('/them-danh-muc', [CategoryController::class, 'create']);
$router->get('/cap-nhat-danh-muc/{id}', [CategoryController::class, 'edit']);
$router->post('/cap-nhat-danh-muc/{id}', [CategoryController::class, 'update']);
$router->post('/xoa-danh-muc/{id}', [CategoryController::class, 'destroy']);

$router->get('/ds-khach-hang', [CustomerController::class, 'index']);
$router->get('/them-khach-hang', [CustomerController::class, 'create']);
$router->get('/cap-nhat-khach-hang/{id}', [CustomerController::class, 'edit']);
$router->post('/cap-nhat-khach-hang/{id}', [CustomerController::class, 'update']);
$router->post('/xoa-khach-hang/{id}', [CustomerController::class, 'destroy']);

$router->get('/ds-don-hang', [OrderController::class, 'index']);
$router->get('/them-don-hang', [OrderController::class, 'create']);
$router->get('/cap-nhat-don-hang/{id}', [OrderController::class, 'edit']);
$router->post('/cap-nhat-don-hang/{id}', [OrderController::class, 'update']);
$router->post('/xoa-don-hang/{id}', [OrderController::class, 'destroy']);

});

$dispatcher = new Phroute\Phroute\Dispatcher($router->getData());

$url = isset($_GET['url']) ? ($_GET['url']) : '/';
$response = $dispatcher->dispatch($_SERVER['REQUEST_METHOD'], $url);
echo $response;