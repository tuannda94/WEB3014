<?php
    require_once 'Models/db.php';

    function getCates(){
        $sql = "SELECT * FROM categories";
        
        return getData($sql, FETCH_ALL);
    }