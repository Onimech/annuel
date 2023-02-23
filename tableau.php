<!DOCTYPE HTML>

<html>
<head>
<meta charset="UTF8" />
<title> Bracket </title>
<link rel="stylesheet" media="screen" href="style.css">
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
    <h1> Quelques photos d'oiseaux </h1>
    <h2> Cette page propose quelques photos d'oiseaux.</h3>
    <p> Les images ci-dessous sont extraites de <a href="http://www.oiseaux.net/photos/robert.hendrick/bec-croise.des.sapins.5.html#monde">ce site </a>
    </p>
    </div>
<div class="tournament">
<table>
<tr>
  <td>
  <div id class="form text">ergyihgberherkibgrzike </div>
  </td>
  <td>
  </td>
  <td>
  </td>
  <td>
  </td>
  <td>
  <div id class="form text">ergyihgberherkibgrzike </div>
  </td>
</tr>
<tr>
  <td>
  <div id class="form text">ergyihgberherkibgrzike </div>
  </td>
  <td>
  <div id class="form text">ergyihgberherkibgrzike </div>
  </td>
  <td>
  <div id class="form text">ergyihgberherkibgrzike </div>
  </td>
  <td>
  <div id class="form text">ergyihgberherkibgrzike </div>
  </td>
  <td>
  <div id class="form text">ergyihgberherkibgrzike </div>
  </td>
</tr>
<tr>
  <td>
  <div id class="form text">ergyihgberherkibgrzike </div>
  </td>
  <td>
  <div id class="form text">ergyihgberherkibgrzike </div>
  </td>
  <td>
  </td>
  <td>
  <div id class="form text">ergyihgberherkibgrzike </div>
  </td>
  <td>
  <div id class="form text">ergyihgberherkibgrzike </div>
  </td>
</tr>
<tr>
  <td>
  <div id class="form text">ergyihgberherkibgrzike </div>
  </td>
  <td>
  </td>
  <td>
  </td>
  <td>
  </td>
  <td>
  <div id class="form text">ergyihgberherkibgrzike </div>
  </td>
</tr>
</table>  
</div>
    
        
  
    <? php
    //Connexion
    $user = 'root';
    $password = 'root';
    $db = 'projet a';
    $host = 'localhost';
 
    $connect = mysqli_connect($host, $user, $password, $db);

    if(mysqli_connect_errno())
    {
      echo "Fail to connect : ".nysqli_connect_errno();
    }
    //Ecriture de la requête 
    
    //Envoi de la requête
    $reponse = mysqli_query($connect,$requete);
    
    //while($ligne = mysqli_fetch_array($reponse))
    
    mysqli_free_result($reponse);

    mysqli_close($connect);
  ?>

</body>

</html>

