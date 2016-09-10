<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of DoRegister
 *
 * @author yasser
 */
include '../../DAL/AccessDatabase.php';

class DoRegister {

    function __construct($userRegister) {


        $success = $this->addRegisterInfo($userRegister);
       
        if ($success) {
            session_start();
            $_SESSION['username'] = $userRegister->getEmailAddress();
            
            RedirectTo::page("HomeController.php");
        } else
            echo "fuck you :)";
    }

    function addRegisterInfo($userRegister) {

        $filename = "../../DAL/DBConstant.php";

        try {
            (new AccessDatabase($filename))->executeInsertQuery("INSERT INTO user_info(username, password, email) VALUES (CONCAT('" . $userRegister->getFirstName() . "','" . $userRegister->getLastName() . "'),'" . $userRegister->getPassword() . "','" . $userRegister->getEmailAddress() . "');");
        } catch (Exception $exc) {
            echo $exc->getMessage();
            return false;
        }
        return true;
    }

}
