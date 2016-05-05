<?php
/**
 * Created by PhpStorm.
 * User: Mzapeka
 * Date: 17.11.15
 * Time: 22:12
 */

namespace Controller;


use System\Controller;


class Main extends Controller {
    public function index()
    {
        if ($_SESSION['status'] == ADMIN || $_SESSION['status'] == USER){
            header ("Location:".MYSITE."user/");
        }
        else {
            $this->view->loadMainPage();
        }

    }

    public function auth(){
        switch ($this->model->authAction()){
            case 'user':
                header ("Location:".MYSITE."user/");
                //$this->view->showUserInterface();
                break;
            case 'admin':
                header ("Location:".MYSITE."user/");
                //$this->view->showAdminInterface();
                break;
            default:
                header("Refresh:3;url=".MYSITE);
                $this->view->showPassError();
                break;
        }
    }

} 