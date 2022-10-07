@extends('adminlte.layouts.master')

@section('title', 'Thêm sản phẩm')

@section('content-title', 'Thêm sản phẩm')

@section('content')
    <div class="row mb-2">
        <div class="col-12">
            <div class="card card-primary">
                <form action="" enctype="multipart/form-data" method="POST">
                    @csrf
                    <div class="card-body">
                        <div class="form-group">
                            <label for="inputName">Tên sản phẩm</label>
                            <input name="name" type="text" class="form-control" id="inputName"
                                placeholder="Tên sản phẩm">
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlSelect1">Trạng thái</label>
                            <select class="form-control" id="exampleFormControlSelect1">
                                <option>Ok luôn</option>
                            </select>
                        </div>
                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary">Thêm danh mục</button>
                        </div>
                </form>
            </div>
        </div>
    </div>
@endsection
