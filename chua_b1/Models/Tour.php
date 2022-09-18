<?php
    require_once "Models/db.php";
    function getTours(){
        $sql="SELECT  tours.id,tours.name_t,categories.name,tours.number_date from tours left join categories on tours.category_id=categories.id";
        return getData($sql,FETCH_ALL);
    }
    function addTour($data ){
    if(!empty($data)){
        $valueInsert="";
        foreach($data as $fieldName =>$value){
            $valueInsert .="'".$value."'".',';
        };
        $valueInsert = rtrim($valueInsert,',');
        $sql = "INSERT INTO `tours`(`name_t`,`intro`, `description`, `number_date`, `price`,`category_id` ) VALUES ($valueInsert)";
        return getData($sql,NOT_FETCH);
    }
    function getCat(){
        $sql = "SELECT * FROM categories ";
        return getData($sql,FETCH_ALL);
    }
        
    }
    function getOne($id){
        $sql ="SELECT *FROM tours where id='$id'";
        return getData($sql,FETCH_ONE);
    }
    function updateT($data,$id){
        if(!empty($data)){
            $valueN ="";
            foreach($data as $fieldName =>$value){
                $valueN .="$fieldName = '$value',";
            }
            $valueN=rtrim($valueN,',');
            // var_dump($valueN);die;
            // print_r($valueN);die;
            $sql = "UPDATE tours SET $valueN where id='$id'";
            return getData($sql,NOT_FETCH);
        }
    }

function deleteT($id){
    $sql = "DELETE FROM tours where id = '$id'";
    return getData($sql,NOT_FETCH);
}