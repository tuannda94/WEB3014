<?php
session_start();
require_once 'Controllers/TourController.php';

// http://localhost?ten_bien=giatri&ten_bien2=giatri2
// http://localhost?url=create_tour
// B1. Lấy thông tin đường dẫn muốn truy cập vào ở thanh địa chỉ
// $url = isset($_GET['url']) ? $_GET['url'] : '/';
$url = isset($_SERVER['REQUEST_URI']) ? $_SERVER['REQUEST_URI'] : '/';
// B2. Kiểm tra xem người dùng đang muốn vào đâu
// Chức năng giống như điều hành đến các controller khác nhau
switch ($url) {
    case '/':
        // Gọi controller TourController
        indexTour();
        break;
    case '/add':
        // Gọi controller tìm đến hàm hiển thị view tạo mới tour
        addTour();
        break;
    case '/edit':
        // Gọi controller tìm đến hàm hiển thị view tạo mới tour
        editTour();
        break;
    case '/delete':
        // Gọi controller tìm đến hàm hiển thị view tạo mới tour
        deleteTour();
        break;
    default:
        echo 'Đường dẫn không tồn tại';
        break;
}
