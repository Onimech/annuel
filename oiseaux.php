<!DOCTYPE HTML>

<html>
<head>
<meta charset="UTF8" />
<title> Oiseaux </title>
<link rel="stylesheet" media="screen" href="style.css">
</head>
<body> 
    <ul>
            <li> <a href="index.php">Accueil</a> </li>
            <li> <a href="presentation.php">C'est quoi les Playoff de la NBA?</a> </li>
            <li> <a href="oiseaux.php">Tableau Séries</a> </li>
            <li> <a href="profil.php">Carte Intéractive</a> </li>
            <li> <a href="utilisateurs.php">Liste utilisateurs</a> </li>
    </ul>
    <h1> Quelques photos d'oiseaux </h1>
    <h2> Cette page propose quelques photos d'oiseaux.</h3>
    <p> Les images ci-dessous sont extraites de <a href="http://www.oiseaux.net/photos/robert.hendrick/bec-croise.des.sapins.5.html#monde">ce site </a>
    </p>

    <div class="listOiseaux">
        
  
    <? php
    //Connexion
    $user = 'root';
    $password = 'root';
    $db = 'oiseaux';
    $host = 'localhost';
 
    $connect = mysqli_connect($host, $user, $password, $db);

    if(mysqli_connect_errno())
    {
      echo "Fail to connect : ".nysqli_connect_errno();
    }
    //Ecriture de la requête 
    $requete="SELECT nomCommun, photo FROM oiseau;";
    //Envoi de la requête
    $reponse = mysqli_query($connect,$requete);
    echo "<table>";
    while($ligne = mysqli_fetch_array($reponse))
    {
        echo "<tr>";
        echo "<td><h3>".$ligne['nomCommun']."</h3></td>";
        echo "<td><img src=images/photosOiseaux/".$ligne['photo']."</td>";
        echo "</tr>";
    }
    echo "</table>";
    echo "SAlut tlm c ninho";

    mysqli_free_result($reponse);

    mysqli_close($connect);
  ?>
</div>

</body>

</html>

