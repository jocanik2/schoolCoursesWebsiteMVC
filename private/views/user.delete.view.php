<?php

require "../models/Users.php";

if (isset($_POST['delete_id'])) {
    echo "Entered";
    $user = new Users();
    $id = $_POST['delete_id'];
    $user->delete($id);

}