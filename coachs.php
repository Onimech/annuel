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
            <li> <a class="barre"href="presentation.php">C'est quoi les Playoff de la NBA?</a> </li>
            <li> <a class="barre"href="tableau.php">Tableau Séries</a> </li>
            <li> <a class="barre"href="carte.php">Carte Intéractive</a> </li>
            <li> <a class="barre"href="equipes.php">Liste Equipes</a> </li>
            <li> <a class="barre"href="joueurs.php">Liste Joueurs</a> </li>
            <li> <a class="barre"href="coachs.php">Liste Coachs</a> </li>
    </ul>
    <form method="GET" action="recherche.php"> 
     Rechercher un mot : <input type="text" name="query">
     <input type="SUBMIT" value="Rechercher"> 
     </form>
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
    $requete="SELECT * FROM `coach` JOIN `equipe` USING(IdCoach);";

    //Envoi de la requête
 ?>

<table border>
    
    
 <tr>
<td class="tabAffichage"><h2>Prénom</h2></td>
<td class="tabAffichage"><h2>Nom</h2></td>
<td class="tabAffichage"><h2>Portrait</h2></td>
<td class="tabAffichage"><h2>Profil</h2></td>
<td class="tabAffichage"><h2>Equipe Coaché</h2></td>
</tr>
<?php
      foreach ($connexion->query($requete) as $colonne) {

        //Affichage des lignes de données, champ par champ
        echo "<tr>";
        $nomCoach= $colonne['nomCoach'];
        $prenomCoach = $colonne['prenomCoach'];
        echo "<td><h3><center><a href='coach.php?nomCoach=$nomCoach&prenomCoach=$prenomCoach'>".$colonne['prenomCoach']."</a></h3></td>";
        echo "<td><h3><center><a href='coach.php?nomCoach=$nomCoach&prenomCoach=$prenomCoach'>".$colonne['nomCoach']."</a></h3></td>";

        echo '<td><h3><center><img src="data:image/jpeg;base64,' . base64_encode($colonne['PortraitCoach']) . '" height="75px" width="75px" alt="photo" title="logo"/></h3></td>';
        echo '<td><h3><center>'.$colonne['Profil'].'</h3></td>';
        echo '<td><h3><center>'.$colonne['nomEquipe'].'</h3></td>';}
        

    
    echo "</table>";

  ?>

</div>

</body>

</html>