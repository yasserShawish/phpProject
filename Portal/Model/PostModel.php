<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class PostModel{
    
    var $discripstion;
    var $user;
    var $date;
    var $title;
    var $price;
    
    
    function __construct($discription , $user , $date , $title , $price){
        $this->discripstion = $discription;
        $this->user = $user;
        $this->date = $date;
        $this->title = $title;
        $this->price = $price;
    }
    
    public function getDescription(){
        return $this->discripstion;
    }
    
    public function getUser(){
        return $this->user;
    }
    
     public function getDate(){
        return $this->date;
    }
    
     public function getTitle(){
        return $this->title;
    }
    
    
    public function __toString() {
        return trim($this->discripstion);
    }
    
    
}