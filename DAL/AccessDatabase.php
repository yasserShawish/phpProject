<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of AccessDatabase
 *
 * @author yasser
 */
class AccessDatabase {

    private $host;
    private $password;
    private $username;
    private $databaseName;
    private $con;

    function __construct($filename) {

        if (is_file($filename))
            include "DBConstant.php";
        else
            throw new Exception("Can't Connect DB {constractor AccessDatabase.php}");

        $this->databaseName = $database;
        $this->host = $host;
        $this->password = $password;
        $this->username = $user;
    }

    private function connect() {
        $this->con = mysqli_connect($this->host, $this->username, $this->password, $this->databaseName);

        if (mysqli_connect_errno()) {
            echo "Failed to connect to MySQL: " . mysqli_connect_error();
        }
        if (!$this->con) {
            throw new Exception("Error : can't connect ,,,");
        }

        if (!mysqli_select_db($this->con, $this->databaseName))
            throw new Exception("Error : No dataBase selected ,,, ");
    }

    public function executeQuery($cmd) {
        $this->connect();
        echo $cmd."HII<br>";
        if (!( $result = mysqli_query($this->con, $cmd) )) {
            print( "Could not execute query! <br />");
            die(mysqli_error());
        }
        $this->close_connection();

        return $result;
    }

    private function close_connection() {
        mysqli_close($this->con);
    }

    public function executeInsertQuery($cmd) {
        $this->connect();

        
        
        try {
            if (mysqli_query($this->con, $cmd)) {
                return true;
            } else{
                echo "Error: " . $cmd . "<br>" . mysqli_error($this->con);
            
                    return false;
            }
        } catch (Exception $ex) {
            print( "Could not execute query! <br />");
            die(mysqli_error());
        }
        $this->close_connection();
    }

}
