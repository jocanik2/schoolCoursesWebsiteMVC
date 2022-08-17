<?php

class Comment extends Controller
{

    public function index()
    {
        $comment = new Comments();
        $commentNewCount = $_POST['commentNewCount'];
        $data = $comment->get_limited($commentNewCount);

        $this->view('comment', ['rows'=>$data]);
    }
}
