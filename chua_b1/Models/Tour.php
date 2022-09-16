<?php
require_once 'Models/db.php';

function getTours()
{
    $sql = 'SELECT tours.id, tours.name,tours.image, tours.intro,tours.description ,tours.number_date,tours.price ,categories.name as cate_name FROM tours
        LEFT JOIN categories
        ON tours.category_id = categories.id
    ';

    return getData($sql, FETCH_ALL);
}

function deleTour($id)
{
    $sql = "DELETE FROM tours WHERE id = $id";
    return getData($sql, EXECUTE);
}
function add($name, $image, $intro, $description, $number_date, $price, $category_id)
{
    $sql = "INSERT INTO tours( name, image, intro, description, number_date, price, category_id) VALUES ('$name','$image','$intro','$description','$number_date','$price','$category_id')";
    return getData($sql, EXECUTE);
}
function edit($id, $name, $image, $intro, $description, $number_date, $price, $category_id)
{
    if ($image != "") {
        $sql = "UPDATE tours SET name='$name',image='$image',intro='$intro',description='$description',number_date='$number_date',price='$price',category_id='$category_id' WHERE id = $id";
    } else {
        $sql = "UPDATE tours SET name='$name',intro='$intro',description='$description',number_date='$number_date',price='$price',category_id='$category_id' WHERE id = $id";
    }
    return getData($sql, EXECUTE);
}
function selectTour($id)
{
    $sql = "SELECT * FROM tours where id = $id";
    $loadtour =  getData($sql, FETCH_ONE);
    return $loadtour;
}
function selectCata()
{
    $sql = "SELECT * FROM categories ";
    $selectCata = getData($sql, FETCH_ALL);
    return $selectCata;
}
