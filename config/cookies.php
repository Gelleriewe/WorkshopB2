<?php
$ID=$Identifiant;
$ID = hash('sha512', $ID);
$cookie_name = "IdConnexion";
$cookie_value = "$ID";
setcookie($cookie_name, $cookie_value);
?>
