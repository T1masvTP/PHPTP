<?php
require_once 'config.php';
Class ModeleEquipes extends Connexion{
    function getListeEquipe(){
        parent::initConnexion();
        $querry = parent::$bdd->prepare("SELECT * FROM Equipes");
        $querry->execute();
        $data = $querry->fetchall();
        return $data;  
    }

    function getDetails($id){
        parent::initConnexion();
        $querry = parent::$bdd->prepare("SELECT * FROM Equipes WHERE id = ? ");
        $querry->execute(array($id));
        $data = $querry->fetchall();
        return $data;  
    }

}
?>