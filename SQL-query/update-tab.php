<?php
include_once '../config/config.php';
$db = new PDO("mysql:host=" . Config::SERVERNAME . ";dbname=" . Config::DBNAME, Config::USER, Config::PASSWORD, array(PDO::ATTR_PERSISTENT => true, PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
$req = $db->prepare("SELECT Article_Name, Article_Creation, Contents, Campus,ID_Creator, Article_Update, url-img-summary, Tag_Id FROM `article`");

$req->execute();

$nomArticle = $donnéetab['Article_Name'];
$contenuArticle = $donnéetab['Contents'];

while ($donnéetab = $req->fetch()) {
    $idTag = $donnéetab['Tag_Id'];
    $req2 = $db->prepare("SELECT Tag_Name, Tag_Url FROM tags WHERE ID_Tag = :id_tag");
    $req2->bindParam('id_tag', $idTag);
    $req2->execute();
    $donnéeTag = $req2->fetch()
        
    
    
    ?>
    <div class="card-BP">
        <img src="https://www.shbarcelona.fr/blog/fr/wp-content/uploads/2016/05/boire-un-verre1-810x538.jpg">
        <div class="card-summary">
            <h3><?php $nomArticle ?></h3>
            <p><?php $contenuArticle ?></p>
        </div>
        <div class='category'>
            <div class="cat cat-orange"><img src="<?php $donnéeTag['Tag_Url'] ?>"><p><strong><?php $donnéeTag['Tag_Name'] ?></strong></p></div>
        </div>
    </div>
    <?php
    echo $donnéetab['Article_Name'] . ' ----';
    echo $donnéetab['Article_Creation'] . ' ----';
    echo $donnéetab['Contents'] . ' ----';
    echo $donnéetab['Campus'] . ' ----';
    echo $donnéetab['Article_Update'] . '<br>';
    echo $donnéetab['url-img-summary'] . '<br>';
    echo $donnéetab['Tag_Id'] . '<br>';
}





