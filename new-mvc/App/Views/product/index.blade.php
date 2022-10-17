<!-- Kế thừa lại layout master -->
@extends('layouts.master')

<!-- Truyền giá trị cho những phần thay đổi -->
<!-- yield(tên)  ~ section(tên, giá trị) -->
@section('title', 'Danh sách sản phẩm')

<!-- yield(tên) ~ section(tên) nội dung endsection -->
@section('content-title', "Danh sách sản phẩm ($count)" )
@section('content')
    <a href="{{BASE_URL}}products/create">
        <button class="btn btn-primary">Tạo mới</button>
    </a>
    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Tên SP</th>
                <th>Giá SP</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            @foreach($products as $product)
            <tr>
                <td>{{ $product->id }}</td>
                <td>{{ $product->name }}</td>
                <td>{{ $product->price }} VND</td>
                <td>
                    <a href="{{BASE_URL}}products/edit/{{$product->id}}">
                        <button>Sửa</button>
                    </a>
                    <a href="{{BASE_URL}}products/delete/{{$product->id}}">
                        <button onclick="return confirm('Bạn có muốn xoá không?');">xoá</button>
                    </a>
            </td>
            </tr>
            @endforeach
        </tbody>
    </table>

@endsection
