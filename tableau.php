<?php
include("ConnexionBDD.php");
session_start();
?>

<!DOCTYPE HTML>
<html>
<head>
<meta charset="UTF8" />
<title> Tournoi </title>
<link rel="stylesheet" media="screen" href="tableau.css">

</head>
<body> 


    <div class="nav-container">
    <?php
include("barre_menu.php");
?>
    </div>
  
    <div class="search-container">
        <form>
            <input type="text" placeholder="Recherche...">
            <input type="submit" value="Rechercher">
        </form>
    </div>

<?php



  // Requête SQL pour chercher les résultats correspondants
  $sql = "SELECT * FROM equipe ";

  // Préparation de la requête SQL
  $stmt = $connexion->prepare($sql);
  $stmt->execute();

  // Fermeture de la connexion à la base de données
  $pdo = null;
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
<div> 
<tr onclick="location.href='serie.php?serie=QFC1'"> <!-- c'est pour rendre la cellule cliquable-->
<td height="7">
</td>

<td align="center" bgcolor="#00008b" style="border:1px solid #600;"><span style="color:#ffffff">1</span>
</td>
<td style="border:1px solid #600;" bgcolor="#87cefa">&#160;<?php  $row = $stmt->fetch(1); echo "<p>" . $row['nomEquipe'] . "</p>";?>
</td>
<td align="center" style="border:1px solid #600;" bgcolor="#87cefa"><?php echo "<p>" . $row['ABRequipe'] . "</p>";?>
</td>
<td align="center" style="border-width:0 0 2px 0; border-style:solid;border-color:black;">&#160;
</td></tr>
<tr onclick="location.href='serie.php?serie=QFC1'">
<td height="7">
</td>
<td rowspan="2" align="center" bgcolor="#00008b" style="border:1px solid #600;"><span style="color:#ffffff">8</span>
</td>
<td rowspan="2" style="border:1px solid #600;" bgcolor="#87cefa">&#160; <?php  $row = $stmt->fetch(); echo "<p>" . $row['nomEquipe'] . "</p>";?>
</td>
<td rowspan="2" align="center" style="border:1px solid #600;" bgcolor="#87cefa"> <?php echo "<p>" . $row['ABRequipe'] . "</p>";?>
</td>
<td rowspan="6" align="center" style="border-width:2px 2px 2px 0; border-style:solid;border-color:black;">&#160;
</td></tr></div>
<tr onclick="location.href='serie.php?serie=DFC1'">
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
<tr onclick="location.href='serie.php?serie=DFC1'">
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
<tr onclick="location.href='serie.php?serie=QFC2'">
<td height="7">
</td>
<td rowspan="2" align="center" bgcolor="#00008b" style="border:1px solid #600;"><span style="color:#ffffff">4</span>
</td>
<td rowspan="2" style="border:1px solid #600;" bgcolor="#87cefa">&#160;<?php  $row = $stmt->fetch(); echo "<p>" . $row['nomEquipe'] . "</p>";?>
</td>
<td rowspan="2" align="center" style="border:1px solid #600;" bgcolor="#87cefa"><?php echo "<p>" . $row['ABRequipe'] . "</p>";?>
</td></tr>
<tr>
<td height="7">
</td></tr>
<tr onclick="location.href='serie.php?serie=QFC2'">
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
<tr onclick="location.href='serie.php?serie=FC1'">
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
<tr onclick="location.href='serie.php?serie=FC1'">
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
<tr onclick="location.href='serie.php?serie=QFC3'">
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
<tr onclick="location.href='serie.php?serie=QFC3'">
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
<tr onclick="location.href='serie.php?serie=DFC2'">
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
<tr onclick="location.href='serie.php?serie=DFC2'">
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
<tr onclick="location.href='serie.php?serie=QFC4'">
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
<tr onclick="location.href='serie.php?serie=QFC4'">
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
<tr onclick="location.href='serie.php?serie=FNBA'">
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
<tr onclick="location.href='serie.php?serie=FNBA'">
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
<tr onclick="location.href='serie.php?serie=QFC5'">
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
<tr onclick="location.href='serie.php?serie=QFC5'">
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
<tr onclick="location.href='serie.php?serie=DFC3'">
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
<tr onclick="location.href='serie.php?serie=DFC3'">
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
<tr onclick="location.href='serie.php?serie=QFC6'">
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
<tr onclick="location.href='serie.php?serie=QFC6'">
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
<tr onclick="location.href='serie.php?serie=FC2'">
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
<tr onclick="location.href='serie.php?serie=FC2'">
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
<tr onclick="location.href='serie.php?serie=QFC7'">
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
<tr onclick="location.href='serie.php?serie=QFC7'">
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
<tr onclick="location.href='serie.php?serie=DFC4'">
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
<tr onclick="location.href='serie.php?serie=DFC4'">
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
<tr onclick="location.href='serie.php?serie=QFC8'">
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
<tr onclick="location.href='serie.php?serie=QFC8'">
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
