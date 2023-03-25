<?php
include("ConnexionBDD.php");
session_start();



?>
<!DOCTYPE HTML>

<html>
<head>
<meta charset="UTF8" />
<title> Liste des joueurs </title>
<link rel="stylesheet" href="mise_en_page.css">
</style>
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
            <li> <a class="barre" href="connexion.php">Se connecter</a> </li>
    </ul>
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
        echo "<td><h3><center><a href='joueur.php?nomJoueur=$nomJoueur&prenomJoueur=$prenomJoueur'>".$colonne['nomJoueur']."</a></h3></td>";
        echo "<td><h3><center><a href='joueur.php?nomJoueur=$nomJoueur&prenomJoueur=$prenomJoueur'>".$colonne['prenomJoueur']."</a></h3></td>";
        echo "<td><h3><center>".$colonne['age']."</h3></td>";
        echo "<td><h3><center>".$colonne['nMaillot']."</h3></td>";
        echo "<td><h3><center>".$colonne['Poste']."</h3></td>";
        echo "<td><h3><center>".$colonne['nTitres']."</h3></td>";
        echo "<td><h3><center>".$colonne['PosDraft']."</h3></td>";
        echo "<td><h3><center>".$colonne['AnDraft']."</h3></td>";
        echo "<td><h3><center>".$colonne['nomEquipe']."</h3></td>";}
//comment récuperer le nom de l'équpe et pas l'id ??

    
    echo "</table>";

  
    $connexion = null;
  ?>



</body>

</html>