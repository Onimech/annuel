<?php
include("ConnexionBDD.php");
session_start();



?>
<!DOCTYPE HTML>
<html>
<head>
<meta charset="UTF8" />
<title> Accueil </title>
<link rel="stylesheet" media="screen" href="mise_en_page.css">
</head>
<body  background="images/oiseauFond.jpg"> 
    <ul>
            <ul>
            <li> <a class="barre"href="index.php">Accueil</a> </li>
            <li> <a class="barre"href="presentation.php">C'est quoi les Playoff de la NBA?</a> </li>
            <li> <a class="barre"href="tableau.php">Tableau Séries</a> </li>
            <li> <a class="barre"href="carte.php">Carte Intéractive</a> </li>
            <li> <a class="barre"href="equipes.php">Liste Equipes</a> </li>
            <li> <a class="barre"href="joueurs.php">Liste Joueurs</a> </li>
            <li> <a class="barre"href="coachs.php">Liste Coachs</a> </li>
            <li> <a class="barre" href="connexion.php">Se connecter</a> </li>
            </ul>
    </ul>
    <form method="GET" action="recherche.php"> 
     Rechercher un mot : <input type="text" name="query">
     <input type="SUBMIT" value="Rechercher"> 
     </form>
    <h1> Les Playoff de la NBA</h1>
    <h4> Ceci est un site retraçant les Playoff de la NBA de la saison dernière (2021-2022)</h4>
    
    <div class="pres_info"> LOREM IPSUM</a>
    <h2> TEXTE !</h2>
    <div class="info">TEST.</p>
    </div>
    </div>
</body>
</html>