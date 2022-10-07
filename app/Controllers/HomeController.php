<?php

namespace App\Controllers;

use App\Controllers\Controller;

class HomeController extends Controller
{
    public function index()
    {
        $viewName = 'adminlte.dashboard.home';

        $data = [];

        return $this->render($viewName, $data);
    }

    public function create()
    {

    }

    public function store() {

    }

    public function show($id)
    {

    }

    public function edit($id)
    {
    }

    public function update($id)
    {
        //
    }

    public function destroy($id)
    {
       //
    }
}
