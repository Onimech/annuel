<?php
//These are the defined authentication environment in the db service


$username = "root";
$password = "root";
$dbname = 'nba_projet';
$servername = 'localhost';


try{
   $connexion = new PDO("mysql:host=$servername;dbname=$dbname",$username,$password);
}
catch(PDOException $e){
   echo "Veuillez recharger la page ";
}