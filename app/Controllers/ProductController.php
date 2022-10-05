<?php
namespace app\Controllers;
use app\Controllers\Controller;

class ProductController extends Controller{
    public function getProducts () {
        $viewName = 'product.index';
        
        $data = [
            'name' => 'iphone 14',
            'price' => 120000,
            'array' => [
                'Xanh',
                'Do',
                'Tim',
                'Vang',
                ]
            ]; 
            
            return $this->render($viewName, $data);
    }

    public function index () {
        $viewName = 'product.index';
    }
}