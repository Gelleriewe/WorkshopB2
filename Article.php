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
        $db = new PDO("mysql:host=" . Config::SERVERNAME . ";dbname=" . Config::DBNAME, Config::USER, Config::PASSWORD, array(PDO::ATTR_PERSISTENT => true, PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
        $req = $db->prepare("SELECT  Article_Name, Article_Creation, description, contents, Campus,ID_Creator, Article_Update, url_img_summary, Tag_Id FROM `article` where Article_ID = :Article_ID");
        $req->bindParam(':Article_ID', $_GET['Article']);

        $req->execute();
        $article = $req->fetch();

        echo "<h1>" . $article['Article_Name'] . "</h1>";
        echo "<h4>" .$article['description'] . "</h4>";
        echo "<img src='" .$article['url_img_summary'] ."' >";
        echo "<p>" .$article['contents'] . "</p>";
        echo "<h6>" .$article['Campus'] . "</h6>";

      $req->execute();
      while ($article = $req->fetch()) {
        $articlename = $article['Article_Name'];
        $contenuArticle = $article['description'];
        $idTag = $article['Tag_Id'];
        ?>

                <?php
                $tags = explode(';', $idTag);

                for ($i = 0; sizeof($tags) > $i; $i++) {
                    $req2 = $db->prepare("SELECT Tag_Name, Tag_Url FROM tags WHERE ID_Tag = :id_tag");
                    $req2->bindParam('id_tag', $tags[$i]);
                    $req2->execute();
                    $donnéeTag = $req2->fetch();
                    ?>
                    <div class="cat cat-orange"><img src="<?php echo $donnéeTag['Tag_Url'] ?>"><p><strong><?php echo $donnéeTag['Tag_Name'] ?></strong></p></div>
                                <?php
                            }
                            ?>
                            
          <?php
        }
        ?>

  </body>
</html>
