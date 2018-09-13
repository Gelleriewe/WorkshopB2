<?php
include_once '../config/Config.php';
$db = new PDO("mysql:host=".Config::SERVEUR."; port=". Config::PORT ." ; charset=utf8; dbname=".Config::BASE, Config::UTILISATEUR, Config::MOTDEPASSE);
$tag=$_POST["Tag"];
$add=$db->prepare("INSERT INTO tags(ID_Tag,Tag_Name) VALUES('0','$tag')");
$add->execute();
var_dump($add);

//header('location: Back_Office.php' )
 ?>
