<?php
namespace App\Controllers;
use App\Controllers\Controller;
use App\Models\Product;

class ProductController extends Controller {
    public function getProducts() {
        $product = new Product;

        return $product->table; // products
    }
}
