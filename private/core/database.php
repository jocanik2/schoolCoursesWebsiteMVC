<?php

class Database
{
    private $servername;
    private $username;
    private $password;
    private $dbname;

    protected function connect(){

        $this->servername = "localhost";
        $this->username = "root";
        $this->password = "";
        $this->dbname = "school_db";

        $conn = new mysqli($this->servername, $this->username, 
        $this->password, $this->dbname);

       if(!$conn){
        die("Could not connect to db.");
       }else{
        return $conn;
       }

    }

    protected function run(){

    }

    public function query(){

    }
}
