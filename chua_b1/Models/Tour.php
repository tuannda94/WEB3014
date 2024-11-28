<?php
require_once 'Models/db.php';

function getTours() {
    $sql = "SELECT tours.id_tours,tours.name,tours.description,tours.image,cate.name as cate_name FROM tours LEFT JOIN cate ON tours.cate_id = cate.id_cate";
        return getData($sql,FETCH_ALL);
}
function getTour($id){
    $sql = "SELECT tours.id_tours,tours.name,tours.intro,tours.description,tours.image,tours.price,tours.number_date,cate.name as cate_name FROM tours LEFT JOIN cate ON tours.cate_id = cate.id_cate WHERE id_tours = $id";
        return getData($sql,FETCH_ONE);
}
function addTours($name,$image,$intro,$description,$number_date,$price,$cate_id){
    $sql = "INSERT INTO tours(name,image,intro,description, number_date,price, cate_id) VALUES('$name','$image','$intro','$description',$number_date,$price,$cate_id)";
    executeDB($sql);
}
function editToursModel($name,$intro,$mota,$date,$price,$cate,$anh,$ma){
    $sql = "UPDATE tours Set name ='$name',intro='$intro',description='$mota',number_date=$date,price = $price,cate_id ='$cate',image='$anh' WHERE id_tours = $ma";
    executeDB($sql);
}
function deleteTourModel($ma){
    $sql = "DELETE FROM tours WHERE id_tours = $ma";
    executeDB($sql);
}
