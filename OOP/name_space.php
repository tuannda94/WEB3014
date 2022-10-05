<?php
namespace NS1;

class Product {
    public $name = 'ABC';
}

function getProduct() {
    $product = new Product();
    echo $product->name;
}

const PRODUCT_NAME = 'XYZ';

namespace NS2;

use NS1\Product as ClassNS1;
use const NS1\PRODUCT_NAME as ConstNS1;
use function NS1\getProduct as FunctionNS1;

class Product {
    public $name = 'ABC S2';
}

function getProduct() {
    $product = new Product();
    echo $product->name;
}

const PRODUCT_NAME = 'XYZ';

$class = new ClassNS1();
$const = ConstNS1;
$function = FunctionNS1();









