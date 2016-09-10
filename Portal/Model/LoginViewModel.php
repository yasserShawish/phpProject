<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of LoginViewModel
 *
 * @author yasser
 */
class LoginViewModel {
    
    var $userName;
    var $userPassword;
    
    function __construct($username , $password) {        
        $this->setUserName($username);
        $this->setUserPassword($password);
    }
            
    function getUserName(){
        return $this->userName;
    }
    
    function setUserName($username){
        $this->userName = $username;
    }
    
    function getUserPassword(){
       return $this->userPassword;
    }
    function setUserPassword($password){
        $this->userPassword = $password ;
    }
    
}
