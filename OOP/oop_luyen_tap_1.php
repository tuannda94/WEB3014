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
    }

    function nhanDauTu($so_tien_dau_tu) {
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
    }

    function ban($so_luong) {
    }
}
