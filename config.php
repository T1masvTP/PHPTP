<?php
class Connexion{

    protected static $bdd;

    public static function initConnexion(){
        try {
            //$dns ='mysql:host=database-etudiants.iut.univ-paris8.fr;dbname=dutinfopw201610;charset=utf8';
            // $user = 'dutinfopw201610';
            // $password = 'tanehyhu';
            $dns ='mysql:host=localhost;dbname=phpcours;charset=utf8';
            $user = 'root';
            $password = '';
            self::$bdd = new PDO($dns,$user,$password); //Connexion a la Base de Données
        } catch (Exception $e) {
            die('Error : ' . $e->getMessage());
        }
    }
}

?>
