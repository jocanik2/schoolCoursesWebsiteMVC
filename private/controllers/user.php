
<?php


class User extends Controller
{


    function index()
    {

        $user = new Users();

        if (Auth::is_logged_in()) {
            $data = $user->get_all();

            $this->view('user', ['rows' => $data]);
        }
    }

    public function delete(){
        $user = new Users();
        $id = $_POST['delete_id'];
        $user->delete($id);
    }
}
?>