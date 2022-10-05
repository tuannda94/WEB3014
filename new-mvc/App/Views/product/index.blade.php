<!-- Kế thừa lại layout master -->
@extends('layouts.master')

<!-- Truyền giá trị cho những phần thay đổi -->
<!-- yield(tên)  ~ section(tên, giá trị) -->
@section('title', 'Danh sách sản phẩm')

<!-- yield(tên) ~ section(tên) nội dung endsection -->
@section('content-title', 'ABC')
@section('content')

THƯ VIỆN BLADE ONE PHP2
<!-- <?php echo $name ?> -->
<!-- <?php echo $price ?> -->

<!-- Với blade -->
{{$name}}
{{ strlen($name) > 2 ? "Do dai lon hon 2" : "Do dai nho hon 2" }}

{{$price}}
@if ($price > 10000000)
    <p>Lon hon 10tr</p>
@else
    <p>Nho hon 10 tr</p>
@endif

<ul>
    @foreach ($array as $item)
        <li>{{$item}}</li>
    @endforeach
</ul>

@endsection
