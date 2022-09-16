<?php
require_once 'Models/Tour.php';

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
    $cata = selectCata();
    // B1. Lấy tất cả các bản ghi tours
    if (isset($_POST['add'])) {
        $id = $_POST['id'];
        $name = $_POST['name'];
        $file = $_FILES['image'];
        $image = $file['name'];

        $intro = $_POST['intro'];
        $description = $_POST['description'];
        $number_date = $_POST['number_date'];
        $price = $_POST['price'];
        $category_id = $_POST['category_id'];
        move_uploaded_file($file['tmp_name'], '../img/' . $image);
        add($name, $image, $intro, $description, $number_date, $price, $category_id);
        echo "<script> window.location.href='index.php'</script>";
    }
    include_once "Views/add.php";
}


function editTour()
{
    $cata = selectCata();
    $id = $_GET['id'];
    $loadtour = selectTour($id);
    if (isset($_POST['add'])) {
        $id = $_POST['id'];
        $name = $_POST['name'];
        $file = $_FILES['image'];
        $image = $file['name'];

        $intro = $_POST['intro'];
        $description = $_POST['description'];
        $number_date = $_POST['number_date'];
        $price = $_POST['price'];
        $category_id = $_POST['category_id'];
        move_uploaded_file($file['tmp_name'], '../img/' . $image);
        edit($id, $name, $image, $intro, $description, $number_date, $price, $category_id);
        echo "<script> window.location.href='index.php'</script>";
    }
    include_once "Views/edit.php";
}

function deleteTour()
{
    $id = $_GET['id'];
    deleTour($id);
    echo "<script> window.location.href='index.php'</script>";
}
