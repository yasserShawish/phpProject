<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
include_once '../Model/RegisterViewModel.php';
include_once '../../BLL/RedirectTo.php';
include_once '../../BLL/DoRegister.php';


if ($_POST) {

    if (isset($_POST['submit']) AND $_POST['submit'] == "Register") {

        $fname = $_POST["fname"];
        $lname = $_POST["lname"];
        $email = $_POST["email"];
        $pass = $_POST["pass"];
        $confpass = $_POST["confPass"];

        echo $fname." ".$lname." ".$email." ". $pass ." ". $confpass;
        $userRegister = new RegisterViewModel($fname,$lname,$email, $pass , $confpass);

        new DoRegister($userRegister);
    }
}

