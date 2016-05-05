<?php
/**
 * Created by PhpStorm.
 * User: Mzapeka
 * Date: 17.11.15
 * Time: 22:23
 */

namespace Model;


class Admin {
    public function getDevices(){
        global $db;
        $allDevices = $db->select('devices');
        return $allDevices;
        //ToDo: make method getDevices()
    }

}

