<?php
namespace App\Controllers;
use App\Controllers\BaseController;
use App\Models\Product;

class ProductController extends BaseController {
    public function getProducts() {
        // Hiển thị danh sách sản phẩm bằng render() của BladeOne
        // file view ở new-mvc/App/Views/product/index.blade.php
        $viewName = 'product.index';
        // data view cần biến $name và $price
        $data = [
            'name' => 'Iphone 14',
            'price' => 12000000,
            'array' => [
                'Xanh',
                'Đỏ',
                'Tím',
                'Vàng'
            ]
        ];

        return $this->render($viewName, $data);
    }
}
