<?php
// namespace ~ không gian tên
// Sử dụng để hiểu là chức năng hiện tại đang thuộc phần code nào
// namespace có định nghĩa theo tên thư mục
// namespace App\Controllers;
// ví dụ như class, hằng số, function được định nghĩa bên trong controller đó
// thì sẽ được gọi ở ns khác bằng cách: use App\Controllers\ProductController
// với hằng số: const NAME = 'abc'; -> use const App\Controllers\NAME;
// với function: function abc () {} -> use function App\Controllers\abc;
// ở các ns khác nhau thì class, function, const có thể cùng tên

namespace NS1;
class Product {
    public $name = 'ABC';
}
function getProduct () {
    $product = new Product();
    echo $product->name;
}
const PRODUCT_NAME = 'XYZ';

namespace NS2; // nếu k có dòng này thì code bên dưới sẽ thuộc NS1 và
// các class, function, const sẽ bị lỗi trùng tên
use NS1\Product as Product1;
use function NS1\getProduct as getProduct1;
use const NS1\PRODUCT_NAME;

class Product {
    public $name = 'ABC NS2';
}
function getProduct () {echo 'NS2';}
const PRODUCT_NAME_2 = 'XYZ 2';

$product1 = new Product1;
$product2 = new Product;
var_dump($product1, $product2);
