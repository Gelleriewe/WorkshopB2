<?php
$req=$db->prepare("SELECT Identifiant FROM identifiants WHERE Identifiant = '$Identifiant'");// requête pas trop compliquée
$req->execute();//la lance
$result = $req->fetchALL();//récupère le nombre de lignes afféctés
$nb = count($result);// et la place dans une variable
?>
