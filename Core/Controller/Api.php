<?php
/**
 * Created by PhpStorm.
 * User: Mzapeka
 * Date: 17.11.15
 * Time: 22:12
 */

namespace Controller;


use System\Controller;



class Api extends Controller {
/*    function __construct() {
        parent::__construct();
        if ($_SESSION['status'] != 'admin'){
            header("Refresh:3;url=".MYSITE);
            echo "Вы не являетесь администратором";
            die;
        }
    }*/

    public function index()
    {
        header("Refresh:3;url=".MYSITE."user");
        echo "This is RemCon API";
    }

    public function sendData()
    {
        global $db;
        $tableName = 'devices';
        $deviceArray = explode("/", $_POST['device']);
        $deviceId = $deviceArray['0'];
        $moduleId = $deviceArray['1'];

        if(!$db->select($tableName, "idDevice", ['idDevice' => $deviceId])){
            die;
        }

        $array = json_decode($_POST['data'], true);
        foreach ($array as $key => $value){
            $data = [
                'deviceId' => $deviceId,
                'param_Name' => $key,
                'value' => floatval($value)
            ];
            $db->insert('dataBank', $data);
            //$data = $data.$key." => ".$value."\r\n";
        }
        //file_put_contents("1.txt", $_POST['device'].': '.$data, FILE_APPEND);
    }



} 