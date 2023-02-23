<!DOCTYPE HTML>

<html>
<head>
<meta charset="UTF8" />
<title> Utilisateurs </title>
<link rel="stylesheet" media="screen" href="mise_en_page.css">
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
    <h1> <center>Liste des utilisateurs</center></h1>

    <div class="listUser">
        
    <?php

    //Connexion
    $user = 'root';
    $password = 'root';
    $db = 'oiseaux';
    $host = 'localhost';
 
    $connect = mysqli_connect($host, $user, $password, $db);

    if(mysqli_connect_errno())
        echo "Fail to connect :".mysqli_connect_errno();

    //Ecriture de la requête 
    $requete="SELECT photo, nomCommun FROM oiseau;";

    //Envoi de la requête
    $reponse = mysqli_query($connect,$requete);

    echo "<table border>";
    echo "<tr>";
    echo "<td><h2>nomCommun</h2></td>";
    echo "<td><h2>photo</h2></td>";

    echo "</tr>";

    while($ligne = mysqli_fetch_array($reponse))
    {
        //Affichage des lignes de données, champ par champ
        echo "<tr>";
        echo "<td><h3>".$ligne['nomCommun']."</h3></td>";
        echo "<td><h3>".$ligne['photo']."</h3></td>";

if ($ligne['photo']) 
            echo"<td><img src=images/photosUsers/".$ligne['photo']." height=40px width =40px> </td>";
else
            echo "<td><img src=images/photosUsers/anonyme.png height=40px width=40px> </td>";
        echo "</tr>";
    }
    echo "</table>";

    mysqli_free_result($reponse);

    mysqli_close($connect);
  ?>

</div>

</body>

</html>