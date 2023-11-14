<?php

class Config {
    //set the properties for connection details
    private $servername = "localhost";
    private $username = "root";
    private $password = ""; //MAMP - root
    private $database = "first_database";

    protected $conn;

    //create a constructor to automatically connect to the databaseg
    public function __construct() {
        $conn = new mysqli($this->servername, $this->username, $this->password, $this->database);

        if($conn->connect_error) {
            die("Connect Error: " . $conn->connect_error);
        }
        else {
            $this->conn = $conn;
        }
    }
}