<?php

namespace App\Controllers;

use App\Controllers\Controller;

class OrderController extends Controller
{
    public function index()
    {
        $viewName = 'adminlte.orders.list';

        $data = [];

        return $this->render($viewName, $data);
    }

    public function create()
    {
        $viewName = 'adminlte.orders.create';

        $data = [];

        return $this->render($viewName, $data);
    }

    public function store() {

    }

    public function show($id)
    {

    }

    public function edit($id)
    {
        $viewName = 'adminlte.orders.edit';

        return $this->render($viewName, [$id]);
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
