<?php
class Cha{
    function __construct($tien_dang_giau)
    {
        $this->tien_dang_giau = $tien_dang_giau;
    }
    var $tien_tiet_kiem = 10000000;
    function xemTienTietKiem(){
        return "Cha dang co tien tiết kiểm: $this->tien_tiet_kiem";
    }
}
class ConTrai extends Cha{
    function __construct($tien_dang_giau, $stk)
    {
        $this->tien_dang_giau = $tien_dang_giau;
        $this->stk = $stk;
    }
    function xemTienTietKiem(){
        return "Cha dang co tien tiết kiểm: $this->tien_tiet_kiem ở stk: $this->stk";
    }
    function tieuTien($sotien){
        $this->tien_tiet_kiem -= $sotien;
    }

}
class ConGai extends Cha{};
$contrai = new ConTrai(2000000,123456);
$contrai->tieuTien(2000000);
$contrai->xemTienTietKiem();
$congai = new ConGai(2000000,125678);
var_dump($congai->tien_tiet_kiem);