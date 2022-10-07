@extends('adminlte.layouts.master')

@section('title', 'Chi tiết sản phẩm')

@section('content-title', 'Chi tiết sản phẩm')

@section('content')
    <div class="row mb-2">
        <div class="col-12">
            <div class="card card-body">
                <div class="image" style="text-align: center">
                <img src="{{ BASE_URL }}App/public/images/Unnamed Files-web-1664366542217.png" width="50%" alt="" srcset="">
                </div>
                <div class="info">
                    <h1>Thông tin sản phẩm</h1>
                    <ul>
                        <li><span>Tên sản phẩm:abc</span></li>
                        <li><span>Giá sản phẩm:1231231</span></li>
                        <li><span>Số lượng:123</span></li>
                        <li><span>Danh mục: Áo lót</span></li>
                        <li><span>Trạng thái: Còn hàng</span></li>
                    </ul>
                </div>
                
            </div>
            
        </div>
    </div>
@endsection
