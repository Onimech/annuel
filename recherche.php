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
<h1> Résultats de la recherche </h1>
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