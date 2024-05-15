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

function deleteTours($id)
{
    $sql = "DELETE FROM tours WHERE id = $id";
    return getData($sql, EXECUTE);
}
function add($name, $image, $intro, $description, $number_date, $price, $category_id)
{
    $sql = "INSERT INTO tours( name, image, intro, description, number_date, price, category_id) VALUES ('$name','$image','$intro','$description','$number_date','$price','$category_id')";
    return getData($sql, 0);
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
function storeTour($id) //lưu lại
{
    $sql = "SELECT * FROM tours where id = $id";
    $storeTour =  getData($sql, FETCH_ONE);
    return $storeTour;
}
function getCategory()
{
    $sql = "SELECT * FROM categories ";
    $cate = getData($sql, FETCH_ALL);
    return $cate;
}