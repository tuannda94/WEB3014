<?php
require_once 'Models/Tour.php';
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    deltour($id);
    $thongbao="Xoá thành công!";
    header('location: index.php?url=/'); die;
}