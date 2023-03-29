<ul>
            <ul>
            <li> <a class="barre"href="index.php">Accueil</a> </li>
            <li> <a class="barre"href="presentation.php">C'est quoi les Playoff de la NBA?</a> </li>
            <li> <a class="barre"href="tableau.php">Tableau Séries</a> </li>
            <li> <a class="barre"href="carte.php">Carte Intéractive</a> </li>
            <li> <a class="barre"href="equipes.php">Liste Equipes</a> </li>
            <li> <a class="barre"href="joueurs.php">Liste Joueurs</a> </li>
            <li> <a class="barre"href="coachs.php">Liste Coachs</a> </li>
        <?php if (isset($_SESSION['mail'])){
        ?><li> <a class="barre"href="deco.php">Deconnexion</a> </li> <?php

        }
        else {

            ?><li> <a class="barre"href="connexion.php">Connexion</a> </li> <?php

        }
        ?>
            </ul>
    </ul>