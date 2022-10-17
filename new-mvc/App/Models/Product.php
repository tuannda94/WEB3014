<?php
// Định nghĩa namespace theo tên thư mục từ ngoài vào trong;
namespace App\Models;

// Đây là model base chứa các phương thức để truy vấn
// VD: where, join,...
use Illuminate\Database\Eloquent\Model;

class Product extends Model {
    // Gán bảng cho đối tượng
    protected $table = 'products';
    protected $primaryKey = 'id';
    // khi bảng trong db không có trường created_at và updated_at
    public $timestamps = false;

    // Sau này sẽ không cần select * from bảng
    // Mà chỉ cần Product::all() lấy tất cả
    // protected $fillable = ['name', 'price', 'status'];
}
