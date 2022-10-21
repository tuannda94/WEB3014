@extends('layouts.master')

@section('title', 'Chỉnh sửa sản phẩm')

@section('content-title', 'Chỉnh sửa sản phẩm')

@section('content')
    <form action="{{BASE_URL}}products/update/{{$product->id}}" method="post">
        <div>
            <input name="name" type="text" placeholder="Tên SP" value="{{$product->name}}">
        </div>
        <div>
            <input name="price" type="text" placeholder="Giá SP" value="{{$product->price}}">
        </div>
        <div>
            <input type="radio" name="status" value="1" {{$product->status == 1 ? 'checked' : ''}}> Kích hoạt
            <input type="radio" name="status" value="0" {{$product->status == 0 ? 'checked' : ''}}> K Kích hoạt
        </div>
        <div><button>Chỉnh sửa</button></div>
    </form>
@endsection
