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
        if(isset($_POST['AddTour'])){
            $name = $_POST['name'];
            $category_id = $_POST['category_id'];
            $erros = [];
            if(!preg_match('/^[A-Z]+[A-Za-z0-9\s-]+$/u', $name)){
                $erros['name'] = 'Invalid tour name';
            }
            if(!preg_match('/^\d+$/', $category_id)){
                $erros['category_id'] = 'Invalid tour category';
            }
            if(!array_filter($erros)){
                insertTour($name, $category_id);
                $message = 'More successful tours';
            }
        }
        addTour();
        break;
    case 'delete-tour':
        if(isset($_GET['id'])){
            deleteTour($_GET['id']);
        }
        break;
    case 'edit-tour':
        if(isset($_GET['id'])){
            editTour($_GET['id']);
        }
        break;
    case 'update-tour' :
        if(isset($_POST['updateTour'])){
            $id = $_POST['id'];
            $name = $_POST['name'];
            $category_id = $_POST['category_id'];
            $erros = [];
            if(!preg_match('/^[A-Z]+[A-Za-z0-9\s-]+$/u', $name)){
                $erros['name'] = 'Invalid tour name';
            }
            if(!preg_match('/^\d+$/', $category_id)){
                $erros['category_id'] = 'Invalid tour category';
            }
            if(!array_filter($erros)){
                updateTour($id,$name,$category_id);
                $message = 'More successful tours';
            }
        }
        break;
    default:
        echo 'Đường dẫn không tồn tại';
        break;
}
