<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of RegisterViewModel
 *
 * @author yasser
 */
class RegisterViewModel {
    
    
    
    
     private $firstName;
     private $lastName;
     private $emailAddress;
     private $password;
     private $confPassword;
    
    
     function __construct($fn , $ln , $em , $pass , $confpass) {
         
         $this->confPassword = $confpass;
         $this->emailAddress = $em;
         $this->firstName = $fn;
         $this->lastName = $ln;
         $this->password = $pass;
         
     }
             
     function getFirstName(){return $this->firstName;}
     function getLastName(){return $this->lastName;}
     function getEmailAddress(){return $this->emailAddress;}
     function getPassword(){return $this->password;}
     function getConfPass(){return $this->confPassword;}
     function setFirstName($firstname){ $this->firstName = $firstname;}
     function setlastName($lastname){ $this->lastName = $lastname;}
     function setemailAddress($email){ $this->emailAddress = $email;}
     function setPassword($pass){ $this->password= $pass;}
     function setConfPass($confPass){ $this->confPassword= $confPass;}    
    
}
