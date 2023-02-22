<!DOCTYPE HTML>

<html>
<head>
<meta charset="UTF-8" />
<title> Utilisateurs </title>
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

    
    <?php

    //Connexion à la BD
    $user = 'root';
    $password = 'root';
    $db = 'oiseaux';
    $host = 'localhost';

    $con = mysqli_connect($host, $user, $password, $db);

    if(mysqli_connect_errno())
        echo "Fail to connect :".mysqli_connect_errno();

    $requete1="SELECT pseudo FROM Utilisateur;";
    $reponse1 = mysqli_query($con,$requete1);

    echo "<h1> Utilisateur</h1>";
    echo "<form method=\"post\">";
    echo "<select name=\"menuUser\" id=\"menuUser\">";
    while($ligne = mysqli_fetch_array($reponse1))
        echo "<option value=\"".$ligne['pseudo']."\">".$ligne['pseudo']."</option>";

    mysqli_free_result($reponse1);

    echo "</select>";
    echo "<input type=\"submit\" name=\"afficher\"  value=\"Afficher\"/>";
    echo "</form>";


    $selected=$_POST['menuUser'];
    if(!$selected)
        $selected = '';

    echo "<BR><BR>";

    /***************************************************************************/
    // ****** Exercice 3 : Affichage des informations d'un utilisateur ****** //
    /***************************************************************************/

/* -> à enlever pour passer à l'exercice 3

    // Todo : Ecrire la requête pour récupérer l'utilisateur dont le pseudo est stocké dans la variable $selected
    // Todo : Envoyer au serveur pour générer la réponse
    // ici votre code de la requête et génération de la réponse
    $requete2="";

    echo "<div class=\"user\">";

    // Todo : Traiter la réponse ligne par ligne afin d'afficher dans un tableau:
    // 1ère ligne : la photo de l'utilisateur
    // 2ème ligne : le pseudo de l'utilisateur en l'affichant avec un titre en h3
    // 3ème ligne : Nom (en gras) : le nom de l'utilisateur
    // 4ème ligne : Prénom (en gras) : le prénom de l'utilisateur

    if($ligne['nom']){

        echo "<table>";
        echo "<td align=center bgcolor=\"#E3F6CE\" width=\"200px\" height=\"10px\" rowspan=\"1\" colspan=\"5\"> <h2>Profil </h2></td>";

        // Ici votre code pour afficher les informations de l'utilisateur dans le tableau

        echo "</table>";
    }
    mysqli_free_result($reponse2);
    echo "</div>";
à enlever pour passer à l'exercice 3 -> */

/* -> à enlever pour passer à l'exercice 4

    if($ligne['nom']){

        //************************************************************************** //
        // ****** Exercice 4 : Affichage des amis d'un utilisateur ****** //
        //************************************************************************* //

        // Todo : Ecrire la requête pour récupérer les amis de l'utilisateur dont le pseudo est stocké dans la variable $selected
        // Todo : Envoyer au serveur pour générer la réponse
        // ici votre code de la requête et génération de la réponse


        $requete3="";

        echo "<div class=\"infoUser\">";

        echo "<table>";
        echo "<td align=center bgcolor=\"#E3F6CE\" width=\"1000px\" height=\"10px\" rowspan=\"1\" colspan=\"5\"> <h2>Ses amis </h2></td>";
    
         // Todo : Traiter la réponse ligne par ligne afin d'afficher dans un tableau les amis de l'utilisateur avec 2 colonnes maxi
         // Chaque colonne affiche un ami :
             // la photo de l'ami de l'utilisateur
             // le nom et le prénom de l'utilisateur ami en l'affichant avec un titre en h3
        // Si l'utilisateur n'a aucun ami : le message "Aucun ami" est affichant dans la 1ère ligne du tableau


        // ici : votre code pour afficher le tableau

        echo "</table>";

        // libération du tableau de réponse
        mysqli_free_result($reponse3);
       
        echo "</div>";

à enlever pour passer à l'exercice 4 -> */

        //**************************************************************************//
        // ****** Exercice 5 : Affichage des oiseaux d'un utilisateur ****** //
        //*************************************************************************//

        // Todo : Ecrire la requête pour récupérer les oiseaux de l'utilisateur dont le pseudo est stocké dans la variable $selected
        // Todo : Envoyer au serveur pour générer la réponse
        // ici votre code de la requête et génération de la réponse

/* -> à enlever pour passer à l'exercice 5

        $requete4="";

        echo "<div class=\"infoUser\">";

        echo "<table>";
        echo "<td align=center bgcolor=\"#E3F6CE\" width=\"1000px\" height=\"10px\" rowspan=\"1\" colspan=\"5\"> <h2>Ses oiseaux </h2></td>";
        echo "<tr>";
        
        // Todo : Traiter la réponse ligne par ligne afin d'afficher dans un tableau les oiseaux de l'utilisateur avec 2 colonnes maxi.
        // Chaque colonne affiche un oiseau:
            //  la photo de l'oiseau de l'utilisateur
            //  le nom commun de l'oiseau de l'utilisateur en l'affichant avec un titre en h3
        // Si l'utilisateur n'a aucun oiseau : le message "Aucun oiseau" est affiché dans la 1ère ligne du tableau

        // ici : votre code pour afficher le tableau

        echo "</tr>";
        mysqli_free_result($reponse4);
        echo "</table>";
        echo "</div>";
        }
à enlever pour passer à l'exercice 5 -> */

    mysqli_close($con);
?>

</body>

</html>

