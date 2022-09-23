<!-- Đối tượng có construct -->
<!-- Hàm dạng magic function,
chạy khi bắt đầu khởi tạo 1 đối tượng mới bằng cú pháp new -->
<?php
class GiaoVien {
    var $ten;
    var $tuoi;

    function __construct($ten, $tuoi)
    {
        // Thường dùng để gán giá trị cho lần đầu khởi tạo
        var_dump('contruct giao vien');
        $this->ten = $ten;
        $this->tuoi = $tuoi;
        if ($tuoi < 30) {
            die;
        }
    }

    function layThongTin() {
        return "TenGV: $this->ten, Tuoi: $this->tuoi";
    }
};

// $giaovien = new GiaoVien;
$giaovien = new GiaoVien('Nguyen Van A', 29);
var_dump($giaovien->layThongTin());
// Giao vien phai co do tuoi tren 30 thi moi lay duoc thong tin
