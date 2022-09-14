<?php
require_once 'Models/db.php';

function getTours() {
    $sql = 'SELECT tours.id, tours.name, categories.name as cate_name FROM tours
        LEFT JOIN categories
        ON tours.category_id = categories.id
    ';

    return getData($sql, FETCH_ALL);
}
