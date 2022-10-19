<!-- Đây là nơi định nghĩa danh sách route -->
<?php
// Sử dụng thư viện Phroute
use Phroute\Phroute\RouteCollector;
use App\Controllers\ProductController;
use App\Controllers\UserController;
// Khởi tạo đối tượng quản lý danh sách cách đường dẫn
$router = new RouteCollector();
// phương thức: get, post, put, patch, delete, any

// $router->phuong_thuc('duong dan', function () {return xxx;});
$router->get('/', function () {
    return 'Trang chu';
});

// $router->phuong_thuc('duong dan', [Controller, 'ten ham']);
// $router->get('/ds-san-pham', [ProductController::class, 'getProducts']);
// $router->get('/chi-tiet-san-pham/{id}', [ProductController::class, 'getProduct']);
$router->get('/products', [ProductController::class, 'index']);
$router->get('/products/create', [ProductController::class, 'create']);
$router->post('/products/store', [ProductController::class, 'store']);
$router->get('/products/edit/{id}', [ProductController::class, 'edit']);
$router->post('/products/update/{id}', [ProductController::class, 'update']);
$router->get('/products/delete/{id}', [ProductController::class, 'destroy']);
// index(), create(), store(), show(), edit(), update(), destroy()
// $router->get('/users', [UserController::class, 'index']);
// $router->get('/users/create', [UserController::class, 'create']);
// $router->post('/users/store', [UserController::class, 'store']);
// $router->get('/users/edit/{id}', [UserController::class, 'edit']);
// $router->post('/users/update/{id}', [UserController::class, 'update']);
// $router->get('/users/delete/{id}', [UserController::class, 'destroy']);

$router->group(['prefix' => 'users'], function ($router) {
    $router->get('/', [UserController::class, 'index']);
    $router->get('create', [UserController::class, 'create']);
    $router->post('store', [UserController::class, 'store']);
    $router->get('edit/{id}', [UserController::class, 'edit']);
    $router->post('update/{id}', [UserController::class, 'update']);
    $router->get('delete/{id}', [UserController::class, 'destroy']);
});

# NB. You can cache the return value from $router->getData() so you don't have to create the routes each request - massive speed gains
$dispatcher = new Phroute\Phroute\Dispatcher($router->getData());

// lấy ra đường dẫn hiện tại người dùng đang gõ vào bằng ?url=ds-san-pham
// Nếu kết hợp thêm file .htaccess có thể gõ luôn /ds-san-pham thì webserver sẽ tự hiểu sang đường dẫn bên trên
$url = isset($_GET['url']) ? ($_GET['url']) : '/';
// phát đi sự kiện đọc đường dẫn để route biết đang gọi đến hàm nào
$response = $dispatcher->dispatch($_SERVER['REQUEST_METHOD'], $url);
// Hiển thị kết quả return của hàm được gọi
echo $response;
