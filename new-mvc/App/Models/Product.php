<?php
// Định nghĩa namespace theo tên thư mục từ ngoài vào trong;
namespace App\Models;
// khi sử dụng Product ở chỗ khác -> use App\Models\Product;

class Product extends BaseModel {
    public $table = 'products';
}
