<?php
include 'PhepTinh.php';

class TinhToan implements PhepTinh {
    private $a;
    private $b;

    public function __construct($a,$b)
    {
        $this->a = $a;
        $this->b = $b;
    }

    function phepCong(){
        return $this->a + $this->b;
    }

    function phepTru(){
        return $this->a - $this->b;
    }

    function phepNhan(){
        return $this->a * $this->b;
    }

    function phepChia(){
        if (!$this->b == 0) {
            return $this->a + $this->b;
        } else {
            return 'Không thực hiện được phép tính';
        }
    }
}

$demo = new TinhToan(2,33);

echo '<pre>';
var_dump($demo->phepCong());
var_dump($demo->phepTru());
var_dump($demo->phepNhan());
var_dump($demo->phepChia());