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
    
    var $email;
    var $userPassword;
    
    function __construct($email , $password) {        
        $this->setEmail($email);
        $this->setUserPassword($password);
    }
            
    function getEmail(){
        return $this->email;
    }
    
    function setEmail($email){
        $this->email = $email;
    }
    
    function getUserPassword(){
       return $this->userPassword;
    }
    function setUserPassword($password){
        $this->userPassword = $password ;
    }
    
}
