<?php
require_once 'Models/Tour.php';
// Hàm hiển thị danh sách Tour

function indexTour() {
    // B1. Lấy tất cả các bản ghi tours
    $tours = getTours();
    // B2. include_once view ds tour
    include_once './Views/tours.php';
}

function indexAddTour() {
    require_once 'Models/addtour.php';
    // $addtour = addtour($ten,$intro,$des,$nd,$price,$cate_id);
    include_once 'Views/addtour.php';
}

function indexUpdTour() {
    require_once 'Models/updtour.php';
    include_once 'Views/updtour.php';
}

function indexDelTour() {
    require_once 'Models/deltour.php';
    include_once 'Views/tours.php';
}


