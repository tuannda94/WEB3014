<?php
class Cha {
    private $tien = 10000000;
    protected $tai_san = 50000000;

    public function get()
    {
        return $this->tien;
    }
}

class Con extends Cha{
    public function xemTaiSanProteced()
    {
        return "xem tai san protected: ". $this->tai_san;
    }

    public function themTaiSanProteced($so_tien)
    {
        $this->tai_san += $so_tien;
    }

    public function xemTaiSanPrivate()
    {
        return "xem tai san Private: ". $this->tien;
    }
}

$nghiem = new Con();
var_dump($nghiem->get());
// var_dump($nghiem->tai_san);
var_dump($nghiem->themTaiSanProteced(200));
var_dump($nghiem->xemTaiSanProteced());
// var_dump($nghiem->xemTaiSanPrivate());   