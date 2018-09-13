<?php
include_once '../config/config.php';
$db = new PDO("mysql:host=".Config::SERVEUR."; port=". Config::PORT ." ; charset=utf8; dbname=".Config::BASE, Config::UTILISATEUR, Config::MOTDEPASSE);
////////////////////////////
$pseudo=$_POST["Pseudo"];///
$MDP1=$_POST["MDP1"];///////
$MDP2=$_POST["MDP2"];///////
$Nom=$_POST["Nom"];/////////
$Prénom=$_POST["Prénom"];///
$Email=$_POST["Email"];/////
$Campus=$_POST["Campus"];///
////////////////////////////
if ($MDP1==$MDP2) {
  $TestPseudo=$db->prepare("SELECT Nick FROM identifiants WHERE Nick = '$pseudo'");
  $TestPseudo->execute();
  $result = $TestPseudo->fetchALL();
  $nb = count($result);
  if($nb==0){
    $MDP1=hash('sha512',$MDP1);
    $ID=hash('sha512',$pseudo);
    $inscription=$db->prepare("INSERT into identifiants (Name,FirstName,Nick,Mail,PWD_Hash,Identifiant,Campus) VALUES (:Name, :FirstName, :Nick, :Mail, :PWD_Hash, :Identifiant, :Campus)");
    $inscription->execute(array(
    'Name' => $Nom ,
    'FirstName' => $Prénom ,
    'Nick' => $pseudo ,
    'Mail'=> $Email ,
    'PWD_Hash'=> $MDP1,
    'Identifiant'=>$ID,
    'Campus'=>$Campus ));
    header('Location: ../Index.php');


  }
  else {header('Location: ../Sign_in.php?errorPP=Pseudo pris');}
}
else {header('Location: ../Sign_in.php?errorMDP=Mots de passe différents');}

?>
