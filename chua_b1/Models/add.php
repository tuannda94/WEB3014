<?php
require_once 'db.php';


$name = $_POST['name'];
$intro = $_POST['intro'];
$des = $_POST['description'];
$price = $_POST['price'];

$sql = "INSERT INTO `tours`(`name`,  `intro`, `description`, `price`) VALUES ('$name','$intro','$des','$price')";
return postData($sql , FETCH_ALL);