<!-- Đây là nơi định nghĩa danh sách route -->
<?php
// Sử dụng thư viện Phroute
use Phroute\Phroute\RouteCollector;
use App\Controllers\ProductController;
// Khởi tạo đối tượng quản lý danh sách cách đường dẫn
$router = new RouteCollector();

// $router->phuong_thuc('duong dan', function () {return xxx;});
// $router->phuong_thuc('duong dan', [Controller, 'ten ham']);
// phương thức: get, post, put, patch, delete, any
$router->get('/ds-san-pham', [ProductController::class, 'getProducts']);

# NB. You can cache the return value from $router->getData() so you don't have to create the routes each request - massive speed gains
$dispatcher = new Phroute\Phroute\Dispatcher($router->getData());

// phát đi sự kiện đọc đường dẫn để route biết đang gọi đến hàm nào
$response = $dispatcher->dispatch(
    $_SERVER['REQUEST_METHOD'],
    parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH)
);
// Hiển thị kết quả return của hàm được gọi
echo $response;
