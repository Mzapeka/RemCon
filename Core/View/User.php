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


    public function showUserInterface($data){
        $this->loadHeader();
        $this->showSensorData($data);
        include_once("View/user/userInterface.php");
        $this->loadfooter();
    }

    private function showSensorData($data){
        include_once("View/user/showsensordata.php");
    }

    public function showAdminInterface(){
        $this->loadHeader();
        include_once("View/user/userInterface.php");
        $this->loadfooter();
    }

} 