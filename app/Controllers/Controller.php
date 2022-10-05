<?php
namespace app\Controllers;
use eftec\bladeone\BladeOne;

class Controller {
    public function render($viewName,$data)
    {  
        $views = '../app/Views';
        $cache = './cache'; // new-mvc/cache -> nơi thư viện lưu ca
        $blade = new BladeOne($views,$cache,BladeOne::MODE_DEBUG); // MODE_DEBUG allows to pinpoint troubles.
        echo $blade->run($viewName,$data); // it calls /views/hello.blade.php 
    }
}