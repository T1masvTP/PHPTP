<?php

require_once 'modules/mod_equipe/modele_equipes.php';
require_once 'modules/mod_equipe/vue_equipes.php';

class ControleurEquipes {
    private $action;
    private $modele;
    private $vue;

    function __construct(){
        $this->vue = new VueEquipes();
        $this->modele = new ModeleEquipes();
        if(isset($_GET['action'])) $this->action = $_GET['action'];
        else $this->action = 'acceuil';

    }

    function initialize(){
        $this->afficherMenu();
        switch($this->action){
         case 'liste' :
            $this->afficherEquipes();
            break;
        case 'details':
            $this->afficherDetails();
            break;
        default :
            echo 'Acceuil';
            break;
        }
    }
    function afficherDetails(){
        if(isset($_GET['id']))$this->vue->afficherdetails($this->modele->getDetails($_GET['id']));
    }
    function afficherMenu(){
        $this->vue->afficherMenu();
    }
    function afficherEquipes(){
        $this->vue->afficherListeEquipes($this->modele->getListeEquipe());
    }


}





?>
