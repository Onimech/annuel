<!DOCTYPE HTML>
<html>
<head>
<meta charset="UTF8" />
<title> Accueil </title>
<link rel="stylesheet" media="screen" href="mise_en_page.css">
</head>
<body  background="images/oiseauFond.jpg"> 
<h1> Playoffs NBA</h1>
<form method="GET" action="recherche.php"> 
     Rechercher un mot : <input type="text" name="query">
     <input type="SUBMIT" value="Rechercher"> 
     </form>
    <ul>
            <ul>
            <li> <a href="index.php">Accueil</a> </li>
            <li> <a href="presentation.php">C'est quoi les Playoff de la NBA?</a> </li>
            <li> <a href="tableau2.php">Tableau Séries</a> </li>
            <li> <a href="carte.php">Carte Intéractive</a> </li>
            <li> <a href="equipes.php">Liste Equipes</a> </li>
            <li> <a href="joueurs.php">Liste Joueurs</a> </li>
            <li> <a href="coachs.php">Liste Coachs</a> </li>
            <li> <a href="connexion.php">Se connecter</a> </li>
            </ul>
            
    </ul>
    <?php
    function recherche_texte($chaine, $texte) {
    $occurrences = array();
    $index = 0;
    while (($index = strpos($texte, $chaine, $index)) !== false) {
        $occurrences[] = $index;
        $index += strlen($chaine);
    }
    return $occurrences;
}
?>
    <h1>Bracket </h1>
