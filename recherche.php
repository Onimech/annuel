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
            <li> <a href="index.php">Accueil</a> </li>
            <li> <a href="presentation.php">C'est quoi les Playoff de la NBA?</a> </li>
            <li> <a href="tableau2.php">Tableau Séries</a> </li>
            <li> <a href="carte.php">Carte Intéractive</a> </li>
            <li> <a href="equipes.php">Liste Equipes</a> </li>
            <li> <a href="joueurs.php">Liste Joueurs</a> </li>
            <li> <a href="coachs.php">Liste Coachs</a> </li>
            <li> <a href="connexion.php">Se connecter</a> </li>
            </ul>
            
    </ul>

    <?php
  // Connexion à la base de données
  $host = "localhost";
  $username = "root";
  $password = "root";
  $database = "nba_projet";

  try {
    $pdo = new PDO("mysql:host=$host;dbname=$database", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  } catch(PDOException $e) {
    echo "Connexion échouée : " . $e->getMessage();
  }

  // Récupération de la requête de recherche
  $query = $_GET['query'];

  // Requête SQL pour chercher les résultats correspondants
  $sql = "SELECT * FROM equipe WHERE nomEquipe LIKE '%$query%'";

  // Préparation de la requête SQL
  $stmt = $pdo->prepare($sql);
  $stmt->execute(['query' => "%$query%"]);

  // Affichage des résultats de la recherche
  while ($row = $stmt->fetch()) {
    echo "<p>" . $row['nomEquipe'] . "</p>";
    echo "<p>" . $row['Ville'] . "</p>";
  }

  // Fermeture de la connexion à la base de données
  $pdo = null;
?>
