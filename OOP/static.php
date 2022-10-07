<?php
// static là từ khoá để định nghĩa 1 thuộc tính hoặc phương thức dạng tĩnh trong đối tương
// lưu giữ được giá trị
// Có thể truy xuất mà không cần khởi tạo đối tượng

class Test {
    static $tien_tiet_kiem = 10000000;
    var $tien = 1000000;

    function __construct()
    {
        // Không sử dụng được con trỏ this vì thuộc tính hoặc phương thức dạng static được xử lý ngay ở
        // đối tượng đang định nghĩa ở đây (dòng 6)

        // $this->tien_tiet_kiem -= 1000000;
        // echo $this->tien_tiet_kiem;

        // Sử dụng đối tượng self
        // self::$tien_tiet_kiem -= 1000000;
        // echo self::$tien_tiet_kiem;
    }

    static function tieuTien($so_tien_tieu) {
        self::$tien_tiet_kiem -= $so_tien_tieu;
    }

    function tieuTienKhongStatic($so_tien_tieu) {
        $this->tien -= $so_tien_tieu;
    }
}

echo '<pre>';
// $test1 = new Test();
// $test2 = new Test();
// Sử dụng cú pháp tương tự self là :: để lấy ra giá trị của thuộc tính hoặc gọi đến phương thức dạng static
var_dump(Test::$tien_tiet_kiem);
Test::tieuTien(2000000);
var_dump(Test::$tien_tiet_kiem);

var_dump('-----------');
// var_dump(Test::$tien);
// Test::tieuTienKhongStatic(3000000);
$test = new Test();
$test->tien;
$test->tieuTienKhongStatic(3000000);
var_dump($test->tien);
$test2 = new Test();
var_dump($test2::$tien_tiet_kiem);

// Với thuộc tính, phương thức dạng static thì dù không khởi tạo hoặc có khởi tạo thì giá trị của nó
// vẫn được lưu giữ sau các thao tác mà không bị quay về giá trị ban đầu như khởi tạo mới kiểu var

// Với thuộc tính, phương thức dạng thông thường thì mỗi khi khởi tạo đối tượng mới thì giá trị
// lại quay về ban đầu
