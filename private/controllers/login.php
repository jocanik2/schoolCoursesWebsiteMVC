<?php

class Login extends Controller
{
    function index()
    {

        $errors = array();

        if (count($_POST) > 0) {

            $user = new User();
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
}
