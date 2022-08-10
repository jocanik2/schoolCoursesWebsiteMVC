<?php

class Auth
{

    public static function authenticate($row)
    {

        $_SESSION['USER'] = $row;
    }

    public static function logout()
    {

        if (isset($_SESSION['USER'])) {
            unset($_SESSION['USER']);
        }
    }
    public static function is_logged_in()
    {

        if (isset($_SESSION['USER'])) {

            return true;
        }
        return false;
    }

    public static function get_Name(){
       if (self::is_logged_in()){
        return $_SESSION['USER']['first_name']; 
       }else{
        return "User";
       }
    }
}
