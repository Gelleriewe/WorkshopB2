<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <?php include 'include/head.php'; ?> 
        <!--  CSS général -->
        <link rel="stylesheet" href="./CSS/Nouvel_Article.css">
        <script src="https://cloud.tinymce.com/stable/tinymce.min.js?apiKey=ehldmpzi4jvwzppzu2k6sier69zp9qexylmbt4p4rnh3duil"></script>
        <script src="./javascript/Nouvel_Article.js"></script>

    </head>
    <body>
        <a class="btn" href="bons-plans.php">Retour</a>
        <?php include 'include/nav.php'; ?>
        <?php
        $db = new PDO("mysql:host=".Config::SERVEUR."; port=". Config::PORT ." ; charset=utf8; dbname=".Config::BASE, Config::UTILISATEUR, Config::MOTDEPASSE);
        $req = $db->prepare("SELECT  Article_Name, Article_Creation, description, Campus,ID_Creator, Article_Update, url_img_summary, Tag_Id FROM `article` where Article_ID = :Article_ID");
        $req->bindParam(':Article_ID', $_GET['Article']);
        
        $req->execute();
        $article = $req->fetch();


        echo "<h1>" . $article['Article_Name'] . "</h1>";
        ?>



    </body>
</html>
