<?php
/**
 * Created by PhpStorm.
 * User: Mzapeka
 * Date: 17.11.15
 * Time: 22:26
 */

namespace View;


use System\View;

class Main extends View {

    public function loadMainPage(){
        $this->loadHeader();
        $this->loadMenu();
        $this->loadfooter();
    }

    public function showUserInterface(){
        $this->loadHeader();
        include_once("View/main/userInterface.php");
        $this->loadfooter();
    }

    public function showAdminInterface(){
        $this->loadHeader();
        include_once("View/main/userInterface.php");
        $this->loadfooter();
    }

    public function showPassError(){
        $this->loadHeader();
        include_once("View/main/passError.php");
        $this->loadfooter();
    }

} 