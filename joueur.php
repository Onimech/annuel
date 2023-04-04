<?php
include("ConnexionBDD.php");
session_start();



?>
<!DOCTYPE HTML>

<html>
<head>
<meta charset="UTF8" />
<title> Fiche Joueur </title>
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
    <h1> <center>Fiche d'un joueur : </center></h1>

  
        
    <?php
  /* cette page affichera les informations d'un joueur en particulier en fonction du lien cliqué*/
  $nomJoueur = $_GET['nomJoueur'];
$prenomJoueur = $_GET['prenomJoueur'];
$idJoueur = $_GET['idJoueur'];



    //Ecriture de la requête 
    $requete="SELECT * FROM `joueur` where nomJoueur like '$nomJoueur' and prenomJoueur like '$prenomJoueur';";

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
        echo "<td><h3><center>".$colonne['nomJoueur']."</h3></td>";
        echo "<td><h3><center>".$colonne['prenomJoueur']."</h3></td>";
        echo "<td><h3><center>".$colonne['age']."</h3></td>";
        echo "<td><h3><center>".$colonne['nMaillot']."</h3></td>";
        echo "<td><h3><center>".$colonne['Poste']."</h3></td>";
        echo "<td><h3><center>".$colonne['nTitres']."</h3></td>";
        echo "<td><h3><center>".$colonne['PosDraft']."</h3></td>";
        echo "<td><h3><center>".$colonne['AnDraft']."</h3></td>";
        $nomEquipe = $colonne['nomEquipe'];
        echo "<td><h3><center><a href='equipe.php?nomEquipe=$nomEquipe'>".$colonne['nomEquipe']."</a></h3></td>";}
//comment récuperer le nom de l'équpe et pas l'id ??

    
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
      $requete_ins->execute([$member_id, $date_posted, $comment_post,NULL,NULL,$idJoueur]);
                  
      if ($requete_ins->rowCount ()>0){
          echo"ajout avec succes";
    }else{
          echo"erreur dans ajout";
    }
  }       
    //affichage des commentaires
    
    $requete_commentaire = "SELECT * FROM comment where idJ like $idJoueur ORDER BY date_posted DESC";
                
 

  foreach ($connexion->query($requete_commentaire) as $row) {

      echo "<div class='comment'>";
      echo "<p><strong>" . $row['member_id'] . "</strong> le " . $row['date_posted'] . "</p>";
      echo "<p>" . $row['comment_post'] . "</p>";
      echo "</div>";

  }
 

  
    $connexion = null;
  ?>



</body>

</html>