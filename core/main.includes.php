<?php

ini_set('display_errors', 1);

ob_start();
session_start();

$_SESSION[@usuario] = "Tarcio Lima";
    
define("ROOT", $_SERVER['DOCUMENT_ROOT']);
define("ROOT_LOCAL", "http://" . $_SERVER['SERVER_NAME'] . "/");
include_once "database.php";
include_once "routes.php";
include_once "controller/AppController.php";

