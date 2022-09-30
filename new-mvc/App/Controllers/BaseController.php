<?php
namespace App\Controllers;
use eftec\bladeone\BladeOne;

class BaseController {
    // Hàm phục vụ hiển thị theo kiểu mới sử dụng BladeOne thay vì dùng include
    // render (tên file, dữ liệu)
    // tên file là tiền tố của file view: post.blade.php -> post
    // dữ liệu sẽ có dạng mảng
    // https://github.com/EFTEC/BladeOne#implicit-definition
    public function render ($viewName, $data) {
        $views = './App/Views'; // new-mvc/App/Views
        // Tạo 1 thư mục cache tương ứng để lưu
        $cache = './cache'; // new-mvc/cache -> nơi thư viện lưu cache
        // -> cấp quyền ghi file -> mở terminal gõ: chmod -R 777 cache/
        $blade = new BladeOne($views,$cache,BladeOne::MODE_DEBUG); // MODE_DEBUG allows to pinpoint troubles.
        echo $blade->run($viewName,$data); // it calls new-mvc/App/Views/$viewName.blade.php
    }
}
