<?php
require_once 'Models/Tour.php';

// Hàm hiển thị danh sách Tour
function indexTour() {
    // B1. Lấy tất cả các bản ghi tours
    $tours = getTours();
    // B2. include_once view ds tour
    include_once './Views/tours.php';
}

function addTour() {
    $erros = [];
    if($_SERVER['REQUEST_METHOD']=='POST'){
        $name = $_POST['name'];
        $intro=$_POST['intro'];
        $description = $_POST['description'];
        $number_date = $_POST['number_date'];
        $price = $_POST['price'];
        // $category_id =$_POST['category_id'];  
        $image='no_img.img';
        if($_FILES['image']['size']>0){
            $image =$_FILES['image']['name'];
        }else{
            $erros['image']='Khong duoc de trong';
        }
        
        if(empty($name)){
            $erros['name']='Khong duoc de trong';
        }
        if(empty($intro)){
            $erros['intro']='Khong duoc de trong';
        }
        if(empty($description)){
            $erros['description']='Khong duoc de trong';
        }
        if(empty($number_date)){
            $erros['number_date']='Khong duoc de trong';
        }
        if(empty($price)){
            $erros['price']='Khong duoc de trong';
        }
        if(empty($erros)) {
            $data=[
                'name' => $name,
                'intro' => $intro,
                'description' => $description,
                'number_date' =>$number_date,
                'price' => $price,
                // 'category_id' => $category_id,
                'image' => $image
            ];
            insertTour($data);
            header("Location:?url=/");
        }
    }
    include_once './Views/add_tour.php';
}