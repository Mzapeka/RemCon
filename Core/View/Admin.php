<?php
/**
 * Created by PhpStorm.
 * User: Mzapeka
 * Date: 17.11.15
 * Time: 22:26
 */

namespace View;


use System\View;

class Admin extends View {

    public function loadAdminPage(){
        $this->loadHeader();
        include_once("View/admin/startInterface.php");
        $this->loadfooter();
    }

    public function devicesView($info){
        $this->loadHeader();
        include_once("View/admin/devicesView.php");
        $this->loadfooter();
    }

    public function newDeviceView(){
        $this->loadHeader();
        include_once("View/admin/newDeviceView.php");
        $this->loadfooter();
    }

    public function roomsView(){
        $this->loadHeader();
        include_once("View/admin/roomsView.php");
        $this->loadfooter();
    }

    public function newRoomView(){
        $this->loadHeader();
        include_once("View/admin/newRoomView.php");
        $this->loadfooter();
    }

    public function irRemoutView($info){
        $this->loadHeader();
        include_once("View/admin/irRemoutView.php");
        $this->loadfooter();
    }

    public function newIrRemoutView(){
        $this->loadHeader();
        include_once("View/admin/newIrRemoutView.php");
        $this->loadfooter();
    }

} 