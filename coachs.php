<?php
include("ConnexionBDD.php");
session_start();



?>
<!DOCTYPE HTML>

<html>
<head>
<meta charset="UTF8" />
<title> Coach </title>
<link rel="stylesheet" media="screen" href="coachs.css">
</head>
<body> 
<?php
include("barre_menu.php");
?>
    <form method="GET" action="recherche.php"> 
     Rechercher un mot : <input type="text" name="query">
     <input type="SUBMIT" value="Rechercher"> 
     </form>
    <h1> <center>Liste des Coach</center></h1>

 
        
    <?php

   
    
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
<td class="tabAffichage"><h2>Equipe Coachée</h2></td>
</tr>
<?php
      foreach ($connexion->query($requete) as $colonne) {

        //Affichage des lignes de données, champ par champ
        echo "<tr>";
        $nomCoach= $colonne['nomCoach'];
        $prenomCoach = $colonne['prenomCoach'];
        $IdCoach = $colonne['IdCoach'];
        echo "<td><h3><center><a href='coach.php?nomCoach=$nomCoach&prenomCoach=$prenomCoach&IdCoach=$IdCoach'>".$colonne['prenomCoach']."</a></h3></td>";
        echo "<td><h3><center><a href='coach.php?nomCoach=$nomCoach&prenomCoach=$prenomCoach&IdCoach=$IdCoach'>".$colonne['nomCoach']."</a></h3></td>";

        echo '<td><h3><center><img src="data:image/jpeg;base64,' . base64_encode($colonne['PortraitCoach']) . '" height="75px" width="75px" alt="photo" title="logo"/></h3></td>';
        echo '<td><h3><center>'.$colonne['Profil'].'</h3></td>';
        echo '<td><h3><center>'.$colonne['nomEquipe'].'</h3></td>';}
        

    
    echo "</table>";

  ?>

</div>

</body>

</html>