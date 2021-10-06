<?php
require_once 'modules/mod_equipe/cont_equipes.php';
class ModEquipes{

    private $controleur; 

    function __construct(){
        $this->controleur = new ControleurEquipes();
        $this->controleur->initialize();

    }

}

?>