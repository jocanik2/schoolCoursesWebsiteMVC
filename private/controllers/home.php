<?php
class Home extends Controller{

    function index(){

        if (!Auth::is_logged_in()) {
            $this->redirect('login');
        }
        $user = new Users();
        echo $this->view('home');



    }   
}