<?php

include_once '../config/config.php';
$db = new PDO("mysql:host=" . Config::SERVERNAME . ";dbname=" . Config::DBNAME, Config::USER, Config::PASSWORD, array(PDO::ATTR_PERSISTENT => true, PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
$req = $db->prepare("SELECT Article_Name, Article_Creation, Contents, Campus,ID_Creator, Article_Update FROM `article`");

$req->execute();

while ($donnéetab = $req->fetch()) {
    echo $donnéetab['Article_Name'].' ----' ;
    echo $donnéetab['Article_Creation'].' ----' ;
    echo $donnéetab['Contents'].' ----' ;
    echo $donnéetab['Campus'].' ----' ;
    echo $donnéetab['Article_Update'].'<br>' ;
}





