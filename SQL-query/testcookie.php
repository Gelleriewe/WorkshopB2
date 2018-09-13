<?php
include_once '../config/config.php';
$db = new PDO("mysql:host=".Config::SERVEUR."; port=". Config::PORT ." ; charset=utf8; dbname=".Config::BASE, Config::UTILISATEUR, Config::MOTDEPASSE);
$identifiant=$_COOKIE['IdConnexion'];
$testcookie=$db->prepare("SELECT Identifiant FROM identifiants WHERE Identifiant = '$identifiant'");
$testcookie->execute();
$result = $testcookie->fetchALL();
$nb2 = count($result);
if($nb2==0){header('Location: ../index.php');}?>
