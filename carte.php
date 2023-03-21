<!DOCTYPE HTML>

<html>
<head>
<meta charset="UTF-8" />
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

    
    <?php

    //Connexion à la BD
    $user = 'root';
    $password = 'root';
    $db = 'nba_projet';
    $host = 'localhost';
?>

    <center>
    <tbody><tr>
<h2>Équipes qualifiées</h2>
<center>
<table style="text-align:center;">
<td width="250px" rowspan="4"><table class="DebutCarte" style="width:auto; margin:0; border:none; border-spacing:0; padding:0; text-align:center;">
<tbody><tr><td style="border:none; padding:0"><div style="position:relative;;"><img src="//upload.wikimedia.org/wikipedia/commons/thumb/0/03/Usa_edcp_%28%2BHI_%2BAK%29_location_map.svg/600px-Usa_edcp_%28%2BHI_%2BAK%29_location_map.svg.png"  width="600" height="371"/></a>
<div style="position:absolute;top:63.719917694136%;left:21.156812616859%;"><div style="position:relative;top:-8px;left:-8px;width:16px;height:16px;background-color:transparent;"><img src="//upload.wikimedia.org/wikipedia/commons/thumb/f/f0/City_locator_3.svg/16px-City_locator_3.svg.png"  width="16" height="16" /></div><div style="position:relative;top:-17px;"><div style="font-size:100%;position:relative;top:-0.80em;left: 0.5em;text-align:left;width:12em;line-height:1.2em;"><a href="/wiki/Suns_de_Phoenix" title="Suns de Phoenix">Phoenix</a></div></div></div>
<div style="position:absolute;top:90.56877679549%;left:81.08873205974%;"><div style="position:relative;top:-8px;left:-8px;width:16px;height:16px;background-color:transparent;"><img src="//upload.wikimedia.org/wikipedia/commons/thumb/f/f0/City_locator_3.svg/16px-City_locator_3.svg.png"  width="16" height="16" /></div><div style="position:relative;top:-17px;"><div style="font-size:100%;position:relative;top:-0.80em;left:-12.6em;text-align:right;width:12em;line-height:1.2em;"><a href="/wiki/Heat_de_Miami" title="Heat de Miami">Miami</a></div></div></div>
<div style="position:absolute;top:61.292765070039%;left:60.634497374396%;"><div style="position:relative;top:-8px;left:-8px;width:16px;height:16px;background-color:transparent;"><img src="//upload.wikimedia.org/wikipedia/commons/thumb/f/f0/City_locator_3.svg/16px-City_locator_3.svg.png"  width="16" height="16" /></div><div style="position:relative;top:-17px;"><div style="font-size:100%;position:relative;top:-0.80em;left:-12.6em;text-align:right;width:12em;line-height:1.2em;"><a href="/wiki/Grizzlies_de_Memphis" title="Grizzlies de Memphis">Memphis</a></div></div></div>
<div style="position:absolute;top:69.997495604458%;left:48.550948123866%;"><div style="position:relative;top:-8px;left:-8px;width:16px;height:16px;background-color:transparent;"><img src="//upload.wikimedia.org/wikipedia/commons/thumb/f/f0/City_locator_3.svg/16px-City_locator_3.svg.png"  width="16" height="16" /></div><div style="position:relative;top:-17px;"><div style="font-size:100%;position:relative;top:-0.80em;left:-12.6em;text-align:right;width:12em;line-height:1.2em;"><a href="/wiki/Mavericks_de_Dallas" title="Mavericks de Dallas">Dallas</a></div></div></div>
<div style="position:absolute;top:33.214760679381%;left:62.787108068245%;"><div style="position:relative;top:-8px;left:-8px;width:16px;height:16px;background-color:transparent;"><img src="//upload.wikimedia.org/wikipedia/commons/thumb/f/f0/City_locator_3.svg/16px-City_locator_3.svg.png"  width="16" height="16" /></div><div style="position:relative;top:-17px;"><div style="font-size:100%;position:relative;top:-0.80em;left:-12.6em;text-align:right;width:12em;line-height:1.2em;"><a href="/wiki/Bucks_de_Milwaukee" title="Bucks de Milwaukee">Milwaukee</a></div></div></div>
<div style="position:absolute;top:29.869330189713%;left:89.756806693093%;"><div style="position:relative;top:-8px;left:-8px;width:16px;height:16px;background-color:transparent;"><img src="//upload.wikimedia.org/wikipedia/commons/thumb/f/f0/City_locator_3.svg/16px-City_locator_3.svg.png"  width="16" height="16" /></div><div style="position:relative;top:-17px;"><div style="font-size:100%;position:relative;top:-1.75em;left: -6em;text-align:center;width:12em;line-height:1.2em;"><a href="/wiki/Celtics_de_Boston" title="Celtics de Boston">Boston</a></div></div></div>
<div style="position:absolute;top:38.845898736532%;left:84.212302498974%;"><div style="position:relative;top:-8px;left:-8px;width:16px;height:16px;background-color:transparent;"><img src="//upload.wikimedia.org/wikipedia/commons/thumb/f/f0/City_locator_3.svg/16px-City_locator_3.svg.png"  width="16" height="16" /></div><div style="position:relative;top:-17px;"><div style="font-size:100%;position:relative;top: 0.00em;left: 0.6em;text-align:left;width:12em;line-height:1.2em;"><a href="/wiki/76ers_de_Philadelphie" title="76ers de Philadelphie">Philadelphie</a></div></div></div>
<div style="position:absolute;top:42.550979709184%;left:5.8304045175601%;"><div style="position:relative;top:-8px;left:-8px;width:16px;height:16px;background-color:transparent;"><img src="//upload.wikimedia.org/wikipedia/commons/thumb/f/f0/City_locator_3.svg/16px-City_locator_3.svg.png"  width="16" height="16" /></div><div style="position:relative;top:-17px;"><div style="font-size:100%;position:relative;top:-0.80em;left: 0.5em;text-align:left;width:12em;line-height:1.2em;"><a href="/wiki/Warriors_de_Golden_State" title="Warriors de Golden State">Golden State</a></div></div></div>
<div style="position:absolute;top:38.589198982217%;left:24.108726205448%;"><div style="position:relative;top:-8px;left:-8px;width:16px;height:16px;background-color:transparent;"><img src="//upload.wikimedia.org/wikipedia/commons/thumb/f/f0/City_locator_3.svg/16px-City_locator_3.svg.png"  width="16" height="16" /></div><div style="position:relative;top:-17px;"><div style="font-size:100%;position:relative;top:-1.75em;left: -6em;text-align:center;width:12em;line-height:1.2em;"><a href="/wiki/Jazz_de_l%27Utah" title="Jazz de l Utah">Utah</a></div></div></div>
<div style="position:absolute;top:37.148356711127%;left:63.434651293968%;"><div style="position:relative;top:-8px;left:-8px;width:16px;height:16px;background-color:transparent;"><img src="//upload.wikimedia.org/wikipedia/commons/thumb/f/f0/City_locator_3.svg/16px-City_locator_3.svg.png"  width="16" height="16" /></div><div style="position:relative;top:-17px;"><div style="font-size:100%;position:relative;top:-0.80em;left: 0.5em;text-align:left;width:12em;line-height:1.2em;"><a href="/wiki/Bulls_de_Chicago" title="Bulls de Chicago">Chicago</a></div></div></div>
<div style="position:absolute;top:28.300391117708%;left:75.974696932935%;"><div style="position:relative;top:-8px;left:-8px;width:16px;height:16px;background-color:transparent;"><img src="//upload.wikimedia.org/wikipedia/commons/thumb/f/f0/City_locator_3.svg/16px-City_locator_3.svg.png"  width="16" height="16" /></div><div style="position:relative;top:-17px;"><div style="font-size:100%;position:relative;top:-1.75em;left: -6em;text-align:center;width:12em;line-height:1.2em;"><a href="/wiki/Raptors_de_Toronto" title="Raptors de Toronto">Toronto</a></div></div></div>
<div style="position:absolute;top:45.80088330522%;left:35.693217669219%;"><div style="position:relative;top:-8px;left:-8px;width:16px;height:16px;background-color:transparent;"><img src="//upload.wikimedia.org/wikipedia/commons/thumb/f/f0/City_locator_3.svg/16px-City_locator_3.svg.png"  width="16" height="16" /></div><div style="position:relative;top:-17px;"><div style="font-size:100%;position:relative;top:-0.80em;left: 0.5em;text-align:left;width:12em;line-height:1.2em;"><a href="/wiki/Nuggets_de_Denver" title="Nuggets de Denver">Denver</a></div></div></div>
<div style="position:absolute;top:64.556929400136%;left:70.804814071608%;"><div style="position:relative;top:-8px;left:-8px;width:16px;height:16px;background-color:transparent;"><img src="//upload.wikimedia.org/wikipedia/commons/thumb/f/f0/City_locator_3.svg/16px-City_locator_3.svg.png"  width="16" height="16" /></div><div style="position:relative;top:-17px;"><div style="font-size:100%;position:relative;top:-0.80em;left: 0.5em;text-align:left;width:12em;line-height:1.2em;"><a href="/wiki/Hawks_d%27Atlanta" title="Hawks d Atlanta">Atlanta</a></div></div></div>
<div style="position:absolute;top:79.424249544845%;left:62.026922634514%;"><div style="position:relative;top:-8px;left:-8px;width:16px;height:16px;background-color:transparent;"><img src="//upload.wikimedia.org/wikipedia/commons/thumb/f/f0/City_locator_3.svg/16px-City_locator_3.svg.png"  width="16" height="16" /></div><div style="position:relative;top:-17px;"><div style="font-size:100%;position:relative;top:-1.75em;left: -6em;text-align:center;width:12em;line-height:1.2em;"><a href="/wiki/Pelicans_de_La_Nouvelle-Orl%C3%A9ans" title="Pelicans de La Nouvelle-Orléans">La Nouvelle-Orléans</a></div></div></div>
<div style="position:absolute;top:35.647436621582%;left:85.822299939993%;"><div style="position:relative;top:-8px;left:-8px;width:16px;height:16px;background-color:transparent;"><img src="//upload.wikimedia.org/wikipedia/commons/thumb/f/f0/City_locator_3.svg/16px-City_locator_3.svg.png"  width="16" height="16" /></div><div style="position:relative;top:-17px;"><div style="font-size:100%;position:relative;top:-0.80em;left: 0.5em;text-align:left;width:12em;line-height:1.2em;"><a href="/wiki/Nets_de_Brooklyn" title="Nets de Brooklyn">Brooklyn</a></div></div></div>
<div style="position:absolute;top:28.585721604499%;left:54.401099954019%;"><div style="position:relative;top:-8px;left:-8px;width:16px;height:16px;background-color:transparent;"><img src="//upload.wikimedia.org/wikipedia/commons/thumb/f/f0/City_locator_3.svg/16px-City_locator_3.svg.png"  width="16" height="16" /></div><div style="position:relative;top:-17px;"><div style="font-size:100%;position:relative;top:-1.75em;left: -6em;text-align:center;width:12em;line-height:1.2em;"><a href="/wiki/Timberwolves_du_Minnesota" title="Timberwolves du Minnesota">Minneapolis</a></div></div></div>
</div></td></tr></tbody></table>
</td></tr></tbody></table></center>

   
</body>

</html>

