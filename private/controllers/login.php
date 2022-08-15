<?php

class Login extends Controller
{
    function index()
    {

        $errors = array();

        if (count($_POST) > 0) {

            $user = new Users();
            if ($row = $user->find($_POST['email_login'])) {
                if (password_verify($_POST['pwd_login'], $row['password'])) {
                    Auth::authenticate($row);
                    $this->redirect('home');
                }
            }

            $errors['email'] = "Wrong email or password";
        }


        $this->view('login', [
            'errors' => $errors,
        ]);

    }

    function delete(){
        if ($_SESSION['USER']['rank'] == 'super' || $_SESSION['USER']['rank'] == 'admin') {
            $user = new Users();

        }else{

            
        }
    }
}
