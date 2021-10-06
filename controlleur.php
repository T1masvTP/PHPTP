<?php
require_once("vue.php");
require_once("modele.php");
    class Controlleur{
        
        private $vue;
        private $modele; 
        private $action;

        function __construct(){
            $this->vue = new Vue();
            $this->modele = new Modele();
            if(isset($_GET['action'])) $this->action = $_GET['action'];
            else $this->action = 'bienvenue';
    
        }

        function liste(){
            $liste = $this->modele->getlist();
            $this->vue->afficheListe($liste);
        }

        function details(){
            $this->vue->afficheDetails($this->modele->getDetails($_GET['id']));
        }

        function initialize (){
            $this->vue->menu();

            switch ($this->action){
                case "bienvenue":
                    $this->vue->affichebien();
                    break;
                case "liste":
                    $this->liste();
                    break;
                case "details":
                    $this->details();
                    break;

            }
        }
    }

  
?>