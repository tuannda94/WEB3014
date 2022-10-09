<?php
// require_once 'App/Controllers/Controller.php';
// require_once 'App/Controllers/ProductController.php';
// require_once 'App/Models/BaseModel.php';
// require_once 'App/Models/Product.php';

const BASE_URL = 'http://localhost/web3014/wE17202/new-mvc/';

// Thay bằng require nhiều thì require autoload để nó làm tự đông
require_once './vendor/autoload.php';
// Database sẽ phải được require trước router
require_once './configs/database.php';
// Tránh việc router hiển thị dữ liệu khi chưa kết nối
require_once './configs/router.php';

// use App\Controllers\ProductController;

// $pc = new ProductController();
// $pc->getProducts();

// Cần autoload để tránh việc require quá nhiều ở code có thể gây nhầm lẫn
// Cần composer để việc autoload có thể làm tự động
// getcomposer.org
