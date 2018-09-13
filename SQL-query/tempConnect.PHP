<!DOCTYPE html>
<?php
/////////////////////////////////////
$Identifiant=$_POST["Identifiant"];
$MDP=$_POST["MDP"];
include_once '../config/config.php';
$db = new PDO("mysql:host=".Config::SERVEUR."; port=". Config::PORT ." ; charset=utf8; dbname=".Config::BASE, Config::UTILISATEUR, Config::MOTDEPASSE);
/////////////////////////////////////
$MDP=hash('sha512', $MDP);
$req2=$db->prepare("SELECT Nick FROM identifiants WHERE Nick = '$Identifiant'  AND  PWD_Hash = '$MDP'");
$req2->execute();
$result = $req2->fetchALL();
$nb2 = count($result);
if($nb2==0){
  echo "mot de passe incorrect";
  sleep(1);
           }
  else{
include_once '../config/cookies.php';
header('Location: ../Index.php');
exit();
      }
?>
