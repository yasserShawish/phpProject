<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

include '../../DAL/AccessDatabase.php';
include '../../Portal/Model/PostModel.php';

class DoSearch {
    var $searchKey;
    
    
    function __construct($searchKey) {
        $this->searchKey = trim($searchKey);
        echo $searchKey;
        echo '<script>alert("ahmadAbabneh");</script>';
        $arrayOfKeyWords = explode(" " ,$searchKey);
        
        $listResult = array();
        foreach ($arrayOfKeyWords as $value) {
            $tempArray = $this->getAllItemsBasedOnKeyWord($value);
            foreach ($tempArray as $value2) {
                if(!in_array($value2, $listResult, true)){
                    array_push($listResult, $value2);
                }
            }
        }
        
        $uniques = array();
        foreach ($listResult as $obj) {
            $uniques[$obj->discripstion] = $obj;
        }
     
        session_start();
        $_SESSION['searchResult'] = $uniques;
    }
    
    function getAllItemsBasedOnKeyWord($keyword){
        $filename = "../../DAL/DBConstant.php";
        try{
            $command = "select * from items where title like '%".$keyword."%'";
        $dbSetOfserch = (new AccessDatabase($filename))->executeQuery($command);
        } catch (Exception $exc) {
            echo $exc->getMessage();
            return false;
        }
        $array = array();
        
        while ($row = mysqli_fetch_assoc($dbSetOfserch)) {
            $description = $row['description'];
            $date = $row['publishDate'];
            $user = $row['user'];
            $title = $row['title'];
            $price = $row['price'];
            
            $post = new PostModel($description , $user , $date , $title ,$price);
            array_push($array, $post);
        }
        
       
       return $array;
    }
}
