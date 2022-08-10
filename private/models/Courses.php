<?php

class Courses extends Model 


{
    protected $table;
    
    public function find_matching($id)
    {
        $conn = $this->connect();
        $sql = "SELECT c.name as name, c.description as description, c.technology as technology, c.semester as semester from courses c left join enrolled e on (e.course_id = c.course_id) WHERE e.user_id = ?;";
        $stmt = mysqli_stmt_init($conn);

        if (!mysqli_stmt_prepare($stmt, $sql)) {
            $this->errors[] = "Statement preparing failed.";
            exit();
        }
        
        mysqli_stmt_bind_param($stmt, 'i', $id);
        mysqli_stmt_execute($stmt);

        $resultData = mysqli_stmt_get_result($stmt);

        if ($data = mysqli_fetch_all($resultData,  MYSQLI_ASSOC)) {
            return $data;
        }else{
            $result = false;
            return $result;
        }

        mysqli_stmt_close($stmt);

    }
    
}
