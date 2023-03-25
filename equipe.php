<?php
include("ConnexionBDD.php");
session_start();



?>


<!DOCTYPE HTML>

<html>
<head>
<meta charset="UTF8" />
<title> Fiche Equipe </title>
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
            <li> <a class="barre" href="connexion.php">Se connecter</a> </li>
    </ul>
    <form method="GET" action="recherche.php"> 
     Rechercher un mot : <input type="text" name="query">
     <input type="SUBMIT" value="Rechercher"> 
     </form>
    <h1> <center>Fiche d'une équipe :</center></h1>

    <div class="listUser">
        
    <?php
/* cette page affichera les informations d'une équipe en particulier */

$equipe = $_GET['nomEquipe'];
echo $equipe ;
    //Connexion
   
    
    //Ecriture de la requête 
    $requete="SELECT * FROM `equipe` JOIN `coach` using(IdCoach) where nomEquipe like '%$equipe%'";
    $requete_affJoueur ="SELECT * FROM `equipe` JOIN `joueur` USING(nomEquipe) where nomEquipe like '%$equipe%'";
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
        echo "<td><h3><center>".$colonne['nomEquipe']."</h3></td>";
        echo "<td><h3><center>".$colonne['Conference']."</h3></td>";
        echo "<td><h3><center>".$colonne['Ville']."</h3></td>";
        echo "<td><h3><center>".$colonne['Classement']."</h3></td>";
        echo '<td><h3><center><img src="data:image/jpeg;base64,' . base64_encode($colonne['imgEquipe']) . '" height="75px" width="75px" alt="mon image" title="logo"/></h3></td>';
        echo "<td><h3><center>".$colonne['nVictoires']."</h3></td>";
        echo "<td><h3><center>".$colonne['nDefaites']."</h3></td>";
        echo "<td><h3><center>".$colonne['nTitresEquipe']."</h3></td>";
        $nomCoach= $colonne['nomCoach'];
        $prenomCoach = $colonne['prenomCoach'];
        echo "<td><h3><center><a href='coach.php?nomCoach=$nomCoach&prenomCoach=$prenomCoach'>".$colonne['prenomCoach']," ",$colonne['nomCoach']."</h3></td>";
        echo "<td><h3><center>".$colonne['Description']."</h3></td>";}
//comment récuperer le nom de l'équpe et pas l'id ??

    
    echo "</table>";


    ?>
    <h1> <center>Joueurs de l'équipe :</center> </h1> 
    <table border>


    <td class="tabAffichage"><h2>Nom</h2></td>
    <td class="tabAffichage"><h2>Prénom</h2></td>
    <td class="tabAffichage"><h2>Âge</h2></td>
    <td class="tabAffichage"><h2>Numéro <br> maillot</h2></td>
    <td class="tabAffichage"><h2>Poste</h2></td>
    <td class="tabAffichage"><h2>Nombre <br> de Titres</h2></td>
    <td class="tabAffichage"><h2>Position <br> Draft</h2></td>
    <td class="tabAffichage"><h2>Année <br> de Draft</h2></td>

    
        
    
        <?php
    //données du tableau
    foreach ($connexion->query($requete_affJoueur) as $colonne) {
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
            echo "<td><h3><center>".$colonne['AnDraft']."</h3></td>";}
    //comment récuperer le nom de l'équpe et pas l'id ??
    
        
        echo "</table>";
    



$connexion = null;
  ?>

</div>

</body>

</html>