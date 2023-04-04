<?php
//These are the defined authentication environment in the db service


$username = "nchemin";
$password = "!22009188!";
$dbname = 'nchemin';
$servername = 'localhost';


try{
   $connexion = new PDO("mysql:host=$servername;dbname=$dbname",$username,$password);
}
catch(PDOException $e){
   echo "Veuillez recharger la page ";
}