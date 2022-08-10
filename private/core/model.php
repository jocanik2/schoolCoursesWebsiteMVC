<?php

class Model extends Database
{
    public $errors = array();

    public function __construct()
    {
        if (property_exists($this,"table")) {
            $this->table = strtolower(get_class($this));
           
        }

        
    }

    public function get_all($data = array())
    {
                $conn = $this->connect();
                
                $data = $conn-> query("SELECT * FROM $this->table") -> fetch_all(MYSQLI_ASSOC);
                if ($data) {
                    $conn->close();
                    return $data;
                }
                $conn->close();
                return false;


    }
    
}
