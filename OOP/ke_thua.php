<?php
// Kế thừa là các thuộc tính và phương thức của 1 đối tượng cha sẽ được đối tượng extends nó sử dụng
// PHP là ngôn ngữ đơn kế thừa

class Cha {
    var $tien_tiet_kiem = 10000000;

    function xemTienTietKiem () {
        return "Cha đang co so tien: $this->tien_tiet_kiem";
    }
}

class ConTrai extends Cha {
    function tieuTien($so_tien_tieu) {
        $this->tien_tiet_kiem -= $so_tien_tieu;
    }
}

$contrai = new ConTrai;
echo '<pre>';
var_dump($contrai);
$contrai->tieuTien(2000000);
var_dump($contrai->xemTienTietKiem());
