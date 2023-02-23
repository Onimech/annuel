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

    <div class="listJoueur">
        
    <?php

    //Connexion
    $user = 'root';
    $password = 'root';
    $db = 'nba_projet';
    $host = 'localhost';
 
    $connect = mysqli_connect($host, $user, $password, $db);
//si erreur
    if(mysqli_connect_errno())
        echo "Fail to connect :".mysqli_connect_errno();

    //Ecriture de la requête 
    $requete="SELECT * FROM `joueur`;";

    //Envoi de la requête
    $reponse = mysqli_query($connect,$requete);

    //premiere colonne tableau
    echo "<table border>";
    echo "<tr>";
    echo "<td><h2>Nom</h2></td>";
    echo "<td><h2>Prénom</h2></td>";
    echo "<td><h2>Âge</h2></td>";
    echo "<td><h2>Numéro maillot</h2></td>";
    echo "<td><h2>Poste</h2></td>";
    echo "<td><h2>Nombre de Titres</h2></td>";
    echo "<td><h2>Position Draft</h2></td>";
    echo "<td><h2>Année de Draft</h2></td>";
    echo "<td><h2>Equipe</h2></td>";

    echo "</tr>";
//données du tableau
    while($ligne = mysqli_fetch_array($reponse))
    {
        //Affichage des lignes de données, champ par champ
        echo "<tr>";
        echo "<td><h3>".$ligne['nomJoueur']."</h3></td>";
        echo "<td><h3>".$ligne['prenomJoueur']."</h3></td>";
        echo "<td><h3>".$ligne['age']."</h3></td>";
        echo "<td><h3>".$ligne['nMaillot']."</h3></td>";
        echo "<td><h3>".$ligne['Poste']."</h3></td>";
        echo "<td><h3>".$ligne['nTitres']."</h3></td>";
        echo "<td><h3>".$ligne['PosDraft']."</h3></td>";
        echo "<td><h3>".$ligne['AnDraft']."</h3></td>";
        echo "<td><h3>".$ligne['IdEquipe']."</h3></td>";
//comment récuperer le nom de l'équpe et pas l'id ??

    }
    echo "</table>";

    mysqli_free_result($reponse);

    mysqli_close($connect);
  ?>

</div>

</body>

</html>