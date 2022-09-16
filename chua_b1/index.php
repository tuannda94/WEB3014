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
        indexTour();
        break;
    case 'create-tour':
        // Gọi controller tìm đến hàm hiển thị view tạo mới tour
        createTour();
        break;
    case 'delete-tour':
        if (isset($_GET['id'])) {
            $id = $_GET['id'];
            deleteTour($id);
        } else {
            echo 'Không tồn tại tour này';
        }
        break;
    case 'update-tour':
        if (isset($_GET['id'])) {
            if (isset($_GET['id'])) {
                $id_tour = $_GET['id'];
                updateTour($id_tour);
            }
        } else {
            echo 'Không tồn tại tour này';
        }
        break;



    default:
        echo 'Đường dẫn không tồn tại';
        break;
}