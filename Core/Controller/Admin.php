<?php
/**
 * Created by PhpStorm.
 * User: Mzapeka
 * Date: 17.11.15
 * Time: 22:12
 */

namespace Controller;


use System\Controller;


class Admin extends Controller {
    public function index()
    {
        $this->view->loadAdminPage();
    }

    public function devices(){
        $info = $this->model->getDevices();
        $this->view->devicesView($info);
        //ToDo: make method devices()
    }

    public function newDevice(){
        //ToDo: make method newDevice()
    }

    public function addDevice(){
        //ToDo: make method newDevice()
    }

    public function editDevice(){
        //ToDo: make method editDevice()
    }

    public function deleteDevice(){
        //ToDo: make method deleteDevice()
    }


    public function irRemout(){
        $this->view->irRemoutView();
        //ToDo: make method irRemout()
    }

    public function newIrRemout(){
        //ToDo: make method newIrRemout()
    }

    public function addIrRemout(){
        //ToDo: make method addIrRemout()
    }

    public function editIrRemout(){
        //ToDo: make method editIrRemout()
    }

    public function deleteIrRemout(){
        //ToDo: make method deleteIrRemout()
    }

    public function rooms(){
        $this->view->roomsView();
        //ToDo: make method rooms()
    }

    public function newRoom(){
        //ToDo: make method newRoom()
    }

    public function addRoom(){
        //ToDo: make method addRoom()
    }

    public function editRoom(){
        //ToDo: make method editRoom()
    }

    public function deleteRoom(){
        //ToDo: make method deleteRoom()
    }

} 