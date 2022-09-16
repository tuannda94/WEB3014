<?php
require_once 'Models/db.php';

function getTours()
{
    $sql = 'SELECT tours.id, tours.name,tours.img, tours.price, tours.description, tours.number_date, categories.name as cate_name 
    FROM tours
    LEFT JOIN categories
    ON tours.category_id = categories.id
    ';

    return getData($sql, FETCH_ALL);
}

function insertTour($name, $nameImg, $intro, $description, $price, $number_date, $category_id) {
    $sql = "INSERT INTO tours (name, description, price, number_date, img, intro, category_id)
                VALUES ('$name', '$description', '$price', '$number_date', '$nameImg', '$intro', '$category_id')";
    pdo_execute($sql);
};

function getCategories() {
    $sql = "SELECT * FROM categories";
    return getData($sql, FETCH_ALL);
}
