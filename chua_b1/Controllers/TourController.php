<?php
require_once './Models/Tour.php';
function indexTour(){

    $tours = getTours();
    include_once 'Views/tours.php';
}
// $id=isset($_GET['id'])?$_GET['id']:'';
function add(){
    $err=[];
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $name=$_POST['name'];
        $des=$_POST['des'];
        $intro=$_POST['intro'];
        $number_date=$_POST['number_date'];
        $price =$_POST['price'];
        $category_id=1;
        if(empty($name)){
            $err['name']='chưa nhập tên';
        }
        if(empty($err)){
            
            $data=[
                'name'=>$name,
                'des'=>$des,
                'intro'=>$intro,
                'number_date'=>$number_date,
                'price'=>$price,
                'category_id'=>$category_id
            ];
            addTour($data);
            header("Location:?url=/");
            
        }
        $cat  = getCat();
    }
    include_once './Views/add.php';
};
function update($id){
    $t = getOne($id);
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $name=$_POST['name'];
        $des=$_POST['des'];
        $intro=$_POST['intro'];
        $number_date=$_POST['number_date'];
        $category_id=1;
        $data=[
            'name_t'=>$name,
            'description'=>$des,
            'intro'=>$intro,
            'number_date'=>$number_date,
            'category_id'=>$category_id
        ];
        updateT($data,$id);
        header("Location:?url=/");
    }
    include_once 'Views/update.php';
}
function delete($id){
    deleteT($id);
    header("Location:?url=/");
}
