<?php

class Users extends Model
{
    protected $table;


    public function validate($DATA){
        $this->errors = array();
        
        if (empty($DATA['firstname']) || !preg_match("/^[a-zA-z]+$/",$DATA['firstname'] )) {
            $this->errors[] = "First name can be only letters!";
            # code...
        }
        if (empty($DATA['lastname']) || !preg_match("/^[a-zA-z]+$/",$DATA['lastname'] )) {
            $this->errors[] = "Last name can be only letters!";
            # code...
        }
        if (empty($DATA['pwd']) || empty($DATA['pwdrepeat']) || $DATA['pwd'] != $DATA['pwdrepeat']) {
            $this->errors[] = "The passwords do not match";
            # code...
        }
        if (count($this->errors)==0) {
            return true;
            # code...
        }

        return false;
    }



    public function insert($array){

        $conn = $this->connect();
        $sql = "INSERT INTO USERS(first_name, last_name, username, email, rank, password) VALUES (?,?,?,?,?,?);";
        $stmt = mysqli_stmt_init($conn);

        if (!mysqli_stmt_prepare($stmt, $sql)) {
            $this->errors[] = "Statement preparing failed.";
            exit();
        }
        
        mysqli_stmt_bind_param($stmt, 'ssssss', $array['firstname'], $array['lastname'],$array['username'], 
                                $array['email'], $array['rank'], $array['password']);
        mysqli_stmt_execute($stmt);
        mysqli_stmt_close($stmt);


    }

     public function find($email)
    {
        $conn = $this->connect();
        $sql = "SELECT * from users where email = ?";
        $stmt = mysqli_stmt_init($conn);

        if (!mysqli_stmt_prepare($stmt, $sql)) {
            $this->errors[] = "Statement preparing failed.";
            exit();
        }
        
        mysqli_stmt_bind_param($stmt, 's', $email);
        mysqli_stmt_execute($stmt);

        $resultData = mysqli_stmt_get_result($stmt);

        if ($row = mysqli_fetch_assoc($resultData)) {
            return $row;
        }else{
            $result = false;
            return $result;
        }

        mysqli_stmt_close($stmt);

    }
    
}

