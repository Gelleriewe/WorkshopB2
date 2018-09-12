<?php

include_once '../config/config.php';
$db = new PDO("mysql:host=" . Config::SERVERNAME . ";dbname=" . Config::DBNAME, Config::USER, Config::PASSWORD, array(PDO::ATTR_PERSISTENT => true, PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));



//UPLOAD DU FICHIER
$currentDir = getcwd();
$uploadDirectory = "/uploads/images-articles/";

$errors = []; // Store all foreseen and unforseen errors here

$fileExtensions = ['jpeg', 'jpg', 'png']; // Get all the file extensions

$fileName = $_FILES['photoArticle']['name'];
$fileSize = $_FILES['photoArticle']['size'];
$fileTmpName = $_FILES['photoArticle']['tmp_name'];
$fileType = $_FILES['photoArticle']['type'];
$fileExtension = strtolower(end(explode('.', $fileName)));

$uploadPath = $currentDir . $uploadDirectory . basename($fileName);

if (isset($_POST['submit'])) {

    if (!in_array($fileExtension, $fileExtensions)) {
        $errors[] = "This file extension is not allowed. Please upload a JPEG or PNG file";
    }

    if ($fileSize > 2000000) {
        $errors[] = "This file is more than 2MB. Sorry, it has to be less than or equal to 2MB";
    }

    if (empty($errors)) {
        $didUpload = move_uploaded_file($fileTmpName, $uploadPath);

        if ($didUpload) {
            echo "The file " . basename($fileName) . " has been uploaded";
            //UPLOAD LIENS img + ARTICLE

            $name = $_POST['titre'];
            $content = $_POST['content'];
            $description = $_POST['description'];
            $campus = 'testcampus';


            $url_img = $uploadPath;
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
        } else {
            echo "An error occurred somewhere. Try again or contact the admin";
        }
    } else {
        foreach ($errors as $error) {
            echo $error . "These are the errors" . "\n";
        }
    }
}
?>



