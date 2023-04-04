<?php
include("ConnexionBDD.php");
session_start();



?>
<!DOCTYPE HTML>

<html>
<head>
<meta charset="UTF8" />
<title> Liste des joueurs </title>
<link rel="stylesheet" href="joueurs.css">
</style>
</head>
<body> 
    
<?php
include("barre_menu.php");
?>
    <form method="GET" action="recherche.php"> 
     Rechercher un mot : <input type="text" name="query">
     <input type="SUBMIT" value="Rechercher"> 
     </form>
    <h1> <center>Liste des Joueurs</center></h1>


        
    <?php

   
    


    //Ecriture de la requête 
    $requete="SELECT * FROM `joueur`;";

    //Envoi de la requête
   
    ?>


    <table border>


<td class="tabAffichage"><h2>Nom</h2></td>
<td class="tabAffichage"><h2>Prénom</h2></td>
<td class="tabAffichage"><h2>Âge</h2></td>
<td class="tabAffichage"><h2>Numéro <br> maillot</h2></td>
<td class="tabAffichage"><h2>Poste</h2></td>
<td class="tabAffichage"><h2>Nombre <br> de Titres</h2></td>
<td class="tabAffichage"><h2>Position <br> Draft</h2></td>
<td class="tabAffichage"><h2>Année <br> de Draft</h2></td>
<td class="tabAffichage"><h2>Equipe</h2></td>

    

    <?php
//données du tableau
foreach ($connexion->query($requete) as $colonne) {
        //Affichage des lignes de données, champ par champ
        echo "<tr>";
        $nomJoueur = $colonne['nomJoueur'];
        $prenomJoueur = $colonne['prenomJoueur'];
        $idJoueur = $colonne['idJoueur'];
        echo "<td><h3><center><a href='joueur.php?nomJoueur=$nomJoueur&prenomJoueur=$prenomJoueur&idJoueur=$idJoueur'>".$colonne['nomJoueur']."</a></h3></td>";
        echo "<td><h3><center><a href='joueur.php?nomJoueur=$nomJoueur&prenomJoueur=$prenomJoueur&idJoueur=$idJoueur'>".$colonne['prenomJoueur']."</a></h3></td>";
        echo "<td><h3><center>".$colonne['age']."</h3></td>";
        echo "<td><h3><center>".$colonne['nMaillot']."</h3></td>";
        echo "<td><h3><center>".$colonne['Poste']."</h3></td>";
        echo "<td><h3><center>".$colonne['nTitres']."</h3></td>";
        echo "<td><h3><center>".$colonne['PosDraft']."</h3></td>";
        echo "<td><h3><center>".$colonne['AnDraft']."</h3></td>";
        $nomEquipe = $colonne['nomEquipe'];
        echo "<td><h3><center><a href='equipe.php?nomEquipe=$nomEquipe'>".$colonne['nomEquipe']."</h3></td>";}
//comment récuperer le nom de l'équpe et pas l'id ??

    
    echo "</table>";

  
    $connexion = null;
  ?>



</body>

</html>