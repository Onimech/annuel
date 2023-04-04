<?php
include("ConnexionBDD.php");
session_start();



?>
<!DOCTYPE HTML>
<html>
<head>
<meta charset="UTF8" />
<title> Résultats </title>
<link rel="stylesheet" media="screen" href="accueil.css">
</head>
<body> 

<?php
include("barre_menu.php");
?>
<h1> Résultats de la rechercheV2</h1>
    <form method="GET" action="recherche.php"> 
     Rechercher un mot : <input type="text" name="query">
     <input type="SUBMIT" value="Rechercher"> 
     </form>
    <?php
 

  // Récupération de la requête de recherche
  $query = $_GET['query'];

  // Requête SQL pour chercher les résultats correspondants
  $equipe = "SELECT * FROM equipe WHERE nomEquipe LIKE ?";
  $ville = "SELECT * FROM equipe WHERE Ville LIKE ? ";
  $nomjoueur = "SELECT * FROM joueur WHERE nomJoueur LIKE ? ";
  $prenomjoueur = "SELECT * FROM joueur WHERE prenomJoueur LzIKE ? ";
  $nomCoach = "SELECT * FROM coach WHERE nomCoach LIKE ? ";
  $prenomCoach = "SELECT * FROM coach WHERE prenomCoach LIKE ? ";

  // Préparation de la requête SQL
  

  $stmt = $connexion->prepare($equipe);
  $stmt->execute(['query' => "%$query%"]);

  // Affichage des résultats de la recherche
  while ($row = $stmt->fetch()) {
    echo "<p>" . $row['nomEquipe'] . "</p>";
  }

  $stmt = $connexion->prepare($ville);
  $stmt->execute(['query' => "%$query%"]);

  // Affichage des résultats de la recherche
  while ($row = $stmt->fetch()) {
    echo "<p>" . $row['nomEquipe'] . "</p>";
  }

  $stmt = $connexion->prepare($nomjoueur);
  $stmt->execute(['query' => "%$query%"]);

  // Affichage des résultats de la recherche
  while ($row = $stmt->fetch()) {
    echo "<p>" . $row['nomJoueur'] . "</p>";
    echo "<p>" . $row['prenomJoueur'] . "</p>";
  }

  $stmt = $connexion->prepare($prenomjoueur);
  $stmt->execute(['query' => "%$query%"]);

  // Affichage des résultats de la recherche
  while ($row = $stmt->fetch()) {
    echo "<p>" . $row['nomJoueur'] . "</p>";
    echo "<p>" . $row['prenomJoueur'] . "</p>";
  }
  $stmt = $connexion->prepare($prenomCoach);
  $stmt->execute(['query' => "%$query%"]);

  // Affichage des résultats de la recherche
  while ($row = $stmt->fetch()) {
    echo "<p>" . $row['nomCoach'] . "</p>";
    echo "<p>" . $row['prenomCoach'] . "</p>";
  }
  $stmt = $connexion->prepare($nomCoach);
  $stmt->execute(['query' => "%$query%"]);

  // Affichage des résultats de la recherche
  while ($row = $stmt->fetch()) {
    echo "<p>" . $row['nomCoach'] . "</p>";
    echo "<p>" . $row['prenomCoach'] . "</p>";
  }

  // Fermeture de la connexion à la base de données
  $pdo = null;
?>