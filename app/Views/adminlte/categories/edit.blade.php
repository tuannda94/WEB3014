@extends('adminlte.layouts.master')

@section('title', 'Thêm danh mục')

@section('content-title', 'Thêm danh mục')

@section('content')
    <div class="row mb-2">
        <div class="col-12">
            <div class="card card-primary">
                <form action="" method="POST">
                    @csrf
                    <div class="card-body">
                        <div class="form-group">
                            <label for="inputName">Tên danh mục</label>
                            <input name="name" type="text" class="form-control" id="inputName"
                                placeholder="Tên danh mục" value="Quần lót">
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlSelect1">Trạng thái</label>
                            <select class="form-control" id="exampleFormControlSelect1">
                                <option selected>Ok luôn</option>
                            </select>
                        </div>
                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary">Cập nhật danh mục</button>
                        </div>
                </form>
            </div>
        </div>
    </div>
@endsection
