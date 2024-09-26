<?php
require_once 'Models/Tour.php';
require_once 'Models/Category.php';

// Hàm hiển thị danh sách Tour
function indexTour() {
    // B1. Lấy tất cả các bản ghi tours
    $tours = getTours();
    // B2. include_once view ds tour
    include_once './Views/tours.php';
}
function addTour(){
    $categories = getCategories();
    
    include_once './Views/addTour.php';
}
function editTour($id){
    $tour = showTour($id);
    $categories = getCategories();
    include_once './Views/editTour.php';
}

function updateTour($id,$name,$category_id){
    updateTours($id,$name,$category_id);
    $categories = getCategories();
    $tour = showTour($id);

    include_once './Views/editTour.php';
}

function deleteTour($id){
    destroyTour($id);
    $tours = getTours();
    include_once './Views/tours.php';
}

?>
