<?php
require_once 'config.php';

class ModeleJoueurs extends Connexion{

    function getlist(){
        parent::initConnexion();
        $query = parent::$bdd->prepare("SELECT * FROM Joueurs");
        $query->execute();
        $tab = $query->fetchall();
       return $tab;
    }

    function getDetails($id){
        parent::initConnexion();
        $query = parent::$bdd->prepare("SELECT description FROM Joueurs WHERE id = ?");
        $query->execute(array($id));
        $tab = $query->fetchall();
       return $tab;
    }

    function ajoutJoueur($arr){

        parent::initConnexion();
        $request = parent::$bdd->prepare('INSERT INTO Joueurs(nom ,description) VALUES(?,?)');
        $request->execute(array($arr['nom'],$arr['description']));
        if(!$request){
            echo 'ca marche pas';
        }
     }




}
?>
