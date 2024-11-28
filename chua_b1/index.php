<?php
require_once 'Controllers/TourController.php';

// http://localhost?ten_bien=giatri&ten_bien2=giatri2
// http://localhost?url=create_tour
// B1. Lấy thông tin đường dẫn muốn truy cập vào ở thanh địa chỉ
$url = isset($_GET['url']) ? $_GET['url'] : '/';
// B2. Kiểm tra xem người dùng đang muốn vào đâu
// Chức năng giống như điều hành đến các controller khác nhau
switch($url) {
    case '/':
        // Gọi controller TourController
        echo indexTour();
        break;
    case 'create-tour':
        echo addTour();
        // Gọi controller tìm đến hàm hiển thị view tạo mới tour
        break;
    case 'edit-tour':
        $id = $_GET['id'];
        editTour($id);
        break;
    case 'delete-tour':
        $id = $_GET['id'];
        deleteTour($id);
        break;
    default:
        echo 'Đường dẫn không tồn tại';
        break;
}
