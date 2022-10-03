<!-- Đây được coi là khung -->
<!-- Định nghĩa những phần vị trí không đổi và có thể đổi -->
<!-- 1. Thêm những phần vị trí không đổi vào đây -->
<!-- 2. Những phần thay đổi sẽ kế thừa khung này -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- @yield định nghĩa 1 vị trí tên là title -->
    <title>@yield('title')</title>
</head>
<body>
    <!-- Các thành phần có vị trí không đổi -->
    <!-- HEADER -->
    @include('layouts.header')

    <!-- Đây là phần thay đổi -->
    <div>
        @yield('content')
    </div>

    <!-- FOOTER -->
    @include('layouts.footer')
</body>
</html>
