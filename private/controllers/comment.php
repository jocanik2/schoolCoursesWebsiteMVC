<?php

class Comment extends Controller{

    public function index()
    {

        $comment = new Comments();
        $data = $comment->get_limited();
       
        $this->view('home', ['rows' => $data]);
    }
}