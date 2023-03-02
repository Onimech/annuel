<!DOCTYPE HTML>

<html>
<head>
<meta charset="UTF8" />
<title> Coach </title>
<link rel="stylesheet" media="screen" href="mise_en_page.css">
</head>
<body> 
    <ul>
    <li> <a href="index.php">Accueil</a> </li>
            <li> <a href="presentation.php">C'est quoi les Playoff de la NBA?</a> </li>
            <li> <a href="tableau.php">Tableau Séries</a> </li>
            <li> <a href="carte.php">Carte Intéractive</a> </li>
            <li> <a href="equipes.php">Liste Equipes</a> </li>
            <li> <a href="joueurs.php">Liste Joueurs</a> </li>
            <li> <a href="coachs.php">Liste Coachs</a> </li>
    </ul>
    <h1> <center>Liste des Coach</center></h1>

 
        
    <?php

    //Connexion
    $user = 'root';
    $password = 'root';
    $db = 'nba_projet';
    $host = 'localhost';
 
    $connexion = new PDO ("mysql:host=$host;dbname=$db", $user, $password);

    try {$connexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        echo 'Connexion réussie';}
    catch(PDOException $e){
        echo "Erreur : " . $e->getMessage();
      }
    
    //Ecriture de la requête 
    $requete="SELECT * FROM `coach`;";

    //Envoi de la requête
 ?>

<table border>
    
    
 <tr>
<td class="tabAffichage"><h2>Prénom</h2></td>
<td class="tabAffichage"><h2>Nom</h2></td>
<td class="tabAffichage"><h2>Portrait</h2></td>
<td class="tabAffichage"><h2>Profil</h2></td>
</tr>
<?php
      foreach ($connexion->query($requete) as $colonne) {

        //Affichage des lignes de données, champ par champ
        echo "<tr>";
        //$name = $colonne['nomCoach'];
  // echo '<td><h3><center><a href="second_page.php?name='.$name."</td></h3></a>"; rendre les colonnes cliquable pour accéder à la fiche coach (pareil pour joueur et équipe)
        echo '<td><h3><center>'.$colonne['prenomCoach'].'</h3></td>';
        echo '<td><h3><center>'.$colonne['nomCoach'].'</h3></td>';

        echo '<td><h3><center><img src="data:image/jpeg;base64,' . base64_encode($colonne['PortraitCoach']) . '" height="75px" width="75px" alt="photo" title="logo"/></h3></td>';
        echo '<td><h3><center>'.$colonne['Profil'].'</h3></td>';}

        

//comment récuperer le nom de l'équpe et pas l'id ??

    
    echo "</table>";

  ?>

</div>

</body>

</html>