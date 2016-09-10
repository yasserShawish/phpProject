<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
include_once '../Model/LoginViewModel.php';
include_once '../../BLL/RedirectTo.php';
include_once '../../BLL/DoLogin.php';


if ($_POST) {

    if (isset($_POST['submit']) AND $_POST['submit'] == "Login") {

        $name = $_POST["username"];
        $pass = $_POST["password"];

        $userLogin = new LoginViewModel($name, $pass);

        new DoLogin($userLogin);
    }
}

