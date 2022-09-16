<?php
require_once 'Controllers/TourController.php';

// http://localhost?ten_bien=giatri&ten_bien2=giatri2
// http://localhost?url=create_tour
// B1. Lấy thông tin đường dẫn muốn truy cập vào ở thanh địa chỉ
$url = isset($_GET['url']) ? $_GET['url'] : '/';
// B2. Kiểm tra xem người dùng đang muốn vào đâu
// Chức năng giống như điều hành đến các controller khác nhau
switch ($url) {
    case '/':
        // Gọi controller TourController
        echo indexTour();
        break;
    case 'create-tour':
        echo createTour();
        break;
    case 'store-tour':
        storeTour();
        break;
    case 'edit-tour':
        echo editTour();
        break;
    case 'update-tour':
        updateTour();
        break;
    case 'delete-tour':
        deleteTour();
        break;
    default:
        echo 'Đường dẫn không tồn tại';
        break;
}
