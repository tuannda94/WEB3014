<?php
class CuaHang
{
    var $ten;
    var $dia_chi;
    var $tong_tien;

    function layThongTin()
    {
        return 'Tên cửa hàng : ' . $this->ten . ', Địa chỉ : ' . $this->dia_chi . ', Tổng tiền : ' . $this->tong_tien;
    }

    function nhanDauTu($so_tien_dau_tu)
    {
        if (is_int($so_tien_dau_tu)) {
            $this->tong_tien += $so_tien_dau_tu;
        } else {
            return $so_tien_dau_tu;
        }
    }
}

class DienThoai
{
    var $ten;
    var $gia;
    var $cpu;
    var $dung_luong;
    var $so_luong;

    function layThongTin()
    {
        return 'Tên máy: ' . $this->ten . ', Giá : ' . $this->gia . ', Dung lượng : ' . $this->dung_luong . ', Giá : ' . $this->gia . ' Số lương: '. $this->so_luong ;
    }

    function ban($so_luong_ban)
    {
        if ($this->so_luong > 0 && $this->so_luong >= $so_luong_ban) {
            $this->so_luong -= $so_luong_ban;
            return $so_luong_ban * $this->gia;
        } elseif ($this->so_luong > 0 && $this->so_luong < $so_luong_ban) {
            return 'Số lượng bán vượt quá hàng trong kho';
        } else {
            return 'Không còn hàng';
        }
    }
}

$dienthoai = new DienThoai;
$dienthoai->ten = 'iphone';
$dienthoai->gia = 200;
$dienthoai->cpu = 'iphone';
$dienthoai->dung_luong = 30000 ;
$dienthoai->so_luong = 1;
$ban = $dienthoai->ban(1);


$shop1 = new CuaHang;
$shop1->ten = "Ban dien thoai";
$shop1->dia_chi = "HN";
$shop1->tong_tien = 0;
$shop1->nhanDauTu($ban);

echo '<pre>';
var_dump($shop1->layThongTin() . '<hr>');
var_dump($dienthoai->layThongTin());
echo '</pre>';
