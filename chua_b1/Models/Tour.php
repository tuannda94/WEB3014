<?php
    require_once 'Models/db.php';

    function getTours(){
        $sql = "SELECT tours.id, tours.name, categories.name AS cate_name FROM tours
            LEFT JOIN categories ON tours.category_id = categories.id
        ";
        
        return getData($sql, FETCH_ALL);
    }

    function getTour($id){
        $sql = "SELECT * FROM tours WHERE id = '$id'";

        return getData($sql, FETCH_ONE);
    }
    
    function createTour($name, $cate_id){
        $sql = "INSERT INTO tours(name, category_id) VALUES ('$name', '$cate_id')";

        return getData($sql, NOT_FETCH);
    }

    function updateTour($name, $cate_id, $id){
        $sql = "UPDATE tours SET name='$name', category_id='$cate_id' WHERE id='$id'";

        return getData($sql, NOT_FETCH);
    }

    function deleteTour($id){
        $sql = "DELETE FROM tours WHERE id=$id";

        return getData($sql, NOT_FETCH);
    }