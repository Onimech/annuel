<?php
include("ConnexionBDD.php");
session_start();



?>


<!DOCTYPE HTML>

<html>
<head>
<meta charset="UTF8" />
<title> Fiche Equipe </title>
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
            $idJoueur = $colonne['idJoueur'];
            echo "<td><h3><center><a href='joueur.php?nomJoueur=$nomJoueur&prenomJoueur=$prenomJoueur&idJoueur=$idJoueur'>".$colonne['nomJoueur']."</a></h3></td>";
            echo "<td><h3><center><a href='joueur.php?nomJoueur=$nomJoueur&prenomJoueur=$prenomJoueur&idJoueur=$idJoueur'>".$colonne['prenomJoueur']."</a></h3></td>";
            echo "<td><h3><center>".$colonne['age']."</h3></td>";
            echo "<td><h3><center>".$colonne['nMaillot']."</h3></td>";
            echo "<td><h3><center>".$colonne['Poste']."</h3></td>";
            echo "<td><h3><center>".$colonne['nTitres']."</h3></td>";
            echo "<td><h3><center>".$colonne['PosDraft']."</h3></td>";
            echo "<td><h3><center>".$colonne['AnDraft']."</h3></td>";}
   
    
        
        echo "</table>";
    if (isset($_SESSION['mail'])){
            ?><form method="POST">
            <label for="commentaire">Commentaire :</label>
            <textarea name="comment_post" rows="5" required></textarea><br>
            <input type="submit" value="Ajouter un commentaire">
            </form><?php
    
            }
            else {
    
                ?> <a href="connexion.php">Connectez vous pour commenter</a> <?php
    
            }

        
        
        
      
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
         // if (isset($_POST['submit'])) {
            // Récupérer les données soumises
            $member_id = $_SESSION['mail'];
            $date_posted = date('Y-m-d H:i:s');
            $comment_post = $_POST['comment_post'];
            $requete_ins= $connexion->prepare("INSERT INTO `comment` (`member_id`, `date_posted`, `comment_post`, `idC`, `idE`,`idJ`) VALUES ( ?, ?, ?, ?, ?, ?)");
            $requete_ins->execute([$member_id, $date_posted, $comment_post,NULL,$equipe,NULL]);
                        
            if ($requete_ins->rowCount ()>0){
                echo"ajout avec succes";
          }else{
                echo"erreur dans ajout";
          }
        }       
          //affichage des commentaires
          
          $requete_commentaire = "SELECT * FROM comment where idE like '$equipe' ORDER BY date_posted DESC";
                      
       

        foreach ($connexion->query($requete_commentaire) as $row) {

            echo "<div class='comment'>";
            echo "<p><strong>" . $row['member_id'] . "</strong> le " . $row['date_posted'] . "</p>";
            echo "<p>" . $row['comment_post'] . "</p>";
            echo "</div>";

        }
       


  
$connexion = null;
?>

</div>

</body>

</html>