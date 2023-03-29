<?php
include("ConnexionBDD.php");
session_start();
?><link rel="stylesheet" type="text/css" href="connexion.css"> 

<h1> Login </h1><?php

if (isset($_POST['connexionNBA'])) {
  $mailconnect = htmlspecialchars($_POST['mail']);/*sécurisation des variables*/
	$mdpconnect = htmlspecialchars($_POST['mdp']);/*sécurisation des variables*/
	$requser = $connexion->prepare("SELECT * FROM utilisateur WHERE mail = :mail AND mdp = :mdp");
	/*on recupere les valeurs present dans la table utilisateur pour le pseudo et le mdp saisie*/
	try {
		$requser->execute(array(':mail' => $mailconnect, ':mdp' => $mdpconnect));
	} catch (Exception $e) {
		die('Erreur : ' . $e->getMessage());
	}
	$userexist = $requser->rowCount();
	/*compte le nombre de ligne de la requête, vérifié qu'il y a qu'une seule ligne qui correspond à ces pseudo et mdp*/
	if ($userexist == 1) { /*si un utilisateur a été retrouvé grâce aux identifiants saisis*/
		$userinfo = $requser->fetch(); /*récupère les données pour après les mettre dans des variables de sessions*/
		$_SESSION['mail'] = $userinfo['mail'];
		$_SESSION['mdp'] = $userinfo['mdp'];
		$_SESSION['admin'] = $userinfo['admin'];
	
		header("Location: index.php");/*on va sur la page import.php quand la connection est faite*/
	} else {/*sinon aucun utilisateur correspond aux valeurs saisies*/
		$erreur = "Mauvais pseudo ou mot de passe !";
	}
}/*fermeture du if le form de connection a ete rempli*/

?>
<!DOCTYPE html>
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="bootstrap.css">
	<title> Connexion </title>
</head>
<body>
<form action="connexion.php" id="connexion" name="connexion" method="POST">

  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Email address</label>
    <input name ="mail" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required>
    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input name ="mdp" type="password" class="form-control" id="exampleInputPassword1" required>
  </div>
  <div class="mb-3 form-check">
    <input name ="check" type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Check me out</label>
  </div>
  
  <button type="submit" id="connexion" name="connexionNBA" value = "Se connecter" class="btn btn-primary">Submit</button> <?php
        ?>
</form>
<?php
				if (isset($erreur)) {
					echo '<font color="red">' . $erreur . "</font>";
				}
				?>
      <a href="Inscription.php">Create an account</a>

</body>

