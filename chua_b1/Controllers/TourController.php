<?php
require_once 'Models/Tour.php';
require_once 'Models/Cate.php';

// Hàm hiển thị danh sách Tour
function indexTour() {
    // B1. Lấy tất cả các bản ghi tours
    $tours = getTours();
    // B2. include_once view ds tour
    include_once './Views/tours.php';
}
function addTour(){
    $cates = getCates();
    require_once'Views/addTour.php';
if($_SERVER['REQUEST_METHOD'] == "POST"){
    $name = $_POST['name'];
    $intro = $_POST['intro'];
    $mota = $_POST['des'];
    $price = $_POST['price'];
    $date = $_POST['number_date'];
    $cate = $_POST['cate'];
    $file = $_FILES['anh'];
    $image = $file['name'];
    $size = $file['size'];
    $img = ['jpg','png'];
    $ext = pathinfo($anh,PATHINFO_EXTENSION);
    if($name==''){
        $errors['name'] = "Bạn chưa nhập tên";
    }
    if($price <  0){
        $errors['price'] = "Bạn phải nhập số dương";
    }
    if($date <  0){
        $errors['date'] = "Bạn phải nhập số dương";
    }
    if($size <= 0 || $size >2000000){
        $errors['anh'] = "Bạn chưa tải ảnh hoặc ảnh không đúng kích cỡ";
    }
    if($size > 0 && !in_array($ext,$img)){
        $error['anh'] = "Bạn tải không phải ảnh";
    }
    if(empty($errors)){
        move_uploaded_file($file['tmp_name'],"images/".$image);
        addTours($name,$image,$intro,$mota,$date,$price,$cate);
        header('location:/Lab1_QuanPH18800/chua_b1?message=BẠn đã thêm thành công');
        die;
    }
}
}
function editTour($id_tour){
    $cates = getCates();
    $tour = getTour($id_tour);
    require_once'Views/editTour.php';
//
if($_SERVER['REQUEST_METHOD'] == "POST"){
    $name = $_POST['name'];
    $intro = $_POST['intro'];
    $mota = $_POST['des'];
    $price = $_POST['price'];
    $date = $_POST['number_date'];
    $cate = $_POST['cate'];
    $anh = $_POST['anh'];
    $img = ['jpg','png'];
    $ext = pathinfo($anh,PATHINFO_EXTENSION);
    if(empty($errors)){
            editToursModel($name,$intro,$mota,$date,$price,$cate,$anh,$id_tour);
            header('location:/Lab1_QuanPH18800/chua_b1?message=Bạn đã sửa thành công');
            die;
    }
}
}
function deleteTour($id_tour){
    $id =$id_tour;

    deleteTourModel($id);
    header('location:/Lab1_QuanPH18800/chua_b1?message=Bạn đã xóa thành công');

}
