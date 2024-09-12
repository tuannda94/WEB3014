<?php
require_once 'Models/db.php';

function getTours() {
    $sql = 'SELECT tours.id, tours.name, categories.name as cate_name FROM tours
        LEFT JOIN categories
        ON tours.category_id = categories.id
    ';

    return getData($sql, FETCH_ALL);
}

function insertTour($data) {
    if(!empty($data)){
        $valueInsert="";
        foreach($data as $fieldName =>$value){
            $valueInsert .="'".$value."'".',';
        };
        $valueInsert = rtrim($valueInsert,',');
        $sql = "INSERT INTO `tours`(`name`,`image`,`intro`, `description`, `number_date`, `price`,`category_id` ) VALUES ($valueInsert)";
        return getData($sql,NOT_FETCH);
    }
}

function getOne($id){
    $sql ="SELECT * FROM tours WHERE id='$id'";
    return getData($sql,FETCH_ONE);
}

function updateTour($data,$id) {
    if(!empty($data)){
        $valueN ="";
        foreach($data as $fieldName => $value){
            $valueN .="$fieldName = '$value',";
        }
        $valueN=rtrim($valueN,',');
        $sql = "UPDATE tours SET $valueN where id='$id'";
        return getData($sql,NOT_FETCH);
    }
}

function deleteTour($id){
    $sql = "DELETE FROM tours WHERE id = '$id'";
    return getData($sql,NOT_FETCH);
}
