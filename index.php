<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

include('controller/controller.php');


$mainController = new Controller();


if(empty($_SERVER['QUERY_STRING'])) {
    $mainController->homeController();
}

else if(isset($_GET['connexion'])) {
    $mainController->connexionController();
}