<?php

use function PHPSTORM_META\type;

class Course extends Controller
{


    function index()
    {

        $course = new Courses();

        if (Auth::isAdmin()) {
            $data = $course->get_all();
        } else {
            $data = $course->find_matching($_SESSION['USER']['id']);
        }

        $this->view('course', ['rows' => $data]);
    }

    public function add()
    {
        $errors = array();

        if (count($_POST)>0) {
            
            $course = new Courses();

            if ($course->validate($_POST)) {
                $arr['name'] = $_POST['name'];
                $arr['description'] = $_POST['description'];
                $arr['technology'] = $_POST['technology'];
                $arr['semester'] = $_POST['semester'];
                $arr['price'] = $_POST['price'];


                $course->add($arr);
                $this->redirect('course');
            }else{
                //errors
                $errors = $course->errors;
            }

        }

        $this->view('course.add', [
            'errors'=> $errors,
         ]);

    
     }      

     public function delete($id = null)
	{
		// code...
		if(!Auth::is_logged_in())
		{
			$this->redirect('login');
		}

		$course = new Courses();

		$errors = array();

		if(count($_POST) > 0)
 		{
 
 			$course->delete($id);
 			$this->redirect('course');
 		 
 		}

 		$row = $course->find($id);

		$this->view('course.delete',[
			'row'=>$row,
		]);
	}
    

    public function edit($id = null)
	{
		// code...
		if(!Auth::is_logged_in())
		{
			$this->redirect('login');
		}

		$course = new Courses();

		$errors = array();

		if(count($_POST) > 0)
 		{
            $price = $_POST['new_price'];
            
 			$course->edit($id, $price);
 			$this->redirect('course');
 		 
 		}

 		$row = $course->find($id);

		$this->view('course.edit',[
			'row'=>$row,
		]);
	}
    

}

