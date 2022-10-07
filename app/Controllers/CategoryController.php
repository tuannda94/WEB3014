<?php

namespace App\Controllers;

use App\Controllers\Controller;

class CategoryController extends Controller
{
    public function index()
    {
        $viewName = 'adminlte.categories.list';

        $data = [];

        return $this->render($viewName, $data);
    }

    public function create()
    {
        $viewName = 'adminlte.categories.create';

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
        $viewName = 'adminlte.categories.edit';

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
