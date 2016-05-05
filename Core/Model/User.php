<?php
/**
 * Created by PhpStorm.
 * User: Mzapeka
 * Date: 17.11.15
 * Time: 22:23
 */

namespace Model;

use phpMQTT;

class User {


    function exitAuth(){
        session_destroy();
        if ($_COOKIE['auth']){
            setcookie("auth", $_COOKIE['auth'], time()-120, '/');
            setcookie("status", $_COOKIE['status'], time()-120, '/');
        }
    }

    private function sendMqttMessage($topic, $message){
        require_once ('Core/System/phpMQTT/phpMQTT.php');
        $mqtt = new phpMQTT(MQTT_SERVER, MQTT_PORT, MQTT_IDCLIENT); //Change client name to something unique
        if ($mqtt->connect(true, NULL, MQTT_LOGIN, MQTT_PASS)) {
            //$mqtt->publish("bluerhinos/phpMQTT/examples/publishtest","Hello World! at ".date("r"),0);
            $mqtt->publish($topic,$message,0);
            $mqtt->close();
        }
    }

    public function sendCommandAction($command){

        if (!$command){
            return 1;
        }

        switch ($command){
            case "2":
                $this->sendMqttMessage('/IRAirCon/1/2', '0');
                break;
            case "1":
                $this->sendMqttMessage('/IRAirCon/1/2', '1');
                break;
        }

        echo "Команда: ".$command." принята!";

    }

}

