<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of DoLogin
 *
 * @author yasser
 */
include '../../DAL/AccessDatabase.php';

class DoLogin {

    var $username ;
    function __construct($userLogin) {

/* this is ahmad just for testing */
        $valid = $this->checkLoginInfo($userLogin);

        if ($valid) {
            session_start();
            $_SESSION['username'] = $this->username ;
            
            $_SESSION['LoginMessage'] = '';
            RedirectTo::page("HomeController.php");
        } else {

            session_start();
            $_SESSION['LoginMessage'] = "user name or password is wrong ,,,";
            RedirectTo::page("../View/Account/login.php");
        }
    }

    function checkLoginInfo($userLogin) {

        $filename = "../../DAL/DBConstant.php";

        try {
            $db_result = (new AccessDatabase($filename))->executeQuery("select  first_name,email , password from user_info where email = '" . $userLogin->getEmail() . "' and password = '" . $userLogin->getUserPassword() . "';");
            $this->username = mysqli_fetch_row( $db_result )[0];
            
            if (mysqli_num_rows($db_result) == 0) {
                
                return false;
            }
        } catch (Exception $exc) {
            echo $exc->getMessage();
            return false;
        }
        return true;
    }

}
