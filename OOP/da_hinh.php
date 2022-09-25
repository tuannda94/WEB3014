<?php
// Da hình: khi class con kế thừa class cha
// nó có thể viết lại (overwrite) nội dung trong phương thức cha

class Cha {
    function __construct($tien_dang_giau)
    {
        // Vừa khai báo 1 thuộc tính cho class
        // Vừa gán giá trị ngay lần đầu khởi tạo luôn
        $this->$tien_dang_giau = $tien_dang_giau;
    }

    var $tien_tiet_kiem = 10000000;

    function xemTienTietKiem () {
        return "Cha đang co so tien: $this->tien_tiet_kiem";
    }
}

class ConTrai extends Cha {
    function __construct($tien_dang_giau, $tk_ngan_hang)
    {
        $this->tien_dang_giau = $tien_dang_giau;
        $this->tk_ngan_hang = $tk_ngan_hang;
    }

    function xemTienTietKiem()
    {
        return "Con dang co so tien: $this->tien_tiet_kiem o stk $this->tk_ngan_hang";
    }

    function tieuTien($so_tien_tieu) {
        $this->tien_tiet_kiem -= $so_tien_tieu;
    }
}

class ConGai extends Cha {};

$contrai = new ConTrai(2000000, 123456);
echo '<pre>';
var_dump($contrai);
$contrai->tieuTien(2000000);
var_dump($contrai->xemTienTietKiem());

$congai = new ConGai(3000000);
var_dump($congai->xemTienTietKiem());
