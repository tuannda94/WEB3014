<?php
//Định nghĩa ra các tình huống lấy dữ liệu
define('FETCH_ALL', 2);
define('FETCH_ONE', 1);
define('NOT_FETCH', 0);

function getConn(){
    $conn = new PDO('mysql:host=localhost;dbname=ph15143_examphp1;charset=utf8', 'root', '');
    return $conn;
}

function getData($sql, $fetchType){
    $conn = getConn();
    $stmt = $conn->prepare($sql);
    $stmt->execute();

    switch ($fetchType) {
        case FETCH_ALL:

            return $stmt->fetchAll();
        
        case FETCH_ONE:

            return $stmt->fetch();
        default:
        
            return true;
    }
}