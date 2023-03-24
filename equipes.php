<!DOCTYPE HTML>

<html>
<head>
<meta charset="UTF8" />
<title> Equipes </title>
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
    <h1> <center>Liste des Equipes</center></h1>

    <div class="listUser">
        
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
    $requete="SELECT * FROM `equipe` JOIN `coach` using(IdCoach)";

    //Envoi de la requête
   
?>
    <table border>
<tr>
<td class="tabAffichage"><h2>Nom de l'Equipe</h2></td>
<td class="tabAffichage"><h2>Conférence</h2></td>
<td class="tabAffichage"><h2>Ville</h2></td>
<td class="tabAffichage"><h2>Classement</h2></td>
<td class="tabAffichage"><h2>Logo Equipe</h2></td>
<td class="tabAffichage"><h2>Victoires</h2></td>
<td class="tabAffichage"><h2>Défaites</h2></td>
<td class="tabAffichage"><h2>Nombre de Titres</h2></td>
<td class="tabAffichage"><h2>Coach</h2></td>
<td class="tabAffichage"><h2>Description</h2></td>
</tr>

<?php
   foreach ($connexion->query($requete) as $colonne) {
        //Affichage des lignes de données, champ par champ
        echo "<tr>";
        $nomEquipe = $colonne['nomEquipe'];
        echo "<td><h3><center><a href='equipe.php?nomEquipe=$nomEquipe'>".$colonne['nomEquipe']."</h3></td>";
        echo "<td><h3><center>".$colonne['Conference']."</h3></td>";
        echo "<td><h3><center>".$colonne['Ville']."</h3></td>";
        echo "<td><h3><center>".$colonne['Classement']."</h3></td>";
        echo '<td><h3><center><img src="data:image/jpeg;base64,' . base64_encode($colonne['imgEquipe']) . '" height="75px" width="75px" alt="mon image" title="logo"/></h3></td>';
        echo "<td><h3><center>".$colonne['nVictoires']."</h3></td>";
        echo "<td><h3><center>".$colonne['nDefaites']."</h3></td>";
        echo "<td><h3><center>".$colonne['nTitresEquipe']."</h3></td>";
        echo "<td><h3><center>".$colonne['prenomCoach']," ",$colonne['nomCoach']."</h3></td>";
        echo "<td><h3><center>".$colonne['Description']."</h3></td>";}
//comment récuperer le nom de l'équpe et pas l'id ??

    
    echo "</table>";


    
    echo "</table>";



$connexion = null;
  ?>

</div>

</body>

</html>