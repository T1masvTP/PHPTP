<?php
Class VueEquipes{

    function afficherMenu(){
        echo '<a href="index.php?module=mod_equipe">Acceuil</a>';
		echo '</br>';
        echo '<a href="index.php?module=mod_equipe&action=liste">Liste</a>';
		echo '</br>';
    }

    function afficherListeEquipes($arr){
        foreach ($arr as $element){
			$id = $element['id'];
			$str = $element['id'].$element['nom'];
			echo "<a href= index.php?module=mod_equipe&action=details&id=".$id.">".$str."</a>";
			echo "</br>";	
		
		} 
    }

    function afficherdetails($arr){
        foreach ($arr as $element){
            $str = $element['nom']." ".$element['annee_creation']." ".$element['description']." ".$element['pays'];
            echo $str;
        }
    }

}
?>