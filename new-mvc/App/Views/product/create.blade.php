@extends('layouts.master')

@section('title', 'Tạo mới sản phẩm')

@section('content-title', 'Tạo mới sản phẩm')

@section('content')
    <form action="{{BASE_URL}}products/store" method="post">
        <div>
            <input name="name" type="text" placeholder="Tên SP">
        </div>
        <div>
            <input name="price" type="text" placeholder="Giá SP">
        </div>
        <div>
            <input type="radio" name="status" value="1"> Kích hoạt
            <input type="radio" name="status" value="0"> K Kích hoạt
        </div>
        <div><button>Tạo mới</button></div>
    </form>
@endsection
