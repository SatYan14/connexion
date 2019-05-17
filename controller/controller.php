<?php

require('model/connexionManager.php');
require('model/verifyManager.php');

class Controller
{
    private $db;

    private $connexionManager;

    private $verifyManager;

    public function __construct()
    {
        $this->db = connexionManager::getDataBaseConnexion();
        $this->connexionManager = new connexionManager($this->db);
        $this->verifyManager = new verifyManager($this->db);
    }

    public function homeController() 
    {
        return include('view/home.php');
    }

    public function connexionController()
    {
        if(!empty($_POST['password']) && !empty($_POST['login']) && isset($_POST['login']) && isset($_POST['password'])) {
            $result = $this->verifyManager->verifyConnexion($_POST['login'], $_POST['password']);
            if ($result == false) {
                echo 'Mauvais identifiant ou mot de passe rentré';
            } else {
                return include('view/nouvellePage.php');
            }  
        }
    }
}