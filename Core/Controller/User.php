<?php
/**
 * Created by PhpStorm.
 * User: Администратор
 * Date: 05.05.16
 * Time: 12:52
 */

namespace Controller;


use System\Controller;


class User extends Controller {

    function __construct() {
        parent::__construct();
        if ($_SESSION['status'] != 'admin' && $_SESSION['status'] != 'user'){
            header("Refresh:3;url=".MYSITE);
            echo "Вы не являетесь авторизированным пользователем";
            die;
        }
    }

    function index()
    {
        $this->view->showUserInterface();
    }
}