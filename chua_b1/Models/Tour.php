<?php
require_once 'Models/db.php';
// require_once '../Views/add_tour.php';

function getTours() {
    $sql = 'SELECT tours.name, tours.image, tours.intro, tours.description , tours.number_date, tours.price, categories.name as cate_name FROM tours
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

