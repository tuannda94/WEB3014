<?php
require_once 'db.php';
$name = $_POST['name'];
$intro = $_POST['intro'];
$des = $_POST['description'];
$price = $_POST['price'];
$id = changeTour('id');
$sql = "UPDATE `tours` SET `name`='$name',`intro`='$intro',`description`='$des',`price`='$price', WHERE `id`=$id";
return postData($sql , FETCH_ALL);