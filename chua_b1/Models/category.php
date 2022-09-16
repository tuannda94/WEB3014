<?php

function getCategories() {
    $sql = 'SELECT categories.id, categories.name  FROM categories ';

    return getData($sql, FETCH_ALL);
}


?>