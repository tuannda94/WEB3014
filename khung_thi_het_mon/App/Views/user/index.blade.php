<!-- Kế thừa lại layout master -->
@extends('layouts.master')

<!-- Truyền giá trị cho những phần thay đổi -->
<!-- yield(tên)  ~ section(tên, giá trị) -->
@section('title', 'Danh sách người dùng')

<!-- yield(tên) ~ section(tên) nội dung endsection -->
@section('content-title', "Danh sách người dùng ($count)" )
@section('content')
    <a href="{{BASE_URL}}users/create">
        <button class="btn btn-primary">Tạo mới</button>
    </a>
    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Tên</th>
                <th>Email</th>
                <th>Ảnh đại diện</th>
                <th>Trạng thái</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            @foreach($users as $user)
            <tr>
                <td>{{ $user->id }}</td>
                <td>{{ $user->name }}</td>
                <td>{{ $user->email }}</td>
                <td><img src="{{ $user->avatar }}" alt="{{$user->name}}" width="100px" /></td>
                <td>{{$user->status ? 'Kích hoạt' : 'Không kích hoạt'}}</td>
                <td>
                    <a href="{{BASE_URL}}users/edit/{{$user->id}}">
                        <button>Sửa</button>
                    </a>
                    <a href="{{BASE_URL}}users/delete/{{$user->id}}">
                        <button onclick="return confirm('Bạn có muốn xoá không?');">Xoá</button>
                    </a>
            </td>
            </tr>
            @endforeach
        </tbody>
    </table>

@endsection
