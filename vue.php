<?php
class Vue {

	public function __construct(){

	}

	function menu(){
		echo '<a href="index.php?action=bienvenue">Bienvenue</a>';
		echo '</br>';
		echo '<a href="index.php?action=liste">Afficher liste</a>';
		echo '</br>';
	} 

	function afficheBien(){
		echo 'Bienvenue';
	}

	function afficheDetails($arr){ 
		foreach ($arr as $element) {
			echo $element['description'];
		}		
	}

	public function afficheListe($arr){
		foreach ($arr as $element){
			$id = $element['id'];
			$str = $element['id'].$element['nom'];
			echo "<a href= index.php?action=details&id=".$id.">".$str."</a>";
			echo "</br>";	
		
		} 
	}
}

//dutinfopw201610
//mdp : tanehyhu 
?>
