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
            <li> <a href="presentation.php">C'est quoi les Playoff de la NBA?</a> </li>
            <li> <a href="tableau.php">Tableau Séries</a> </li>
            <li> <a href="carte.php">Carte Intéractive</a> </li>
            <li> <a href="equipes.php">Liste Equipes</a> </li>
            <li> <a href="joueurs.php">Liste Joueurs</a> </li>
            <li> <a href="coachs.php">Liste Coachs</a> </li>
    </ul>
    <h1> <center>Liste des Joueurs</center></h1>


        
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
    
//si erreur

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
        echo "<td><h3>".$colonne['nomJoueur']."</h3></td>";
        echo "<td><h3>".$colonne['prenomJoueur']."</h3></td>";
        echo "<td><h3>".$colonne['age']."</h3></td>";
        echo "<td><h3>".$colonne['nMaillot']."</h3></td>";
        echo "<td><h3>".$colonne['Poste']."</h3></td>";
        echo "<td><h3>".$colonne['nTitres']."</h3></td>";
        echo "<td><h3>".$colonne['PosDraft']."</h3></td>";
        echo "<td><h3>".$colonne['AnDraft']."</h3></td>";
        echo "<td><h3>".$colonne['IdEquipe']."</h3></td>";}
//comment récuperer le nom de l'équpe et pas l'id ??

    
    echo "</table>";

  

  ?>



</body>

</html>