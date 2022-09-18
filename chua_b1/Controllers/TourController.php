<?php
    require_once 'Models/Tour.php';
    require_once 'Models/Cate.php';

    //Hiện thị ds tour
    function indexTour(){
        //B1 lấy tất cả các bản ghi tours
        $tours = getTours();
        //B2: include_once view ds tours
        include_once 'View/tours.php';
    }

    //Hiện thị 1 tour
    function showTour(){
        //Lấy 1 bản ghi trong tour
        $id = $_GET['id'];
        $tour = getTour($id);
        $cate = getCates();
        include_once 'View/edit-tour.php';
    }

    function storeTour(){
        $cate = getCates();
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $name = $_POST['name']; 
            $cate_id = $_POST['category_id'];

            createTour($name, $cate_id);

            header("Location:./index.php?url=/");
            die;
        }
        include_once  'View/create-tour.php';
    }

    function editTour(){
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $id = $_POST['id']; 
            $name = $_POST['name']; 
            $cate_id = $_POST['category_id'];
            updateTour($name, $cate_id, $id);

            header("Location:./index.php?url=/");
            die;
        }
    }

    function destroyTour(){
        $id = $_GET['id'];
        deleteTour($id);

        header("Location:./index.php?url=/");
        die;
    }