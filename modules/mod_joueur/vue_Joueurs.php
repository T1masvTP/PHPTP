<?php
class VueJoueurs{

	function menu(){
		echo '<a href="index.php?module=mod_joueur&action=bienvenue">Bienvenue</a>';
		echo '</br>';
		echo '<a href="index.php?module=mod_joueur&action=liste">Afficher liste</a>';
		echo '</br>';
		echo '<a href="index.php?module=mod_joueur&action=ajout_joueur">Ajouter un Joueur</a>';
		echo '</br>';
	}

	function ajout_Joueur(){
		// echo '
		// <form role="form" method="POST" action="index.php?module=mod_joueur&action=ajout">
		// <div class="form-group row">
		//   <label for="nom_joueur" class="col-sm-2 col-form-label">Nom du joueur</label>
		//   <div class="col-sm-10">
		// 	<input type="text" class="form-control" id="nom_joueur" name="nom_joueur" placeholder="require">
		//   </div>
		// </div>
		// <div class="form-group row">
		//   <label for="description" class="col-sm-2 col-form-label">User Name</label>
		//   <div class="col-sm-10">
		// 	<input type="text" class="form-control" id="inputUser" name="user" placeholder="Username">
		//   </div>
		// </div>
		// <div class="form-group row">
		//   <label for="inputPassword3" class="col-sm-2 col-form-label">Password</label>
		//   <div class="col-sm-10">
		// 	<input type="password" class="form-control" id="inputPassword" name="password" placeholder="Password">
		//   </div>
		// </div>
		// <div class="form-group row">
		//   <div class="offset-sm-2 col-sm-10">
		// 	<input type="submit" value="Sign in" name="submit" class="btn btn-primary"/>
		//   </div>
		// </div>
	  // </form>
		// ';
		//


		echo ' <div id="insert-Form">
        <form action="index.php?module=mod_joueur&action=ajout" method="POST">
            <h2 class="center"> Connexion </h2>
            <label for="nom_joueur">Nom du joueur :
                <input type="text" name="nom_joueur" placeholder="Saisir nom" required="required" autocomplete="off">
            </label>
            <label for="description">description :
                <input type="text" name="description" placeholder="Saisir la description" required="required" autocomplete="off">
            </label>
            <input id="submit-button" type="submit" value="Ajout">
        </form>';
	}

	function afficheBienvenue(){
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
			$str = $element['id'].' '.$element['nom'];
			echo "<a href= index.php?module=mod_joueur&action=details&id=".$id.">".$str."</a>";
			echo "</br>";

		}
	}
}
?>
