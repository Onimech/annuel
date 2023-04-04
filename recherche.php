<?php
include("ConnexionBDD.php");
session_start();



?>
<!DOCTYPE HTML>
<html>
<head>
<meta charset="UTF8" />
<title> Résultats </title>
<link rel="stylesheet" media="screen" href="accueil.css">
</head>
<body> 

<?php
include("barre_menu.php");
?>
<h1> Résultats de la recherche </h1>
    <form method="GET" action="recherche.php"> 
     Rechercher un mot : <input type="text" name="query">
     <input type="SUBMIT" value="Rechercher"> 
     </form>
    <?php
 
// Récupération du terme de recherche soumis par l'utilisateur
$search_term = $_GET['query'];

// Requête pour rechercher les données correspondantes dans la base de données
$sql = "SELECT nomEquipe, Ville, Description FROM Equipe WHERE nomEquipe LIKE :search_term OR Ville LIKE :search_term OR Description LIKE :search_term;";

$stmt = $connexion->prepare($sql);
$stmt->bindValue(':search_term', '%' . $search_term . '%', PDO::PARAM_STR);
$stmt->execute();

//requete 2
$sql2 = "SELECT idJoueur, nomJoueur, prenomJoueur, poste FROM joueur WHERE nomJoueur LIKE :search_term OR prenomJoueur LIKE :search_term OR poste LIKE :search_term;";

$stmt2 = $connexion->prepare($sql2);
$stmt2->bindValue(':search_term', '%' . $search_term . '%', PDO::PARAM_STR);
$stmt2->execute();

//requete 3 : 
$sql3 = "SELECT idCoach, nomCoach, prenomCoach, Profil FROM Coach WHERE nomCoach LIKE :search_term OR prenomCoach LIKE :search_term OR Profil LIKE :search_term;";

$stmt3 = $connexion->prepare($sql3);
$stmt3->bindValue(':search_term', '%' . $search_term . '%', PDO::PARAM_STR);
$stmt3->execute();

$rowCount = $stmt->rowCount();
$rowCount2 = $stmt2->rowCount();
$rowCount3 = $stmt3->rowCount();
$rowCountTot = $rowCount + $rowCount2 + $rowCount3;

// Afficher les résultats
echo "La recherche a retourné $rowCountTot résultats : <br>";
if ($rowCountTot > 0){
  if ($rowCount > 0) {
    echo "$rowCount Equipe(s) trouvée(s) : <br>";
    while($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
      $nomEquipe = $row['nomEquipe'];
        echo "=><a href='equipe.php?nomEquipe=$nomEquipe'>". $row["nomEquipe"]. "</a><br>";
    }
  }

   if ($rowCount2 > 0) {
    echo "$rowCount2 Joueur(s) trouvé(s) : <br>";
    while($row2 = $stmt2->fetch(PDO::FETCH_ASSOC)) {
      $nomJoueur = $row2['nomJoueur'];
      $IdJoueur = $row2['idJoueur'];
      $prenomJoueur = $row2['prenomJoueur'];
        echo "=><a href='joueur.php?nomJoueur=$nomJoueur&prenomJoueur=$prenomJoueur&idJoueur=$IdJoueur'>". $row2["nomJoueur"]. "</a><br>";
    }
} 

   if ($rowCount3 > 0) {
    echo "$rowCount3 Coach(s) trouvé(s) : <br>";
        while($row3 = $stmt3->fetch(PDO::FETCH_ASSOC)) {
          $nomCoach = $row3['nomCoach'];
          $prenomCoach = $row3['prenomCoach'];
          $idCoach = $row3['idCoach'];
            echo "=><a href='coach.php?nomCoach=$nomCoach&prenomCoach=$prenomCoach&idCoach=$idCoach'>". $row3["nomCoach"]. "</a><br>";
    }
 } 
} else { echo "Aucun résultat trouvé";
}

// Fermer la connexion à la base de données
$connexion = null;
?>