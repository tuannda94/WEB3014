<?php
require_once 'Models/Tour.php';
require_once 'Models/category.php';

// Hàm hiển thị danh sách Tour
function indexTour() {
    // B1. Lấy tất cả các bản ghi tours
    $tours = getTours();
    // B2. include_once view ds tour
    include_once './Views/tours.php';
}

function createTour()
{

    if(isset($_POST['createTour']))
    {
            $name = $_POST['nameTour'];
            $cate_id = $_POST['cateId'];
            
            if($name == "")
            {
                $err_name = "chưa nhập name tour";
            }
            else if($cate_id == "")
            {
                $err_cate_id = "chưa chọn loại tour";
            }
            else if($name !== "" && $cate_id !== "")
            {
                addTours($name,$cate_id);
                $message = "thêm tour thành công";
            }
            
    }

    $Categories = getCategories() ;

    include_once './Views/addTour.php';
}

function destroyTour()
{
     
    if(isset($_GET["id"]))
    {
        $id = $_GET["id"];
        deleteTours($id);
        
    };
    $tours = getTours();
    // B2. include_once view ds tour
    include_once './Views/tours.php';

}

function editTour()
{
    if(isset($_GET["id"]))
    {
        $id = $_GET["id"];
        
        $tour = getOneTours($id) ;

        $Categories = getCategories() ;

        include_once './Views/editTour.php';   
    };
}

function updateTour()
{
     
    if(isset($_POST["updateTour"]))
    {
        $id = $_POST["idTour"];
        $name = $_POST["nameTour"];
        $cate_id = $_POST["cateId"];
        
        UpdateTours($id,$name,$cate_id);

        $tours = getTours();
        $message = "Sửa tour thành công";
        // B2. include_once view ds tour
        include_once './Views/tours.php';
        
    };
    

}
