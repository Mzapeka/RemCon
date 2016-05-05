<?php
session_start();
require_once("config.php");
require_once "autoload.php";
//define('MYSITE', 'http://imagecrawler.azurewebsites.net/');

$db = new System\DB("remcon");
$obj = new System\Routing();
$obj::loadPage();