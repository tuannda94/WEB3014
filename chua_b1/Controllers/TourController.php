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
    $listCategory = getCategories();
    if (isset($_POST["submit"])) {
        $name = $_POST["name"];
        $description = $_POST["description"];
        $price = $_POST["price"];
        $category_id = $_POST["category"];
        $intro = $_POST["intro"];
        $number_date = $_POST["number_date"];
        $target_dir = "uploads/";
        $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
        $uploadOk = 1;
        $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
        $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
        if ($check !== false) {
            echo "File is an image - " . $check["mime"] . ".";
            $uploadOk = 1;
        } else {
            echo "File is not an image.";
            $uploadOk = 0;
        }
        // Check if file already exists
        if (file_exists($target_file)) {
            echo "Sorry, file already exists.";
            $uploadOk = 0;
        }

        // Check file size
        if ($_FILES["fileToUpload"]["size"] > 500000) {
            echo "Sorry, your file is too large.";
            $uploadOk = 0;
        }

        // Allow certain file formats
        if (
            $imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
            && $imageFileType != "gif"
        ) {
            echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
            $uploadOk = 0;
        }

        $nameImg = htmlspecialchars(basename($_FILES["fileToUpload"]["name"]));

        // Check if $uploadOk is set to 0 by an error
        if ($uploadOk == 0) {
            echo "Sorry, your file was not uploaded.";
            // if everything is ok, try to upload file
        } else {
            if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
                echo "The file " . $nameImg . " has been uploaded.";
            } else {
                echo "Sorry, there was an error uploading your file.";
            }
        }
        if ($uploadOk == 1) {
            insertTour($name, $nameImg, $intro, $description, $price, $number_date, $category_id);
            header("Location: index.php");
        }
    }
    include_once './Views/add.php';
}

function updateTour()
{
    $listCategory = getCategories();
    if ($_GET['id']) {
        $id = $_GET['id'];
        $row = detailCategory($id);
        $currName = $row["name"];
        $currDescription = $row["description"];
        $currPrice = $row["price"];
        $currCategory = $row["category_id"];
        $currIntro = $row["intro"];
        $currNumberDate = $row["number_date"];
        $currImg = $row["img"];
    }

    // Check if image file is a actual image or fake image

    if (isset($_POST["submit"])) {
        $name = isset($_POST["name"]) ? $_POST["name"] : $currName;
        $description = isset($_POST["description"]) ? $_POST["description"] : $currDescription;
        $price = isset($_POST["price"]) ? $_POST["price"] : $currPrice;
        $category_id = isset($_POST["category"]) ? $_POST["category"] :  $currCategory;
        $intro = isset($_POST["intro"]) ? $_POST["intro"] : $currIntro;
        $number_date = isset($_POST["number_date"]) ? $_POST["number_date"] : $currNumberDate;
        $target_dir = "uploads/";
        $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
        $uploadOk = 1;
        $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
        $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
        if ($check !== false) {
            echo "File is an image - " . $check["mime"] . ".";
            $uploadOk = 1;
        } else {
            echo "File is not an image.";
            $uploadOk = 0;
        }
        // Check if file already exists
        if (file_exists($target_file)) {
            echo "Sorry, file already exists.";
            $uploadOk = 0;
        }

        // Check file size
        if ($_FILES["fileToUpload"]["size"] > 500000) {
            echo "Sorry, your file is too large.";
            $uploadOk = 0;
        }

        // Allow certain file formats
        if (
            $imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
            && $imageFileType != "gif"
        ) {
            echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
            $uploadOk = 0;
        }

        $nameImg = htmlspecialchars(basename($_FILES["fileToUpload"]["name"]));

        if (!$nameImg) {
            $nameImg = $currImg;
            $uploadOk = 1;
        }

        // Check if $uploadOk is set to 0 by an error
        if ($uploadOk == 0) {
            echo "Sorry, your file was not uploaded.";
            // if everything is ok, try to upload file
        } else {
            if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
                echo "The file " . $nameImg . " has been uploaded.";
            } else {
                echo "Sorry, there was an error uploading your file.";
            }
        }
        if ($uploadOk == 1) {
            updateTour1($name, $nameImg, $intro, $description, $price, $number_date, $category_id, $id);
            header("Location: index.php");
        }
    }
    include_once './Views/update.php';
}
