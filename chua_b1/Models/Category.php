<?php
require_once 'Models/db.php';

function getCategories()
{

    $sql = 'SELECT * FROM categories';

    return getData($sql, FETCH_ALL);
}
