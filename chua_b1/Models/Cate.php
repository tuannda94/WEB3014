<?php
require_once 'Models/db.php';

function getCates() {
    $sql = "SELECT * FROM cate";
        return getData($sql,FETCH_ALL);
}
?>
