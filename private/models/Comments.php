<?php

class Comments extends Model{

    protected $table;

    public function get_limited($limit){

        $conn = $this->connect();
                
        $data = $conn-> query("SELECT * FROM comments LIMIT $limit;") -> fetch_all(MYSQLI_ASSOC);
        if ($data) {
            $conn->close();
            return $data;
        }
        $conn->close();
        return false;

    }


}