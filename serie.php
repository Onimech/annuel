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
    $requete="SELECT * from serie INNER JOIN equipe ON IdEquipe1 = nomEquipe where IdSerie like '$IdSerie'";

    //Envoi de la requête
   

    echo "<table border>";
    echo "<tr>";

echo"<td><h3><center><a href='match.php?match=1&serie=$IdSerie'>"."Match 1"."</a></h3></td>";
echo"<td><h3><center><a href='match.php?match=2&serie=$IdSerie'>"."Match 2"."</a></h3></td>";
echo"<td><h3><center><a href='match.php?match=3&serie=$IdSerie'>"."Match 3"."</a></h3></td>";
echo"<td><h3><center><a href='match.php?match=4&serie=$IdSerie'>"."Match 4"."</a></h3></td>";
echo"<td><h3><center><a href='match.php?match=5&serie=$IdSerie'>"."Match 5"."</a></h3></td>";
echo"<td><h3><center><a href='match.php?match=6&serie=$IdSerie'>"."Match 6"."</a></h3></td>";
echo"<td><h3><center><a href='match.php?match=7&serie=$IdSerie'>"."Match 7"."</a></h3></td>";





   foreach ($connexion->query($requete) as $colonne) {
        //Affichage des lignes de données, champ par champ
        echo "<tr>";
        echo '<td><h3><center><img src="data:image/jpeg;base64,' . base64_encode($colonne['imgEquipe']) . '" height="75px" width="75px" alt="mon image" title="logo"/></h3></td>';
        echo '<td><h3><center><img src="data:image/jpeg;base64,' . base64_encode($colonne['imgEquipe']) . '" height="75px" width="75px" alt="mon image" title="logo"/></h3></td>';
        echo '<td><h3><center><img src="data:image/jpeg;base64,' . base64_encode($colonne['imgEquipe']) . '" height="75px" width="75px" alt="mon image" title="logo"/></h3></td>';
        echo '<td><h3><center><img src="data:image/jpeg;base64,' . base64_encode($colonne['imgEquipe']) . '" height="75px" width="75px" alt="mon image" title="logo"/></h3></td>';
        echo '<td><h3><center><img src="data:image/jpeg;base64,' . base64_encode($colonne['imgEquipe']) . '" height="75px" width="75px" alt="mon image" title="logo"/></h3></td>';
        echo '<td><h3><center><img src="data:image/jpeg;base64,' . base64_encode($colonne['imgEquipe']) . '" height="75px" width="75px" alt="mon image" title="logo"/></h3></td>';
        echo '<td><h3><center><img src="data:image/jpeg;base64,' . base64_encode($colonne['imgEquipe']) . '" height="75px" width="75px" alt="mon image" title="logo"/></h3></td>';

        echo "</tr>";

}
    
    echo "</table>";


    
    echo "</table>";



$connexion = null;
  ?>

</div>

</body>

</html>