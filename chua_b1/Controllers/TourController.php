<?php
require_once 'Models/Tour.php';

// Hàm hiển thị danh sách Tour
function indexTour() {
    // B1. Lấy tất cả các bản ghi tours
    $tours = getTours();
    // B2. include_once view ds tour
    include_once './Views/tours.php';
}
