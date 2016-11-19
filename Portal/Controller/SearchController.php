<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

include '../../BLL/DoSearch.php';
include '../../BLL/RedirectTo.php';


if($_GET){
    echo 'here';
    if(isset($_GET['searchKey'])){
         new DoSearch($_GET['searchKey']);
         RedirectTo::page("../View/Search/SearchResult.php");
         echo 'there';
    }
}