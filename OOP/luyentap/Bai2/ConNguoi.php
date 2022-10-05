<?php
class ConNguoi
{
    protected $ten;
    protected $tuoi;
    protected $gioiTinh;
    protected $ngaySinh;
    protected $canNang;
    protected $chieuCao;

    public function __construct($ten, $tuoi, $gioiTinh, $ngaySinh, $canNang, $chieuCao)
    {
        $this->ten = $ten;
        $this->tuoi = $tuoi;
        $this->gioiTinh = $gioiTinh;
        $this->ngaySinh = $ngaySinh;
        $this->canNang = $canNang;
        $this->chieuCao = $chieuCao;
    }
}
