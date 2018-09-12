<?php
include_once '../config/config.php';
$db = new PDO("mysql:host=" . Config::SERVERNAME . ";dbname=" . Config::DBNAME, Config::USER, Config::PASSWORD, array(PDO::ATTR_PERSISTENT => true, PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
$req = $db->prepare("SELECT Article_Name, Article_Creation, Contents, Campus,ID_Creator, Article_Update, url_img_summary, Tag_Id FROM `article`");
$req->execute();
while ($donnéetab = $req->fetch()) {
    $nomArticle = $donnéetab['Article_Name'];
    $contenuArticle = $donnéetab['Contents'];
    $idTag = $donnéetab['Tag_Id'];
?>
    <div class="card-BP">
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
        </div>
    </div>
