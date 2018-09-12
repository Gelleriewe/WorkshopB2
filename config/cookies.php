<?php
$ID=$Identifiant;
$ID = hash('sha512', $ID);
$cookie_value = "$ID";
setcookie('IdConnexion', $cookie_value, time() + (86400 * 30), "/");
?>
