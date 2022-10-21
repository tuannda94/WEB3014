<?php
// Định nghĩa namespace theo tên thư mục từ ngoài vào trong;
namespace App\Models;
use App\Models\Product;

// Đây là model base chứa các phương thức để truy vấn
// VD: where, join,...
use Illuminate\Database\Eloquent\Model;

class Category extends Model {
    // Gán bảng cho đối tượng
    protected $table = 'categories';
    protected $primaryKey = 'id';
    // khi bảng trong db không có trường created_at và updated_at
    public $timestamps = false;

    // Sau này sẽ không cần select * from bảng
    // Mà chỉ cần Product::all() lấy tất cả
    // protected $fillable = ['name', 'price', 'status'];

    // Định nghĩa quan hệ, 1 danh mục có nhiều sp ~ model Category sẽ hasMany model Product
    public function products () {
        return $this->hasMany(Product::class, 'category_id', 'id');
    }
}
