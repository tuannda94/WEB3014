<?php
require_once 'Models/db.php';

function getTours() {
    $sql = 'SELECT tours.id, tours.name, categories.name as cate_name FROM tours
        LEFT JOIN categories
        ON tours.category_id = categories.id
    ';

    return getData($sql, FETCH_ALL);
}

function addTours($name,$cate_id)
{
    $sql = "INSERT INTO `tours` (`name`,`category_id`) value ('".$name."','".$cate_id."')";

    return getData($sql, NOT_FETCH);
}

function getOneTours($id)
{
    $sql = "SELECT tours.id , tours.name , tours.category_id FROM tours  WHERE id=".$id;
    
    return  getData($sql, FETCH_ONE);
}

function UpdateTours($id,$name,$cate_id)
{
    $sql = "UPDATE `tours` SET `name`=$name , `category_id`=$cate_id WHERE `id`=".$id;

    return getData($sql, NOT_FETCH);
}

function deleteTours($id)
{
    $sql = "DELETE FROM `tours` WHERE id=".$id;

    return getData($sql, NOT_FETCH);
}