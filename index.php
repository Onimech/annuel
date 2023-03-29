<?php
include("ConnexionBDD.php");
session_start();


?>
<!DOCTYPE HTML>
<html>
<head>
<meta charset="UTF8" />
<title> Accueil </title>
<link rel="stylesheet" media="screen" href="accueil.css">
</head>
<body  background="images/oiseauFond.jpg"> 
<?php
include("barre_menu.php");
?>
    <form method="GET" action="recherche.php"> 
     Rechercher un mot : <input type="text" name="query">
     <input type="SUBMIT" value="Rechercher"> 
     </form>
    <h1> Les Playoff de la NBA</h1>
    <h4> Ceci est un site retraçant les Playoff de la NBA de la saison dernière (2021-2022)</h4>
    
    <div class="pres_info"> LOREM IPSUM</a>
    <h2> TEXTE !</h2>
    <div class="info">TEST.</p>
    </div>
    </div>
</body>
</html>