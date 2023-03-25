<?php
include("ConnexionBDD.php");
session_start();



?>
<!DOCTYPE HTML>
<html>
<head>
<meta charset="UTF8" />
<title> Résultats </title>
<link rel="stylesheet" media="screen" href="mise_en_page.css">
</head>
<body  background="images/oiseauFond.jpg"> 
<h1> Résultats de la recherche </h1>
<ul>
            <ul>
            <li> <a class="barre"href="index.php">Accueil</a> </li>
            <li> <a class="barre"href="presentation.php">C'est quoi les Playoff de la NBA?</a> </li>
            <li> <a class="barre"href="tableau.php">Tableau Séries</a> </li>
            <li> <a class="barre"href="carte.php">Carte Intéractive</a> </li>
            <li> <a class="barre"href="equipes.php">Liste Equipes</a> </li>
            <li> <a class="barre"href="joueurs.php">Liste Joueurs</a> </li>
            <li> <a class="barre"href="coachs.php">Liste Coachs</a> </li>
            <li> <a class="barre"href="connexion.php">Se connecter</a> </li>
            <li> <a class="barre" href="connexion.php">Se connecter</a> </li>
            </ul>
            
    </ul>
    <form method="GET" action="recherche.php"> 
     Rechercher un mot : <input type="text" name="query">
     <input type="SUBMIT" value="Rechercher"> 
     </form>
    <?php

  // Récupération de la requête de recherche
  $query = $_GET['query'];

  // Requête SQL pour chercher les résultats correspondants
  $sql = "SELECT * FROM equipe WHERE nomEquipe LIKE '%$query%'";

  // Préparation de la requête SQL
  $stmt = $connexion->prepare($sql);
  $stmt->execute(['query' => "%$query%"]);

  // Affichage des résultats de la recherche
  while ($row = $stmt->fetch()) {
    echo "<p>" . $row['nomEquipe'] . "</p>";
    echo "<p>" . $row['Ville'] . "</p>";
  }

  // Fermeture de la connexion à la base de données
  $pdo = null;
?>