<?php
    define('FETCH_ALL',2);
    define('FETCH_ONE',1);
    define('NOT_FETCH',0);

    function getConnect(){
        $connect=new PDO('mysql:host=localhost;dbname=ph18783_examphp1',
        'root',
        ''
    );
    return $connect;
    }
    function getData($sql,$fetchType){
        $conn=getConnect();
        $stmt=$conn->prepare($sql);
        $stmt->execute();
        switch($fetchType){
            case FETCH_ALL:
                return $stmt->fetchAll(PDO::FETCH_ASSOC);
            case FETCH_ONE:
                return $stmt->fetch();
            default:
                return true;
        }
    }
    
    
?>