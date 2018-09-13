<?php
//error_reporting(E_ALL); 
//ini_set("display_errors", 1); 
include_once '../config/Config.php';
$db = new PDO("mysql:host=".Config::SERVEUR."; port=". Config::PORT ." ; charset=utf8; dbname=".Config::BASE, Config::UTILISATEUR, Config::MOTDEPASSE);
$req = $db->prepare("SELECT Article_ID, Article_Name, Article_Creation, description, Campus,ID_Creator, Article_Update, url_img_summary, Tag_Id FROM `article`");



$req->execute();
while ($donnéetab = $req->fetch()) {
    $nomArticle = $donnéetab['Article_Name'];
    $contenuArticle = $donnéetab['description'];
    $idTag = $donnéetab['Tag_Id'];
    ?>

    <div class="card-BP animation-fade-in" onclick="window.location='./Article.php?Article=<?php echo $donnéetab['Article_ID'] ?>';">
        <img src="<?php echo $donnéetab['url_img_summary'] ?>">
        <div class="card-summary">
            <h3><?php echo $nomArticle ?></h3>
            <p><?php echo $contenuArticle ?></p>
        </div>

        <div class='category'>

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


        </div>
    </div>

    <?php
}
?>




