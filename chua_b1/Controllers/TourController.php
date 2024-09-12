<?php
require_once 'Models/Tour.php';
require_once '../Models/add.php';
require_once '../Models/change.php';

// Hàm hiển thị danh sách Tour
function indexTour()
{
    // B1. Lấy tất cả các bản ghi tours
    $tours = getTours();
    // B2. include_once view ds tour
    include_once './Views/tours.php';
}
function addTour()
{
    $tours = getTours();
    include_once '../Views/Add.php';
}
function changeTour()
{
    $tours = getTours();
    include_once '../Views/change.php';
}
function delete()
{
    $tours = getTours();
    $id =$tours['id'];
    $sql = "DELETE FROM `tours` WHERE `id`=$id";
    return postData($sql , FETCH_ALL);
}
