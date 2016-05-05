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
    public function getIrRemout(){
        global $db;
        $allRemout = $db->select('irRemout');
        return $allRemout;
        //ToDo: make method getDevices()
    }

}

