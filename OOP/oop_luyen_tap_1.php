<!-- Tạo 2 đối tượng: Cửa Hàng và Điện thoại -->
<!-- Cửa hàng: tên, địa chỉ, tổng tiền -->
<!-- Điện thoại: tên, giá, cpu, dung lượng ram, bộ nhớ, tồn kho -->

<!-- Khi bán đt sẽ cộng tiền về cho cửa hàng -->
<!-- Nếu hết kho thì k bán -->
<?php

class CuaHang {
    var $ten;
    var $dia_chi;
    var $tong_tien;

    function layThongTin() {
        return "Cua hang: $this->ten, Tien von dang co: $this->tong_tien";
    }

    function nhanDauTu($so_tien_dau_tu) {
        $this->tong_tien += $so_tien_dau_tu;
    }
}

class DienThoai {
    var $ten; // Iphone 14 pro max
    var $gia; // 40000000
    var $chip; // A16
    var $ram; // 1GB
    var $bo_nho; // 2GB
    var $ton_kho; // 10

    function layThongTin() {
        return "Dien thoai: $this->ten, Ton kho: $this->ton_kho";
    }

    function ban($so_luong, $cuahang) {
        // Nhận 1 tham số nữa, là đối tượng sẽ nhận tiền
        if ($this->ton_kho <= 0 || $this->ton_kho < $so_luong) {
            return 0;
        }
        $this->ton_kho -= $so_luong;
        // Tính luôn tiền vào cho cửa hàng mong muốn
        $cuahang->nhanDauTu($this->gia * $so_luong);
    }
}
echo '<pre>';

$cuahangFPT = new CuaHang;
$cuahangFPT->ten = 'Cua Hang FPT';
$cuahangFPT->dia_chi = 'Trinh Van Bo';
$cuahangFPT->tong_tien = 0;

var_dump($cuahangFPT->layThongTin()); // Ten + Tien von

$dienthoaiIphone = new DienThoai;
$dienthoaiIphone->ten = 'Iphone 14';
$dienthoaiIphone->gia = 10000000;
$dienthoaiIphone->chip = 'A16';
$dienthoaiIphone->bo_nho = '16GB';
$dienthoaiIphone->ram = '16GB';
$dienthoaiIphone->ton_kho = 10;

var_dump($dienthoaiIphone->layThongTin()); // Ten + ton kho

// Ban dt
$sotienban = $dienthoaiIphone->ban(5, $cuahangFPT);
// $cuahangFPT->nhanDauTu($sotienban);
var_dump($cuahangFPT->layThongTin()); // Ten + Tien von
var_dump($dienthoaiIphone->layThongTin()); // Ten + ton kho

