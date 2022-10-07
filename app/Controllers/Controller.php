<?php
namespace App\Controllers;
use eftec\bladeone\BladeOne;

class Controller {
    public function render($viewName,$data)
    {  
        $views = './app/Views';
        $cache = './cache'; 
        $blade = new BladeOne($views,$cache,BladeOne::MODE_DEBUG); 
        echo $blade->run($viewName,$data); 
    }
}