<?php
include_once '../config/config.php';
$db = new PDO("mysql:host=" . Config::SERVERNAME . ";dbname=" . Config::DBNAME, Config::USER, Config::PASSWORD, array(PDO::ATTR_PERSISTENT => true, PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
/*
$name = 'test';
$content = 'testcontent';
 * */
$name = $_POST['titre'];
$content = $_POST['content'];
$description = $_POST['description'];
$campus = 'testcampus';
 

$url_img = 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS0_2nqm0H20gpO-Pf9BsBwuAYt3McWcb-6rFs37i244h71Lyrnkg';
$Tag_id = '1';
$ID_Creator = '1';


$req = $db->prepare("INSERT INTO article (Article_Name, description, Contents, Campus, url_img_summary, Tag_Id, ID_Creator)
                     VALUES (?, ?, ?, ?, ?, ?, ?)");
$req->bindParam(1, $name);
$req->bindParam(2, $description);
$req->bindParam(3, $content);
$req->bindParam(4, $campus);
$req->bindParam(5, $url_img);
$req->bindParam(6, $Tag_id);
$req->bindParam(7, $ID_Creator);




var_dump($req->execute());

     

?>



