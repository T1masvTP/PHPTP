<?php
require_once 'modules/mod_joueur/cont_Joueurs.php';
class ModJoueurs{
    public $cont;

    function __construct(){
        $this->cont = new ContJoueurs();
        $this->cont->afficheMenu();
        $this->cont->initialize(); 
        
        // if (isset($_GET['action']))$action = $_GET['action'];
        // else $action = 'bienvenue';
            
        // switch ($action){
        //     case "bienvenue":
        //         $this->cont->bienvenue();
        //         break;
        //     case "liste":
        //         $this->cont->liste();
        //         break;
        //     case "details":
        //         $this->cont->details();
        //         break;
        //     default: 
        //         echo 'default';
        //         break;

        //     }  
        }
        
        
    }






?>