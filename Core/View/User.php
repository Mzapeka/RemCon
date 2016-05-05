<?php
/**
 * Created by PhpStorm.
 * User: Mzapeka
 * Date: 17.11.15
 * Time: 22:26
 */

namespace View;


use System\View;

class User extends View {


    public function showUserInterface(){
        $this->loadHeader();
        include_once("View/user/userInterface.php");
        $this->loadfooter();
    }

    public function showAdminInterface(){
        $this->loadHeader();
        include_once("View/user/userInterface.php");
        $this->loadfooter();
    }

} 