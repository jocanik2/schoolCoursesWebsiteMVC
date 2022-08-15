<?php

class Signup extends Controller
{
    function index(){

        $errors = array();

        if (count($_POST)>0) {
            $user = new Users();

            if ($user->validate($_POST)) {
                $arr['firstname'] = $_POST['firstname'];
                $arr['lastname'] = $_POST['lastname'];
                $arr['username'] = $_POST['username'];
                $arr['email'] = $_POST['email'];
                $arr['rank'] = $_POST['rank'];
                $arr['password'] = password_hash($_POST['pwd'], PASSWORD_DEFAULT);

                $user->add($arr);
                $this->redirect('home');
            }else{
                //errors
                $errors = $user->errors;
            }

        }

        $this->view('signup', [
            'errors'=> $errors,
    ]);

    }

    
}
