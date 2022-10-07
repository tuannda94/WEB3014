<?php

namespace App\Controllers;

use App\Controllers\Controller;

class ProductController extends Controller
{
    public function index()
    {
        $viewName = 'adminlte.products.list';

        $data = [];

        return $this->render($viewName, $data);
    }

    public function create()
    {
        $viewName = 'adminlte.products.create';

        $data = [];

        return $this->render($viewName, $data);
    }

    public function store() {

    }

    public function show($id)
    {
        $viewName = 'adminlte.products.show';

        $data = [];

        return $this->render($viewName, $data);
    }

    public function edit($id)
    {
        $viewName = 'adminlte.products.edit';

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
