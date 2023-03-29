<?php
include("ConnexionBDD.php");
session_start();



?>
<!DOCTYPE HTML>

<html>
<head>
<meta charset="UTF8" />
<title> Fiche Serie </title>
<link rel="stylesheet" media="screen" href="equipes.css">
</head>
<body> 
<?php
include("barre_menu.php");
?>
    <form method="GET" action="recherche.php"> 
     Rechercher un mot : <input type="text" name="query">
     <input type="SUBMIT" value="Rechercher"> 
     </form>
    <h1> <center>Série :</center></h1>

    <div class="listUser">
        
    <?php
/* cette page affichera les informations d'une série en particulier entre deux équipes */
    $IdSerie = $_GET['serie'];

    
    //Ecriture de la requête 
    $requete="SELECT * from serie where IdSerie like '$IdSerie'";

    //Envoi de la requête
   
?>
    <table border>
<tr>
<td class="tabAffichage"><h2>Equipe 1</h2></td>
<td class="tabAffichage"><h2>Equipe 2</h2></td>


</tr>

<?php
   foreach ($connexion->query($requete) as $colonne) {
        //Affichage des lignes de données, champ par champ
        echo "<tr>";
        echo "<td><h3><center>".$colonne['IdEquipe1']."</h3></td>";
        echo "<td><h3><center>".$colonne['IdEquipe2']."</h3></td>";
        /*
        echo "<td><h3><center>".$colonne['Conference']."</h3></td>";
        echo "<td><h3><center>".$colonne['Ville']."</h3></td>";
        echo "<td><h3><center>".$colonne['Classement']."</h3></td>";
        echo '<td><h3><center><img src="data:image/jpeg;base64,' . base64_encode($colonne['imgEquipe']) . '" height="75px" width="75px" alt="mon image" title="logo"/></h3></td>';
        echo "<td><h3><center>".$colonne['nVictoires']."</h3></td>";
        echo "<td><h3><center>".$colonne['nDefaites']."</h3></td>";
        echo "<td><h3><center>".$colonne['nTitresEquipe']."</h3></td>";
        echo "<td><h3><center>".$colonne['prenomCoach']," ",$colonne['nomCoach']."</h3></td>";
        echo "<td><h3><center>".$colonne['Description']."</h3></td>";}
*/
}
    
    echo "</table>";


    
    echo "</table>";



$connexion = null;
  ?>

</div>

</body>

</html>