<?php
    require_once 'Controllers/TourController.php';
    require_once 'Controllers/CateController.php';
    //B1: Lấy thông tin đường dẫn muốn truy cập vào ở thanh địa chỉ
    $url = isset($_GET['url']) ? $_GET['url'] : '/';
    //B2: Kiểm tra xem người dùng đang muốn vào đâu
    //Chức năng giống như điều hành
    switch ($url) {
        case '/':
            //Gọi controller TourController
            //Gọi hàm index() => 
            echo indexTour();
            break;
        case 'create-tour' :
            echo storeTour();
            break;
        case 'edit-tour' :
            echo showTour();
            echo editTour();
            break;
        case 'destroy-tour' :
            destroyTour();
            break;
        default:
            echo 'Đường dẫn không tồn tại';
            break;
    }
?>