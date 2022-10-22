<?php
namespace App\Controllers;
use eftec\bladeone\BladeOne;

class BaseController {
    public function render ($viewName, $data) {
        $views = './App/Views';
        $cache = './cache';
        $blade = new BladeOne($views,$cache,BladeOne::MODE_DEBUG);

        echo $blade->run($viewName,$data);
    }
}
