<?php
class GiaoVien
{
    var $ten;
    var $tuoi;

    function __construct($ten,$tuoi)
    {   
        $this->ten = $ten;
        $this->tuoi = $tuoi;
        var_dump('construc giao vien');
    }   

    function layThongTin() 
    {
        return "TenGV: $this->ten, Tuoi: $this->tuoi"; 
    }
}

// $giaovien1 = new GiaoVien;
$giaovien2 = new GiaoVien('son',12);

var_dump($giaovien2);