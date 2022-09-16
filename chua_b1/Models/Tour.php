<?php
require_once 'Models/db.php';

function getTours() {
    $sql = 'SELECT tours.id, tours.name, categories.name as cate_name FROM tours
        LEFT JOIN categories
        ON tours.category_id = categories.id
    ';

    return getData($sql, FETCH_ALL);
}
function showTour($id){
    $sql = 'SELECT tours.id, tours.name, categories.name as cate_name, tours.category_id as category_id FROM tours
        LEFT JOIN categories
        ON tours.category_id = categories.id WHERE tours.id='.$id;

    return getData($sql, FETCH_ONE);
}

function insertTour($name,$category_id){
    $sql = "INSERT INTO `tours`(`name`, `category_id`) VALUES('".$name."', ".$category_id.")";

    getData($sql, NOT_FETCH);
}

function updateTours($id,$name,$category_id){
    $sql = "UPDATE `tours` SET `name`='".$name."',`category_id`=".$category_id." WHERE id=".$id;

    getData($sql, NOT_FETCH);
}

function destroyTour($id){
    $sql = "DELETE FROM `tours` WHERE id=".$id;

    getData($sql, NOT_FETCH);
}

?>