<!DOCTYPE HTML>

<html>
<head>
<meta charset="UTF8" />
<title> Fiche Serie </title>
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
    <h1> <center>Série :</center></h1>

    <div class="listUser">
        
    <?php
/* cette page affichera les informations d'une série en particulier entre deux équipes */

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
    $requete="SELECT * .....";

    //Envoi de la requête
   
?>
    <table border>
<tr>
<td class="tabAffichage"><h2>Titre colonne voulue</h2></td>

</tr>

<?php
   foreach ($connexion->query($requete) as $colonne) {
        //Affichage des lignes de données, champ par champ
        echo "<tr>";
        echo "<td><h3><center>".$colonne['nomEquipe']."</h3></td>";
        echo "<td><h3><center>".$colonne['Conference']."</h3></td>";
        echo "<td><h3><center>".$colonne['Ville']."</h3></td>";
        echo "<td><h3><center>".$colonne['Classement']."</h3></td>";
        echo '<td><h3><center><img src="data:image/jpeg;base64,' . base64_encode($colonne['imgEquipe']) . '" height="75px" width="75px" alt="mon image" title="logo"/></h3></td>';
        echo "<td><h3><center>".$colonne['nVictoires']."</h3></td>";
        echo "<td><h3><center>".$colonne['nDefaites']."</h3></td>";
        echo "<td><h3><center>".$colonne['nTitresEquipe']."</h3></td>";
        echo "<td><h3><center>".$colonne['prenomCoach']," ",$colonne['nomCoach']."</h3></td>";
        echo "<td><h3><center>".$colonne['Description']."</h3></td>";}


    
    echo "</table>";


    
    echo "</table>";



$connexion = null;
  ?>

</div>

</body>

</html>