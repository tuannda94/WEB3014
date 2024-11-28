<?php
// Định nghĩa ra các tình huống lấy dữ liệu
define('FETCH_ALL', 2);
define('FETCH_ONE', 1);
define('NOT_FETCH', 0);

function getConnect() {
    $conn = new PDO("mysql:host=localhost:3366; dbname=php2_lab1",'root','');
    $conn ->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    
    return $conn;
}
// 1. Viết truy vấn $sql = 'SELECT * FROM tours;
// 2. Chuẩn bị truy vấn $statement = $connect->prepare($sql);
// 3. Thực thi $statement->execute();
// 4. Nhận kq $tours = $statement->fetchAll();
function getData($sql, $fetchType) {
    $conn = getConnect();
    $statement = $conn->prepare($sql);
    $statement->execute();

    switch($fetchType) {
        case FETCH_ALL:
            return $statement->fetchAll();
        case FETCH_ONE:
            return $statement->fetch();
        default:
            return true;
    }
}
//Hàm thực hiện thêm mới, sửa, xóa
function executeDB($sql){
    $conn = getConnect();
    $stmt = $conn->prepare($sql);
    $stmt->execute();
}
