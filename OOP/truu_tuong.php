<?php
// Đối tượng khung để mở rộng ra các đối tượng khác
abstract class ConNguoi {
    var $ten;
    var $tuoi;

    // phương thức dạng abstract thì con bắt buộc phải có
    abstract function layThongTin();
}

// Đối tượng không phải khung vẫn có thể dùng làm cha
class NguoiFPT {
    var $ten;
    var $co_so;

    function layTenCoSo() {
        return $this->co_so;
    }
}

// Đối tượng kế thừa lại đối tượng khung là ConNguoi
class SinhVien extends ConNguoi {
    function __construct($ten, $tuoi)
    {
        $this->ten = $ten;
        $this->tuoi = $tuoi;
    }
    // layThongTin đã được định nghĩa tên ở cha
    function layThongTin()
    {
        // ten và tuổi cũng đã có ở cha, con sẽ kế thừa
        return "$this->ten $this->tuoi";
    }
    function nhanDoiTuoi(){
        return $this->tuoi * 2;
    }
}
$tuan = new SinhVien('tuannda3', 20);
var_dump($tuan->layThongTin());

// Hành vi chung sẽ được định nghĩa trong 1 interface
interface TruyVan {
    function where();

    function join();
}

class DB implements TruyVan {
    var $conn;
    function connect () {
        $this->conn = new PDO('mysql:host=127.0.0.1;dbname=123;', 'root', '');
    }
    function __construct()
    {
        $this->connect();
    }
    // Nếu đã implement TruyVan thì phải có đủ cả where và join
    function where() {}
    function andWhere() {}
    function join() {}
    function get() {}
};
// Đối tượng này đại diện cho 1 bảng k đổi trong DB
class Product extends DB {
    var $table = 'products';
}
class Category extends DB {
    var $table = 'categories';
}

// $products = new Product();
// $products->where()->andWhere()->join()->get();
