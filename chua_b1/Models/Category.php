<?php

function getCategories()
{
    $sql = "SELECT * FROM `category` WHERE 1";
    return getData($sql, FETCH_ALL);
}