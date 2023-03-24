<!DOCTYPE HTML>

<html>
<head>
<meta charset="UTF8" />
<title> Coach </title>
<link rel="stylesheet" media="screen" href="mise_en_page.css">
</head>
<body> 
    <ul>
            <li> <a class="barre"href="index.php">Accueil</a> </li>
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
 $nomCoach = $_GET['nomCoach'];
 echo $nomCoach;
 $prenomCoach = $_GET['prenomCoach'];
 echo $prenomCoach;
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
    $requete="SELECT * FROM `coach` JOIN `equipe` USING(IdCoach) where nomCoach like '$nomCoach' and prenomCoach like '$prenomCoach';";

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
        //$name = $colonne['nomCoach'];
  // echo '<td><h3><center><a href="second_page.php?name='.$name."</td></h3></a>"; rendre les colonnes cliquable pour accéder à la fiche coach (pareil pour joueur et équipe)
        echo '<td><h3><center>'.$colonne['prenomCoach'].'</h3></td>';
        echo '<td><h3><center>'.$colonne['nomCoach'].'</h3></td>';

        echo '<td><h3><center><img src="data:image/jpeg;base64,' . base64_encode($colonne['PortraitCoach']) . '" height="75px" width="75px" alt="photo" title="logo"/></h3></td>';
        echo '<td><h3><center>'.$colonne['Profil'].'</h3></td>';}
        echo '<td><h3><center>'.$colonne['nomEquipe'].'</h3></td>';
        

//comment récuperer le nom de l'équpe et pas l'id ??

    
    echo "</table>";

  ?>
 <h1> <center>Equipe coachée :</center></h1>
 <?php
 
    $requete_affEquipe ="SELECT * FROM `equipe` JOIN `coach` USING(nomEquipe) where nomCoach like '%$nomCoach%' and prenomCoach like '%$prenomCoach%'";
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
<td class="tabAffichage"><h2>Description</h2></td>
</tr>

<?php
   foreach ($connexion->query($requete) as $colonne) {
        //Affichage des lignes de données, champ par champ
        echo "<tr>";
        $nomEquipe = $colonne['nomEquipe'];
        echo "<td><h3><center><a href='equipe.php?nomEquipe=$nomEquipe'>".$colonne['nomEquipe']."</a></h3></td>";
        echo "<td><h3><center>".$colonne['Conference']."</h3></td>";
        echo "<td><h3><center>".$colonne['Ville']."</h3></td>";
        echo "<td><h3><center>".$colonne['Classement']."</h3></td>";
        echo '<td><h3><center><img src="data:image/jpeg;base64,' . base64_encode($colonne['imgEquipe']) . '" height="75px" width="75px" alt="mon image" title="logo"/></h3></td>';
        echo "<td><h3><center>".$colonne['nVictoires']."</h3></td>";
        echo "<td><h3><center>".$colonne['nDefaites']."</h3></td>";
        echo "<td><h3><center>".$colonne['nTitresEquipe']."</h3></td>";
        echo "<td><h3><center>".$colonne['Description']."</h3></td>";}
//comment récuperer le nom de l'équpe et pas l'id ??

    
    echo "</table>";
    ?>
</div>

</body>

</html>