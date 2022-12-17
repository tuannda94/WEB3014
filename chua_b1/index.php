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
        // Gọi controller tìm đến hàm hiển thị view tạo mới tour
        
        echo createTour() ;
        break;

    case 'destroy-tour':
            // Gọi controller tìm đến hàm hiển thị view tạo mới tour
            
         echo destroyTour() ;
            break;
    case 'edit-tour':
                // Gọi controller tìm đến hàm hiển thị view tạo mới tour
                
         echo editTour() ;
        break;

    case 'update-tour':
            // Gọi controller tìm đến hàm hiển thị view tạo mới tour
            
     echo updateTour() ;
    break;
    default:
        echo 'Đường dẫn không tồn tại';
        break;
}
