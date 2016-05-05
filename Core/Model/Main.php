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
        $request = ["mail" => $_POST['login'], "pass" => $_POST['password']];
        $user = $db->select("users", false, $request);
        if ($user){
            $result = $user[0]['idUser'];
        }
        else{
            $result = false;
        }
        Return($result);
    }
    function getUserId(){
        global $db;
        $request = ["mail" => $_POST['login'], "pass" => $_POST['password']];
        $user = $db->select("users", false, $request);
        if ($user){
            $result = $user[0]['idUser'];
        }
        else{
            $result = false;
        }
        Return($result);
    }

    function userAuth($userId){
        $_SESSION['auth'] = $userId;
        $_SESSION['status'] = 'user';
        if ($_POST['rememberMe'] == "on"){
            setcookie("auth", $userId, time()+1200, '/');
            setcookie("status", 'user', time()+1200, '/');
        }
    }

    function exitAuth(){
        session_destroy();
        if ($_COOKIE['auth']){
            setcookie("auth", $_COOKIE['auth'], time()-120, '/');
            setcookie("status", $_COOKIE['status'], time()-120, '/');
        }
    }

}

