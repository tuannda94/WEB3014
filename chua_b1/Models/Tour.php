<?php
require_once 'Models/db.php';

function getTours() {
    $sql = 'SELECT a.id, a.name, a.image, a.intro, a.description, a.number_date, a.price, b.name as cate_name FROM tours as a
        LEFT JOIN categories as b
        ON a.cate_id = b.id
    ';

    return getData($sql, FETCH_ALL);
}

function addtour($ten,$anh,$intro,$des,$nd,$price,$cate_id) {
    // $sql = "INSERT INTO `tours`( `name`, `image`, `intro`, `description`, `number_date`, `price`, `cate_id`) 
    // VALUES ('$name','$image','$intro', '$des', '$nd', '$price', '$cate_id'";
    $sql = "INSERT INTO `tours`( `name`, `image`, `intro`, `description`, `number_date`, `price`, `cate_id`)
    VALUES ('$ten','$anh','$intro', '$des', '$nd', '$price', '$cate_id')";
    getData($sql,0);
}

function deltour($id) {
    $sql = "DELETE FROM `tours` WHERE id=$id";
    getData($sql,0);
}

function updatetour($id, $ten,$anh,$intro,$des,$nd,$price,$cate_id) {
    $sql = "UPDATE `tours` SET `name`='$ten',`image`='$anh',`intro`='$intro',`description`='$des',`number_date`='$nd',`price`='$price',`cate_id`='$cate_id' WHERE id=$id";
    // print_r($sql); die;
    getData($sql,0);
}
