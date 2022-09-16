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

// hàm add tour
function createTour()
{
    // $list_category = query_all_category();
    $categories = getCategories();
    // print_r($categories);
    if (isset($_POST['add_tour'])) {
        $error = [];
        $check = 0;
        $name = $_POST['name'];
        $intro = $_POST['intro'];
        $description = $_POST['description'];
        $number_date = $_POST['number_date'];
        if (empty($number_date) || $number_date <= 0) {
            $error['number_date'] = "Không được bỏ trống và phải là số dương";
            $check++;
        }
        $price = $_POST['price'];
        if (empty($price) || $price <= 0) {
            $error['price'] = "Không được bỏ trống và phải là số dương";
            $check++;
        }
        $category_id = $_POST['category'];

        $target_dir = "upload/";
        $target_file = $target_dir . basename($_FILES["image"]["name"]);
        if ($_FILES["image"]['size'] <= 0) {
            $error['file_size'] = "Chưa có file";
            $check++;
        } else {
            if ($_FILES["image"]['size'] > 2036000) {
                $error['file_size'] = "File lớn hơn cho phép";
                $check++;
            }
            $cut_duoi_img = pathinfo($_FILES["image"]["name"], PATHINFO_EXTENSION);
            $imageFileType = strtolower($cut_duoi_img);
            $duoianh = ["jpg", "png"];
            if (!in_array($imageFileType, $duoianh)) {
                $error['file_type'] = "File không đúng định dạng";
                $check++;
            }
        }

        if ($check == 0) {
            if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) {
                $image = $target_file;
                addTour($name, $image, $intro, $description, $number_date, $price, $category_id);
                echo "Thêm thành công";
            } else {
                echo "Thêm không thành công";
            }
        }
    }
    include_once './Views/createTour.php';
}

// hàm xóa tour
function deleteTour($id)
{
    delete_tour($id);
    $tours = getTours();
    include_once './Views/tours.php';
}

// hàm update tour
function updateTour($id_tour)
{
    $categories = getCategories();

    // print_r($infor_tour);
    if (isset($_POST['update_tour'])) {
        $error = [];
        $check = 0;
        $chec_img = 0;
        $name = $_POST['name'];
        $intro = $_POST['intro'];
        $description = $_POST['description'];
        $number_date = $_POST['number_date'];
        if (empty($number_date) || $number_date <= 0) {
            $error['number_date'] = "Không được bỏ trống và phải là số dương";
            $check++;
        }
        $price = $_POST['price'];
        if (empty($price) || $price <= 0) {
            $error['price'] = "Không được bỏ trống và phải là số dương";
            $check++;
        }
        $category_id = $_POST['category'];

        $target_dir = "upload/";
        $target_file = $target_dir . basename($_FILES["image"]["name"]);
        if ($_FILES["image"]['size'] <= 0) {
            $chec_img++;
        } else {
            if ($_FILES["image"]['size'] > 2036000) {
                $error['file_size'] = "File lớn hơn cho phép";
                $check++;
            }
            $cut_duoi_img = pathinfo($_FILES["image"]["name"], PATHINFO_EXTENSION);
            $imageFileType = strtolower($cut_duoi_img);
            $duoianh = ["jpg", "png"];
            if (!in_array($imageFileType, $duoianh)) {
                $error['file_type'] = "File không đúng định dạng";
                $check++;
            }
        }

        if ($check == 0) {
            if ($chec_img != 0) {
                $image = "";
                update_tour($name, $image, $intro, $description, $number_date, $price, $category_id, $id_tour);
                echo "Update thành công";
            } else {
                if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) {
                    $image = $target_file;
                    update_tour($name, $image, $intro, $description, $number_date, $price, $category_id, $id_tour);
                    echo "Update thành công";
                } else {
                    echo "Update không thành công";
                }
            }
        }
    }
    $infor_tour = getTour($id_tour);
    include_once './Views/updateTour.php';
}