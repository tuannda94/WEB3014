<?php
require_once 'Models/Tour.php';
require_once 'Models/Category.php';

// Hàm hiển thị danh sách Tour
function indexTour()
{
    // B1. Lấy tất cả các bản ghi tours
    $tours = getTours();
    // B2. include_once view ds tour
    include_once './Views/tours.php';
}

function createTour()
{

    $categories = getCategories();

    include_once './Views/add-tour.php';
}

function storeTour()
{
    $name = $_POST['name'];
    $description = $_POST['description'];
    $price = $_POST['price'];
    $number_date =  $_POST['number_date'];
    $category_id = $_POST['category'];
    $intro =  $_POST['intro'];
    $image = $_FILES['image']['name'];

    if ($_FILES['image']['size'] <= 0) {
        $errors['image'] = "hãy chọn ảnh";
    }
    if ($_FILES['image']['size'] > 2000000) {
        $errors['image'] = "kích thước ảnh  ko quá 2mb";
    }
    $img = ['jpg', 'png'];
    $ext = pathinfo($_FILES['image']['name'], PATHINFO_EXTENSION);
    if (!in_array($ext, $img)) {
        $errors['image'] = "ảnh không đúng định dạng";
    }
    if (!array_filter($errors)) {
    insertTour($name, $image, $intro, $description, $number_date, $price, $category_id);
    move_uploaded_file($_FILES['image']['tmp_name'], './uploads/' . $_FILES['image']['name']);
    header("location: index.php");
    die;
    }
}

function editTour()
{

    $id = $_GET['id'];

    $categories = getCategories();

    $tour = getTour($id);

    include_once './Views/edit-tour.php';
}

function updateTour()
{
    $id = $_GET['id'];
    $name = $_POST['name'];
    $description = $_POST['description'];
    $price = $_POST['price'];
    $number_date =  $_POST['number_date'];
    $category_id = $_POST['category'];
    $intro =  $_POST['intro'];
    $image = $_FILES['image']['name'];

    if ($_FILES['image']['size'] <= 0) {
        $errors['image'] = "hãy chọn ảnh";
    }
    if ($_FILES['image']['size'] > 2000000) {
        $errors['image'] = "kích thước ảnh  ko quá 2mb";
    }
    $img = ['jpg', 'png'];
    $ext = pathinfo($_FILES['image']['name'], PATHINFO_EXTENSION);
    if (!in_array($ext, $img)) {
        $errors['image'] = "ảnh không đúng định dạng";
    }
    if (!array_filter($errors)) {
    upTour($id,$name, $image, $intro, $description, $number_date, $price, $category_id);
    move_uploaded_file($_FILES['image']['tmp_name'], './uploads/' . $_FILES['image']['name']);
    header("location: index.php");
    die;
    }
}

function deleteTour()
{

    $id = $_GET['id'];

    delTour($id);

    header('location: index.php');
}
