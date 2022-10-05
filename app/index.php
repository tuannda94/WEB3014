<?php
require '../vendor/autoload.php';

use app\Controllers\ProductController;

$product = new ProductController();

$product->getProducts();
