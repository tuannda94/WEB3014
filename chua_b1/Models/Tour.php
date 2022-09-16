<?php
require_once 'Models/db.php';

function getTours()
{
    $sql = 'SELECT tours.id, tours.name, categories.name as cate_name FROM tours
        LEFT JOIN categories
        ON tours.category_id = categories.id
    ';

    return getData($sql, FETCH_ALL);
}

function getTour($id)
{
    $sql = 'SELECT * FROM tours WHERE id = '. $id .'
    ';

    return getData($sql, FETCH_ONE);
}

function insertTour($name, $image, $intro, $description, $number_date, $price, $category_id)
{
    $sql = "INSERT INTO tours (name	,image,intro,description,number_date,price,category_id	
    ) VALUES ('$name','$image','$intro','$description','$number_date','$price','$category_id')";

    return getData($sql, NOT_FETCH);
}

function upTour($id, $name, $image, $intro, $description, $number_date, $price, $category_id)
{
    $sql = "UPDATE tours SET name = '$name',image = '$image',intro = '$intro',description = '$description',number_date = '$number_date',price = '$price',category_id = '$category_id' WHERE id='$id'";

    return getData($sql, NOT_FETCH);
}

function delTour($id)
{
    $sql = "DELETE FROM tours where id=" . $_GET['id'];

    return getData($sql, NOT_FETCH);
}
