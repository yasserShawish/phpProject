<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
include_once '../../BLL/RedirectTo.php';
session_start(); 
session_destroy();
RedirectTo::page("HomeController.php");