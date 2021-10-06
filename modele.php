<?php
    require_once 'config.php';
    class Modele extends Connexion {

        

        function getlist(){
            parent::initConnexion();
            $querry = parent::$bdd->prepare("SELECT * FROM Joueurs");
            $querry->execute();
            $tab = $querry->fetchall(); 
           return $tab;
        }

        function getDetails($id){
            parent::initConnexion();
            $querry = parent::$bdd->prepare("SELECT description FROM Joueurs WHERE id = ?");
            $querry->execute(array($id));
            $tab = $querry->fetchall(); 
           return $tab;
        }
    
    }

?>