<?php

$it = new FilesystemIterator('modules');
foreach ($it as $fileinfo) {
    echo '<a href="index.php?module='.$fileinfo->getFilename().'&action=bienvenue">'.$fileinfo->getFilename(). "</a> <br/>";
}

if (isset($_GET['module'])){
  switch($_GET['module']){
    case 'mod_joueur':
    require_once 'modules/mod_joueur/mod_joueurs.php';
      $modJ = new ModJoueurs();
      break;
    case 'mod_equipe':
    require_once 'modules/mod_equipe/mod_equipes.php';
      $modE = new ModEquipes();
      break;
    default :
      die ("Pas les droits ou n'existe pas");
      break;
  }

}



?>
