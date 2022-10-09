<!-- Đây là nơi định nghĩa danh sách route -->
<?php
// Sử dụng thư viện Phroute
use Phroute\Phroute\RouteCollector;
use App\Controllers\ProductController;
// Khởi tạo đối tượng quản lý danh sách cách đường dẫn
$router = new RouteCollector();
// phương thức: get, post, put, patch, delete, any

// $router->phuong_thuc('duong dan', function () {return xxx;});
$router->get('/', function () {
    return 'Trang chu';
});

// $router->phuong_thuc('duong dan', [Controller, 'ten ham']);
$router->get('/ds-san-pham', [ProductController::class, 'getProducts']);
$router->get('/chi-tiet-san-pham/{id}', [ProductController::class, 'getProduct']);

# NB. You can cache the return value from $router->getData() so you don't have to create the routes each request - massive speed gains
$dispatcher = new Phroute\Phroute\Dispatcher($router->getData());

// lấy ra đường dẫn hiện tại người dùng đang gõ vào bằng ?url=ds-san-pham
// Nếu kết hợp thêm file .htaccess có thể gõ luôn /ds-san-pham thì webserver sẽ tự hiểu sang đường dẫn bên trên
$url = isset($_GET['url']) ? ($_GET['url']) : '/';
// phát đi sự kiện đọc đường dẫn để route biết đang gọi đến hàm nào
$response = $dispatcher->dispatch($_SERVER['REQUEST_METHOD'], $url);
// Hiển thị kết quả return của hàm được gọi
echo $response;
