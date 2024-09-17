<?php
require_once 'Models/db.php';
if ($_SERVER['REQUEST_METHOD']=='POST') {
    $ten = $_POST['ten'];
    $anh = $_FILES['image']['name'];
    $intro = $_POST['intro'];
    $des = $_POST['des'];
    $nd = $_POST['nd'];
    $price = $_POST['price'];
    $cate_id = $_POST['cate_id']; 

    // print_r($anh); die;
    // $sql = "INSERT INTO tours(name, intro, description, number_date, price, category_id) 
    // VALUES ('$ten','$intro','$des','$nd','$price','$cate_id')";
    // $stmt = $conn->prepare($sql);
    // $stmt->execute();
    addtour($ten,$anh,$intro,$des,$nd,$price,$cate_id);
    header("location: index.php/?message=Thêm thành công");
}
$sql = "SELECT * FROM tours";
$tour = getData($sql, FETCH_ALL);

$sql = "SELECT * from categories";
$cate_id = getData($sql, FETCH_ALL);
?>