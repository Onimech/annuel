<?php

include("ConnexionBDD.php");
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Register</title>
	<link rel="stylesheet" type="text/css" href="inscription.css">
	<style>
		.error { color: red; }
	</style>
</head>
<body>
<h1> Register </h1>
<?php
// Vérifie si le formulaire a été soumis
if ($_SERVER["REQUEST_METHOD"] == "POST") {
	// Récupère les données du formulaire
	
	$email = $_POST["email"];
	$motdepasse = $_POST["motdepasse"];
	$Telephone= $_POST["Telephone"];

	$stmt = $connexion->prepare("SELECT COUNT(*) FROM utilisateur WHERE mail = ?");
	$stmt->execute([$email]);
	$count = $stmt->fetchColumn();

	if ($count > 0) {
		echo '<span class="error">L\'adresse email est déjà utilisée. Veuillez en choisir une autre.</span>';
	
	} else {

	// Prépare la requête SQL pour insérer les données dans la table "utilisateur"
	$stmt = $connexion->prepare("INSERT INTO utilisateur (mail, mdp, Telephone,admin ) VALUES (:email, :mdp, :telephone, 0)");

	// Lie les paramètres à la requête SQL
	
	$stmt->bindParam(':email', $email);
	$stmt->bindParam(':mdp', $motdepasse);
	$stmt->bindParam(':telephone', $Telephone);

	// Exécute la requête SQL
	if ($stmt->execute()) {
		header("Location: connexion.php");
	} else {
		echo "Erreur lors de l'inscription.";
	}
}
}
?>

<!-- Formulaire d'inscription -->
<form method="POST">

	<label for="email">Email adress :</label>
	<input type="email" id="email" name="email"><br>

	<label for="motdepasse">Password :</label>
	<input type="password" id="motdepasse" name="motdepasse"><br>

	<label for="Telephone">Number phone :</label>
	<input type="text" id="Telephone" name="Telephone"><br>

	<input type="submit" value="Sumbit">
</form>

</body>
</html>
