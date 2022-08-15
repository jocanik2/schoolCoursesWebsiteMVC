<?php

class Courses extends Model


{
    protected $table;

    public function find_matching($id)
    {
        $conn = $this->connect();
        $sql = "SELECT * from courses c left join enrolled e on (e.course_id = c.course_id) WHERE e.user_id = ?;";
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
        } else {
            $result = false;
            return $result;
        }

        mysqli_stmt_close($stmt);
    }

    public function validate($DATA)
    {
        $this->errors = array();

        if (empty($DATA['name'])) {
            $this->errors[] = "Name can't be empty!";
            # code...
        }
        if (empty($DATA['description'])) {
            $this->errors[] = "Description can't be empty!";
            # code...
        }
        if (empty($DATA['technology'])) {
            $this->errors[] = "Technology can't be empty!";
            # code...
        }
        if (empty($DATA['semester'])) {
            $this->errors[] = "Semester can't be empty!";
            # code...
        }

        if (count($this->errors) == 0) {
            return true;
            # code...
        }

        return false;
    }

    public function find($id)
    {
        $conn = $this->connect();
        $sql = "SELECT * from courses where course_id = ?";
        $stmt = mysqli_stmt_init($conn);

        if (!mysqli_stmt_prepare($stmt, $sql)) {
            $this->errors[] = "Statement preparing failed.";
            exit();
        }

        mysqli_stmt_bind_param($stmt, 'i', $id);
        mysqli_stmt_execute($stmt);

        $resultData = mysqli_stmt_get_result($stmt);

        if ($row = mysqli_fetch_assoc($resultData)) {
            return $row;
        } else {
            $result = false;
            return $result;
        }

        mysqli_stmt_close($stmt);
    }


    public function add($array)
    {

        $conn = $this->connect();
        $sql = "INSERT INTO COURSES(name, description, technology, semester, price) VALUES (?,?,?,?,?);";
        $stmt = mysqli_stmt_init($conn);

        if (!mysqli_stmt_prepare($stmt, $sql)) {
            $this->errors[] = "Statement preparing failed.";
            exit();
        }

        mysqli_stmt_bind_param(
            $stmt,
            'ssssi',
            $array['name'],
            $array['description'],
            $array['technology'],
            $array['semester'],
            $array['price']

        );
        mysqli_stmt_execute($stmt);
        mysqli_stmt_close($stmt);
    }

    public function delete($id)
    {

        $conn = $this->connect();
        $sql = "DELETE from $this->table where course_id = ?;";
        $stmt = mysqli_stmt_init($conn);

        if (!mysqli_stmt_prepare($stmt, $sql)) {
            $this->errors[] = "Statement preparing failed.";
            exit();
        }

        mysqli_stmt_bind_param(
            $stmt,
            'i',
            $id
        );
        mysqli_stmt_execute($stmt);
        mysqli_stmt_close($stmt);
    }

    public function edit($id, $price)
    {

        $conn = $this->connect();
        $sql = "UPDATE courses SET price = ?  WHERE course_id = ?";
        $stmt = mysqli_stmt_init($conn);

        if (!mysqli_stmt_prepare($stmt, $sql)) {
            $this->errors[] = "Statement preparing failed.";
            exit();
        }

        mysqli_stmt_bind_param(
            $stmt,
            'ii',
            $price,
            $id
        );
        mysqli_stmt_execute($stmt);
        mysqli_stmt_close($stmt);
    }


}
