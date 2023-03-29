<?php
include("ConnexionBDD.php");
session_start();



?><link rel="stylesheet" type="text/css" href="presentation.css"> 
<!DOCTYPE HTML>
<html>
<head>
    <meta charset="UTF-8" />
    
    <title> Présentation </title>
</head>
<body>
<?php
include("barre_menu.php");
?>
    <form method="GET" action="recherche.php"> 
     Rechercher un mot : <input type="text" name="query">
     <input type="SUBMIT" value="Rechercher"> 
     </form>

    <h1> C'est quoi les Playoff de la NBA ? </h1>
<h2>Les playoffs NBA (appelés séries éliminatoires au Canada) sont les séries éliminatoires de la National Basketball Association (NBA). Ils sont organisés en quatre tours et regroupent seize équipes, huit de chaque conférence (dans ce format depuis 1984). Les gagnants du premier tour (first round en anglais) accèdent aux demi-finales de conférence (Conference Semifinals en anglais), et les gagnants des demi-finales de conférence parviennent en finales de conférence (Conference Finals en anglais). Ensuite, les champions de chaque conférence se rencontrent lors des finales NBA (NBA Finals en anglais). Chaque série se joue au meilleur des sept matchsN 1, c'est-à-dire que la première équipe qui gagne 4 matchs remporte la série. </h2>
    </body>
</html>