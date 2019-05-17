<?php

class verifyManager 
{
    private $db;

    public function __construct()
    {
        $this->db = connexionManager::getDataBaseConnexion();
    }

    public function verifyConnexion($login, $password, $table='users')
    {
        $req = $this->db->query("SELECT * FROM $table WHERE login ='" . $login . "'");
		$req->execute();
		$req->setFetchMode(PDO::FETCH_CLASS | PDO::FETCH_PROPS_LATE, $table);
        $data = $req->fetch();
        if($data == false) {
            return $data;
        } 
        return password_verify($password, $data['password']);
    }
}