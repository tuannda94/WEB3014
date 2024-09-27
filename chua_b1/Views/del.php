<?php

if (isset($_SESSION['idEdit'])) {
     $tour_id = $_SESSION['idEdit'];
} else {
     header('location: /');
}

if (isset($tour_id)) {
     $id = $tour_id;
     $sql = "DELETE FROM `tours` WHERE `id` = '$id'";
     getData($sql);
     setcookie('notifi', 'delete success!!!', time() + 3600, '/');
     header('location: /');
}