<table border="0" cellpadding="0" cellspacing="0" style="font-size: 90%; margin:1em 2em 1em 1em;">
<tbody><tr>
<td>&#160;
</td>
<td align="center" colspan="3" style="border:1px solid #aaa;" bgcolor="#f2f2f2"><b><abbr class="abbr" title="Premier"><sup></sup></abbr>Quart de finales de conférence</b>
</td>
<td colspan="2">
</td>
<td align="center" colspan="3" style="border:1px solid #aaa;" bgcolor="#f2f2f2"><b>Demi-finales de Conférence</b>
</td>
<td colspan="2">
</td>
<td align="center" colspan="3" style="border:1px solid #aaa;" bgcolor="#f2f2f2"><b>Finales de Conférence</b>
</td>
<td colspan="2">
</td>
<td align="center" colspan="3" style="border:1px solid #aaa;" bgcolor="#f2f2f2"><b>Finales NBA</b>
</td></tr>
<tr>
<td width="35">&#160;
</td>
<td width="50">&#160;
</td>
<td width="200">&#160;
</td>
<td width="50">&#160;
</td>
<td width="15">&#160;
</td>
<td width="15">&#160;
</td>
<td width="50">&#160;
</td>
<td width="200">&#160;
</td>
<td width="50">&#160;
</td>
<td width="15">&#160;
</td>
<td width="15">&#160;
</td>
<td width="50">&#160;
</td>
<td width="200">&#160;
</td>
<td width="50">&#160;
</td>
<td width="15">&#160;
</td>
<td width="5">&#160;
</td>
<td width="50">&#160;
</td>
<td width="200">&#160;
</td>
<td width="50">&#160;
</td></tr>
<tr>
<td height="7">
</td>
<td align="center" bgcolor="#00008b" style="border:1px solid #600;"><span style="color:#ffffff">1</span>
</td>
<td style="border:1px solid #600;" bgcolor="#87cefa">&#160;Miami heats
</td>
<td align="center" style="border:1px solid #600;" bgcolor="#87cefa">
</td>
<td align="center" style="border-width:0 0 2px 0; border-style:solid;border-color:black;">&#160;
</td></tr>
<tr>
<td height="7">
</td>
<td rowspan="2" align="center" bgcolor="#00008b" style="border:1px solid #600;"><span style="color:#ffffff">8</span>
</td>
<td rowspan="2" style="border:1px solid #600;" bgcolor="#87cefa">&#160;
</td>
<td rowspan="2" align="center" style="border:1px solid #600;" bgcolor="#87cefa">
</td>
<td rowspan="6" align="center" style="border-width:2px 2px 2px 0; border-style:solid;border-color:black;">&#160;
</td></tr>
<tr>
<td height="7">
</td>
<td rowspan="2" align="center" style="border-width:0 0 2px 0; border-style:solid;border-color:black;">&#160;
</td>
<td rowspan="2" align="center" bgcolor="#00008b" style="border:1px solid #600;"><span style="color:#ffffff"></span>
</td>
<td rowspan="2" style="border:1px solid #600;" bgcolor="#87cefa">&#160;
</td>
<td rowspan="2" align="center" style="border:1px solid #600;" bgcolor="#87cefa">
</td>
<td rowspan="2" align="center" style="border-width:0 0 2px 0; border-style:solid;border-color:black;">&#160;
</td></tr>
<tr>
<td height="7">
</td>
<td rowspan="2" colspan="3">
</td></tr>
<tr>
<td height="7">
</td>
<td rowspan="2" align="center" style="border-width:2px 0 0 0; border-style:solid;border-color:black;">&#160;
</td>
<td rowspan="2" align="center" bgcolor="#00008b" style="border:1px solid #600;"><span style="color:#ffffff"></span>
</td>
<td rowspan="2" style="border:1px solid #600;" bgcolor="#87cefa">&#160;
</td>
<td rowspan="2" align="center" style="border:1px solid #600;" bgcolor="#87cefa">
</td>
<td rowspan="12" align="center" style="border-width:2px 2px 2px 0; border-style:solid;border-color:black;">&#160;
</td></tr>
<tr>
<td height="7">
</td>
<td rowspan="2" align="center" bgcolor="#00008b" style="border:1px solid #600;"><span style="color:#ffffff">4</span>
</td>
<td rowspan="2" style="border:1px solid #600;" bgcolor="#87cefa">&#160;
</td>
<td rowspan="2" align="center" style="border:1px solid #600;" bgcolor="#87cefa">
</td></tr>
<tr>
<td height="7">
</td></tr>
<tr>
<td height="7">
</td>
<td rowspan="2" align="center" bgcolor="#00008b" style="border:1px solid #600;"><span style="color:#ffffff">5</span>
</td>
<td rowspan="2" style="border:1px solid #600;" bgcolor="#87cefa">&#160;
</td>
<td rowspan="2" align="center" style="border:1px solid #600;" bgcolor="#87cefa">
</td>
<td rowspan="2" align="center" style="border-width:2px 0 0 0; border-style:solid;border-color:black;">&#160;
</td></tr>
<tr>
<td height="7">
</td>
<td colspan="5">
</td>
<td rowspan="2" align="center" style="border-width:0 0 2px 0; border-style:solid;border-color:black;">&#160;
</td>
<td rowspan="2" align="center" bgcolor="#00008b" style="border:1px solid #600;"><span style="color:#ffffff"></span>
</td>
<td rowspan="2" style="border:1px solid #600;" bgcolor="#87cefa">&#160;
</td>
<td rowspan="2" align="center" style="border:1px solid #600;" bgcolor="#87cefa">
</td>
<td rowspan="2" align="center" style="border-width:0 0 2px 0; border-style:solid;border-color:black;">&#160;
</td></tr>
<tr>
<td height="7">
</td>
<td rowspan="2" colspan="8" align="center"><b><title="Conférence Est de la NBA">Conférence Est</b>
</td></tr>
<tr>
<td height="7">
</td>
<td rowspan="2" align="center" style="border-width:2px 0 0 0; border-style:solid;border-color:black;">&#160;
</td>
<td rowspan="2" align="center" bgcolor="#00008b" style="border:1px solid #600;"><span style="color:#ffffff"></span>
</td>
<td rowspan="2" style="border:1px solid #600;" bgcolor="#87cefa">&#160;
</td>
<td rowspan="2" align="center" style="border:1px solid #600;" bgcolor="#87cefa">
</td>

