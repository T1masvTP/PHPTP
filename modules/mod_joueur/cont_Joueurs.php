<?php

require_once 'modules/mod_joueur/modele_Joueurs.php';   
require_once 'modules/mod_joueur/vue_Joueurs.php';

class ContJoueurs{
    private $vue;
    private $modele; 
    private $action;

    function __construct(){
        $this->vue = new VueJoueurs();
        $this->modele = new ModeleJoueurs();
        if(isset($_GET['action'])) $this->action = $_GET['action'];
        else $this->action = 'bienvenue';

    }

    function initialize(){
          switch ($this->action){
            case "bienvenue":
                $this->bienvenue();
                break;
            case "liste":
                $this->liste();
                break;
            case "details":
                $this->details();
                break;
            case 'ajout' : 
                $this->ajout_Joueur();
                break;
            case 'ajout_joueur' : 
                $this->vue->ajout_Joueur();
                break;
            default: 
                echo 'default';
                break;

            }  
            
    }

    function ajout_Joueur(){
        echo 'test';
        echo $_POST['nom_joueur'];
        if(isset($_POST['nom_joueur']) && isset($_POST['description'])){
            echo 'test2';
            $nom = htmlspecialchars($_POST['nom_joueur']);
            $description = htmlspecialchars($_POST['description']);
            $arr = array('nom' => $nom ,'description' => $description);
            $this->modele->ajoutJoueur($arr);

        }
    
        
    }

    function afficheMenu(){
        $this->vue->menu();
    }

    function liste(){
        $liste = $this->modele->getlist();
        $this->vue->afficheListe($liste);
    }

    function bienvenue(){
        $this->vue->afficheBienvenue();
    }

    function details(){
        $this->vue->afficheDetails($this->modele->getDetails($_GET['id']));
    }

}


?>