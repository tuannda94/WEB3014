<?php
require_once 'Models/db.php';

function getTours()
{
    $sql = "SELECT ts.id, ts.name, ts.image, ts.intro, ts.description, ts.number_date, ts.price, ct.id AS 'id_cate', ct.name AS 'name_cate' FROM `tours` ts
    JOIN category ct on ts.category_id = ct.id
    ORDER by ts.id DESC";

    return getData($sql, FETCH_ALL);
}

function addTour($name, $image, $intro, $description, $number_date, $price, $category_id)
{
    $sql = "INSERT INTO `tours`(`name`, `image`, `intro`, `description`, `number_date`, `price`, `category_id`) 
    VALUES ('" . $name . "','" . $image . "','" . $intro . "','" . $description . "'," . $number_date . "," . $price . "," . $category_id . ")";

    getData($sql, NOT_FETCH);
}

function getTour($id)
{
    $sql = "SELECT ts.id, ts.name, ts.image, ts.intro, ts.description, ts.number_date, ts.price, ct.id AS 'id_cate', ct.name AS 'name_cate' FROM `tours` ts
    JOIN category ct on ts.category_id = ct.id 
    WHERE ts.id = " . $id;

    return getData($sql, FETCH_ONE);
}

function update_tour($name, $image, $intro, $description, $number_date, $price, $category_id, $id_tour)
{
    if ($image == "") {
        $sql = "UPDATE `tours` SET `name`='" . $name . "',`intro`='" . $intro . "',`description`='" .
            $description . "',`number_date`=" . $number_date . ",`price`=" . $price . ",`category_id`=" . $category_id . " WHERE id = " . $id_tour;
    } else {
        $sql = "UPDATE `tours` SET `name`='" . $name . "',`image`='" . $image . "',`intro`='" . $intro . "',`description`='" .
            $description . "',`number_date`=" . $number_date . ",`price`=" . $price . ",`category_id`=" . $category_id . " WHERE id = " . $id_tour;
    }

    getData($sql, NOT_FETCH);
}

function delete_tour($id)
{
    $sql = "DELETE FROM `tours` WHERE id = " . $id;

    getData($sql, NOT_FETCH);
}