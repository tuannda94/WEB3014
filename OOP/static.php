<?php
//Static để định nghĩa một phương thức or thuộc tính dạng tĩnh trong đối tượng
//Lưu giữ đc dôi tượng
//Có thể truy xuất mà k cần khỏi tạo đối tượng
class Test{
    static $tien_tiet_kiem = 10000000;
    var $tien = 10000000;
    function __construct()
    {
        
    }
    static function tieuTien($tieu_tien){
        self::$tien_tiet_kiem -= $tieu_tien;
    }
    function tieuTienKhongStatic($tien){
        $this->tien -=$tien;
    }
}
//Sử dụng cú pháp seft:: để lấy giá trị của thuộc tính hoặc gọi đến phương thức
Test::tieuTien(2000000);
var_dump(Test::$tien_tiet_kiem);
$tien = new Test();
$tien->tieuTienKhongStatic(3000000);
var_dump($tien->tien);
