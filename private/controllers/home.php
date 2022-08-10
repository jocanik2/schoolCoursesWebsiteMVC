<?php
class Home extends Controller{

    function index(){

        if (!Auth::is_logged_in()) {
            $this->redirect('login');
        }

        
        $user = new User();
        echo $this->view('home');

        // $user->insert($data);
        // $user->update($id, $data);
        // $user->delete($id);



    }   
}