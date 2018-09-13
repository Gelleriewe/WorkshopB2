<?php
include_once '../config/Config.php';
$db = new PDO("mysql:host=".Config::SERVEUR."; port=". Config::PORT ." ; charset=utf8; dbname=".Config::BASE, Config::UTILISATEUR, Config::MOTDEPASSE);
$Pseudo=$_POST["Account_Name"];


$supp=$db->prepare("DELETE FROM identifiants WHERE Nick= '$Pseudo' ");

$supp->execute();
header('location: Back_Office.php' )
 ?>
