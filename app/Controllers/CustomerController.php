<?php

namespace App\Controllers;

use App\Controllers\Controller;

class CustomerController extends Controller
{
    public function index()
    {
        $viewName = 'adminlte.customers.list';

        $data = [];

        return $this->render($viewName, $data);
    }

    public function create()
    {
        $viewName = 'adminlte.customers.create';

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
        $viewName = 'adminlte.customers.edit';

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