<td rowspan="24" align="center" style="border-width:2px 2px 2px 0; border-style:solid;border-color:black;">&#160;
</td></tr>
<tr>
<td height="7">
</td>
<td rowspan="2" align="center" bgcolor="#00008b" style="border:1px solid #600;"><span style="color:#ffffff">3</span>
</td>
<td rowspan="2" style="border:1px solid #600;" bgcolor="#87cefa">&#160;
</td>
<td rowspan="2" align="center" style="border:1px solid #600;" bgcolor="#87cefa">
</td>
<td rowspan="2" align="center" style="border-width:0 0 2px 0; border-style:solid;border-color:black;">&#160;
</td></tr>
<tr>
<td height="7">
</td></tr>
<tr>
<td height="7">
</td>
<td rowspan="2" align="center" bgcolor="#00008b" style="border:1px solid #600;"><span style="color:#ffffff">6</span>
</td>
<td rowspan="2" style="border:1px solid #600;" bgcolor="#87cefa">&#160;
</td>
<td rowspan="2" align="center" style="border:1px solid #600;" bgcolor="#87cefa">
</td>
<td rowspan="6" align="center" style="border-width:2px 2px 2px 0; border-style:solid;border-color:black;">&#160;
</td></tr>
<tr>
<td height="7">
</td>
<td rowspan="2" align="center" style="border-width:0 0 2px 0; border-style:solid;border-color:black;">&#160;
</td>
<td rowspan="2" align="center" bgcolor="#00008b" style="border:1px solid #600;"><span style="color:#ffffff"></span>
</td>
<td rowspan="2" style="border:1px solid #600;" bgcolor="#87cefa">&#160;
</td>
<td rowspan="2" align="center" style="border:1px solid #600;" bgcolor="#87cefa">
</td></tr>
<tr>
<td height="7">
</td>
<td rowspan="2" colspan="3">
</td></tr>
<tr>
<td height="7">
</td>
<td rowspan="2" align="center" style="border-width:2px 0 0 0; border-style:solid;border-color:black;">&#160;
</td>
<td rowspan="2" align="center" bgcolor="#00008b" style="border:1px solid #600;"><span style="color:#ffffff"></span>
</td>
<td rowspan="2" style="border:1px solid #600;" bgcolor="#87cefa">&#160;
</td>
<td rowspan="2" align="center" style="border:1px solid #600;" bgcolor="#87cefa">
</td>
<td rowspan="12" align="center" style="border-width:2px 0 2px 0; border-style:solid;border-color:black;">&#160;
</td></tr>
<tr>
<td height="7">
</td>
<td rowspan="2" align="center" bgcolor="#00008b" style="border:1px solid #600;"><span style="color:#ffffff">2</span>
</td>
<td rowspan="2" style="border:1px solid #600;" bgcolor="#87cefa">&#160;
</td>
<td rowspan="2" align="center" style="border:1px solid #600;" bgcolor="#87cefa">
</td></tr>
<tr>
<td height="7">
</td></tr>
<tr>
<td height="7">
</td>
<td rowspan="2" align="center" bgcolor="#00008b" style="border:1px solid #600;"><span style="color:#ffffff">7</span>
</td>
<td rowspan="2" style="border:1px solid #600;" bgcolor="#87cefa">&#160;
</td>
<td rowspan="2" align="center" style="border:1px solid #600;" bgcolor="#87cefa">
</td>
<td rowspan="2" align="center" style="border-width:2px 0 0 0; border-style:solid;border-color:black;">&#160;
</td></tr>
<tr>
<td height="7">
</td>
<td colspan="10">
</td>
<td rowspan="2" align="center" style="border-width:0 0 2px 0; border-style:solid;border-color:black;">&#160;
</td>
<td rowspan="2" align="center" bgcolor="#00008b" style="border:1px solid #600;"><span style="color:#ffffff">E</span>
</td>
<td rowspan="2" style="border:1px solid #600;" bgcolor="#87cefa">&#160;
</td>
<td rowspan="2" align="center" style="border:1px solid #600;" bgcolor="#87cefa">
</td></tr>
<tr>
<td rowspan="2">
</td>
<td height="7">
</td>
<td rowspan="2" colspan="13">
</td></tr>
<tr>
<td height="7">
</td>
<td rowspan="2" align="center" style="border-width:2px 0 0 0; border-style:solid;border-color:black;">&#160;
</td>
<td rowspan="2" align="center" bgcolor="#8b0000" style="border:1px solid #006;"><span style="color:#ffffff">W</span>
</td>
<td rowspan="2" style="border:1px solid #006;" bgcolor="#ffaeb9">&#160;
</td>
<td rowspan="2" align="center" style="border:1px solid #006;" bgcolor="#ffaeb9">
</td></tr>
<tr>
<td height="7">
</td>
<td rowspan="2" align="center" bgcolor="#8b0000" style="border:1px solid #006;"><span style="color:#ffffff">1</span>
</td>
<td rowspan="2" style="border:1px solid #006;" bgcolor="#ffaeb9">&#160;
</td>
<td rowspan="2" align="center" style="border:1px solid #006;" bgcolor="#ffaeb9">
</td>
<td rowspan="2" align="center" style="border-width:0 0 2px 0; border-style:solid;border-color:black;">&#160;
</td></tr>
<tr>
<td height="7">
</td></tr>
<tr>
<td height="7">
</td>
<td rowspan="2" align="center" bgcolor="#8b0000" style="border:1px solid #006;"><span style="color:#ffffff">8</span>
</td>
<td rowspan="2" style="border:1px solid #006;" bgcolor="#ffaeb9">&#160;
</td>
<td rowspan="2" align="center" style="border:1px solid #006;" bgcolor="#ffaeb9">
</td>
<td rowspan="6" align="center" style="border-width:2px 2px 2px 0; border-style:solid;border-color:black;">&#160;
</td></tr>
<tr>
<td height="7">
</td>
<td rowspan="2" align="center" style="border-width:0 0 2px 0; border-style:solid;border-color:black;">&#160;
</td>
<td rowspan="2" align="center" bgcolor="#8b0000" style="border:1px solid #006;"><span style="color:#ffffff"></span>
</td>
<td rowspan="2" style="border:1px solid #006;" bgcolor="#ffaeb9">&#160;
</td>
<td rowspan="2" align="center" style="border:1px solid #006;" bgcolor="#ffaeb9">
</td></tr>
<tr>
<td height="7">
</td>
<td rowspan="2" colspan="3">
</td></tr>
<tr>
<td height="7">
</td>
<td rowspan="2" align="center" style="border-width:2px 0 0 0; border-style:solid;border-color:black;">&#160;
</td>
<td rowspan="2" align="center" bgcolor="#8b0000" style="border:1px solid #006;"><span style="color:#ffffff"></span>
</td>
<td rowspan="2" style="border:1px solid #006;" bgcolor="#ffaeb9">&#160;
</td>
<td rowspan="2" align="center" style="border:1px solid #006;" bgcolor="#ffaeb9">
</td>
<td rowspan="12" align="center" style="border-width:2px 2px 2px 0; border-style:solid;border-color:black;">&#160;
</td></tr>
<tr>
<td height="7">
</td>
<td rowspan="2" align="center" bgcolor="#8b0000" style="border:1px solid #006;"><span style="color:#ffffff">4</span>
</td>
<td rowspan="2" style="border:1px solid #006;" bgcolor="#ffaeb9">&#160;
</td>
<td rowspan="2" align="center" style="border:1px solid #006;" bgcolor="#ffaeb9">
</td></tr>
<tr>
<td height="7">
</td></tr>
<tr>
<td height="7">
</td>
<td rowspan="2" align="center" bgcolor="#8b0000" style="border:1px solid #006;"><span style="color:#ffffff">5</span>
</td>
<td rowspan="2" style="border:1px solid #006;" bgcolor="#ffaeb9">&#160;
</td>
<td rowspan="2" align="center" style="border:1px solid #006;" bgcolor="#ffaeb9">
</td>
<td rowspan="2" align="center" style="border-width:2px 0 0 0; border-style:solid;border-color:black;">&#160;
</td></tr>
<tr>
<td height="7">
</td>
<td colspan="5">
</td>
<td rowspan="2" align="center" style="border-width:0 0 2px 0; border-style:solid;border-color:black;">&#160;
</td>
<td rowspan="2" align="center" bgcolor="#8b0000" style="border:1px solid #006;"><span style="color:#ffffff"></span>
</td>
<td rowspan="2" style="border:1px solid #006;" bgcolor="#ffaeb9">&#160;
</td>
<td rowspan="2" align="center" style="border:1px solid #006;" bgcolor="#ffaeb9">
</td></tr>
<tr>
<td height="7">
</td>
<td rowspan="2" colspan="8" align="center"><b><title="Conférence Ouest de la NBA">Conférence Ouest</b>
</td></tr>
<tr>
<td height="7">
</td>
<td rowspan="2" align="center" style="border-width:2px 0 0 0; border-style:solid;border-color:black;">&#160;
</td>
<td rowspan="2" align="center" bgcolor="#8b0000" style="border:1px solid #006;"><span style="color:#ffffff"></span>
</td>
<td rowspan="2" style="border:1px solid #006;" bgcolor="#ffaeb9">&#160;
</td>
<td rowspan="2" align="center" style="border:1px solid #006;" bgcolor="#ffaeb9">
</td>
<td rowspan="2" align="center" style="border-width:2px 0 0 0; border-style:solid;border-color:black;">&#160;
</td></tr>
<tr>
<td height="7">
</td>
<td rowspan="2" align="center" bgcolor="#8b0000" style="border:1px solid #006;"><span style="color:#ffffff">3</span>
</td>
<td rowspan="2" style="border:1px solid #006;" bgcolor="#ffaeb9">&#160;
</td>
<td rowspan="2" align="center" style="border:1px solid #006;" bgcolor="#ffaeb9">
</td>
<td rowspan="2" align="center" style="border-width:0 0 2px 0; border-style:solid;border-color:black;">&#160;
</td></tr>
<tr>
<td height="7">
</td></tr>
<tr>
<td height="7">
</td>
<td rowspan="2" align="center" bgcolor="#8b0000" style="border:1px solid #006;"><span style="color:#ffffff">6</span>
</td>
<td rowspan="2" style="border:1px solid #006;" bgcolor="#ffaeb9">&#160;
</td>
<td rowspan="2" align="center" style="border:1px solid #006;" bgcolor="#ffaeb9">
</td>
<td rowspan="6" align="center" style="border-width:2px 2px 2px 0; border-style:solid;border-color:black;">&#160;
</td></tr>
<tr>
<td height="7">
</td>
<td rowspan="2" align="center" style="border-width:0 0 2px 0; border-style:solid;border-color:black;">&#160;
</td>
<td rowspan="2" align="center" bgcolor="#8b0000" style="border:1px solid #006;"><span style="color:#ffffff"></span>
</td>
<td rowspan="2" style="border:1px solid #006;" bgcolor="#ffaeb9">&#160;
</td>
<td rowspan="2" align="center" style="border:1px solid #006;" bgcolor="#ffaeb9">
</td></tr>
<tr>
<td height="7">
</td>
<td rowspan="2" colspan="3">
</td></tr>
<tr>
<td height="7">
</td>
<td rowspan="2" align="center" style="border-width:2px 0 0 0; border-style:solid;border-color:black;">&#160;
</td>
<td rowspan="2" align="center" bgcolor="#8b0000" style="border:1px solid #006;"><span style="color:#ffffff"></span>
</td>
<td rowspan="2" style="border:1px solid #006;" bgcolor="#ffaeb9">&#160;
</td>
<td rowspan="2" align="center" style="border:1px solid #006;" bgcolor="#ffaeb9">
</td>
<td rowspan="2" align="center" style="border-width:2px 0 0 0; border-style:solid;border-color:black;">&#160;
</td></tr>
<tr>
<td height="7">
</td>
<td rowspan="2" align="center" bgcolor="#8b0000" style="border:1px solid #006;"><span style="color:#ffffff">2</span>
</td>
<td rowspan="2" style="border:1px solid #006;" bgcolor="#ffaeb9">&#160;
</td>
<td rowspan="2" align="center" style="border:1px solid #006;" bgcolor="#ffaeb9">
</td></tr>
<tr>
<td height="7">
</td></tr>
<tr>
<td height="7">
</td>
<td align="center" bgcolor="#8b0000" style="border:1px solid #006;"><span style="color:#ffffff">7</span>
</td>
<td style="border:1px solid #006;" bgcolor="#ffaeb9">&#160;
</td>
<td align="center" style="border:1px solid #006;" bgcolor="#ffaeb9">
</td>
<td align="center" style="border-width:2px 0 0 0; border-style:solid;border-color:black;">&#160;
</td></tr></tbody></table>