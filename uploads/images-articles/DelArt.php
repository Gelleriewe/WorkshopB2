<?php
include_once '../../config/Config.php';
$db = new PDO("mysql:host=".Config::SERVEUR."; port=". Config::PORT ." ; charset=utf8; dbname=".Config::BASE, Config::UTILISATEUR, Config::MOTDEPASSE);
$article=$_POST["Article_Name"];
$art=$db->prepare("SELECT  url_img, url_img_summary FROM article where Article_Name='$article'");
$art->execute();
$arturl=$art->fetchall();
  $img1=$arturl[0]['url_img'];
  $img2=$arturl[0]['url_img_summary'];
unlink($img1);
unlink($img2);
$supp=$db->prepare("DELETE FROM article WHERE Article_Name= '$article' ");

$supp->execute();
header('location: ../../hidden/Back_Office.php' );
 ?>
