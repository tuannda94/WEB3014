<?php
require_once 'App/Controllers/Controller.php';
require_once 'App/Controllers/ProductController.php';
require_once 'App/Models/BaseModel.php';
require_once 'App/Models/Product.php';

use App\Controllers\ProductController;

$pc = new ProductController();
var_dump($pc->getProducts());

// Cần autoload để tránh việc require quá nhiều ở code có thể gây nhầm lẫn
// Cần composer để việc autoload có thể làm tự động
// getcomposer.org
