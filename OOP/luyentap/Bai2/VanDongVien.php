<?php
include 'ConNguoi.php';

class VanDongVien extends ConNguoi {
    private $soHuyChuong;
    private $cacMonDaThiDau;

    public function __construct($ten, $tuoi, $gioiTinh, $ngaySinh, $canNang, $chieuCao,$soHuyChuong,$cacMonDaThiDau)
    {
        parent::__construct($ten, $tuoi, $gioiTinh, $ngaySinh, $canNang, $chieuCao);
        $this->soHuyChuong = $soHuyChuong;    
        $this->cacMonDaThiDau = $cacMonDaThiDau;    
    }

    public function showInfor(){
        return "
            Tên: $this->ten <br>
            Tuổi: $this->tuoi <br>
            Giới tính: $this->gioiTinh <br>
            Ngày sinh: $this->ngaySinh <br>
            Cân nặng: $this->canNang <br>
            Chiều cao: $this->chieuCao <br>
            Chiều số huy chương: $this->soHuyChuong <br>
            Các môn đã thi đấu: $this->cacMonDaThiDau 
            ";
    }

    public function thiDau($mon) {

    }

}

$demo = new VanDongVien(1,1,1,1,1,1,1,1);

echo '<pre>';
// var_dump($demo);
var_dump($demo->showInfor());