<?php

use function PHPSTORM_META\type;

class Course extends Controller{

   
        function index(){
            
            $course = new Courses();
            if ($_SESSION['USER']['rank'] == 'super' || $_SESSION['USER']['rank'] == 'admin' ) {
                $data = $course->get_all();
            }else{
                $data = $course->find_matching($_SESSION['USER']['id']);
            }

            $this->view('course', ['rows'=> $data]);
        }
    

}