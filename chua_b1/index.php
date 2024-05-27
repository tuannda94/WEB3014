<?php
    require_once 'Controllers/TourController.php';
    $url =isset($_GET['url'])?$_GET['url']: '/';
    $id=isset($_GET['id'])?$_GET['id']:''; 
    switch($url){
        case '/':
            indexTour();
            break;
        case 'addTour':
            add();
            break;
        case 'update':
            update($id);
            break;
        case 'delete':
            delete($id);
            break;
        default:
            echo 'đường dẫn không tồn tại';
            break;

    }
    // $data=[
    //     'name'=>'hoang',
    //     'age'=>19,
    //     'address'=>'HN'
    // ];
    // $str="";
    // foreach($data as $fieldName =>$value){
    //     echo $str.="$fieldName='$value',";
    //     echo "<br>";
    // }
    // echo rtrim($str,',');

?>