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

    public function addNewCommand(){
        $tableName = 'irRemout';
        global $db;

        // запросы на добавление в базу
        $values = [
            'idDevice' => $_POST['idRemout'],
            'idModule' => $_POST['idModule'],
            'name' => $_POST['name'],
            'mode' => $_POST['mode'],
            'tempr' => $_POST['tempr'],
            'zaslonka' => $_POST['zasl'],
            'wind' => $_POST['vent'],
            'turbo' => $_POST['turbo'],
            'value' => $_POST['val']
        ];
        $lastID = $db->insert($tableName, $values);
        if($lastID[0]){
            return false;
        }
        return true;
    }
}

