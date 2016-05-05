<?php
/**
 * Created by PhpStorm.
 * User: Mzapeka
 * Date: 17.11.15
 * Time: 22:23
 */

namespace Model;


class Main {

    public function authAction(){
        global $db;
        $request = ["Login" => $_POST['login'], "Pass" => $_POST['pass']];
        $user = $db->select("user", false, $request);
        if ($user){
            $_SESSION['auth'] = $user[0];
            $_SESSION['status'] = $user[3];
            if ($_POST['rememberMe'] == "on"){
                setcookie("auth", $user[0], time()+1200, '/');
                setcookie("status", $user[3], time()+1200, '/');
            }
            $result = $user[3];
        }
        else{
            $result = false;
        }
        Return($result);
    }


    function exitAuth(){
        session_destroy();
        if ($_COOKIE['auth']){
            setcookie("auth", $_COOKIE['auth'], time()-120, '/');
            setcookie("status", $_COOKIE['status'], time()-120, '/');
        }
    }

}

