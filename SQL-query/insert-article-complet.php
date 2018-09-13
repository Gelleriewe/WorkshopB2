<?php
//error_reporting(E_ALL);
//ini_set("display_errors", 1);
include_once '../config/Config.php';
$db = new PDO("mysql:host=".Config::SERVEUR."; port=". Config::PORT ." ; charset=utf8; dbname=".Config::BASE, Config::UTILISATEUR, Config::MOTDEPASSE);


$ID_Creator =$_COOKIE['IdConnexion'];
//UPLOAD DU FICHIER
//$currentDir = getcwd();
$uploadDirectory = "../uploads/images-articles/";
$reqimgDirectory = "./uploads/images-articles/";
$errors = []; // Store all foreseen and unforseen errors here

$fileExtensions = ['jpeg', 'jpg', 'png']; // Get all the file extensions

$fileName = date("YmdHis") . $_FILES['photoArticle']['name'];
$fileSize = $_FILES['photoArticle']['size'];
$fileTmpName = $_FILES['photoArticle']['tmp_name'];
$fileType = $_FILES['photoArticle']['type'];
$fileExtension = explode('.', $fileName);
$uploadPath = $uploadDirectory . basename($fileName);
$reqimgDirectory1 = $reqimgDirectory . basename($fileName);
var_dump($fileSize);
if (isset($_POST['submit'])) {

    if (!in_array($fileExtension[1], $fileExtensions)) {
        $errors[] = "This file extension is not allowed. Please upload a JPEG or PNG file";
    }

    if ($fileSize > 2000000) {
        $errors[] = "This file is more than 2MB. Sorry, it has to be less than or equal to 2MB";
    }

    if (empty($errors)) {
        $didUpload = move_uploaded_file($fileTmpName, $uploadPath);

        if ($didUpload) {
            echo "The file " . basename($fileName) . " has been uploaded";


            $errors2 = []; // Store all foreseen and unforseen errors here


            $fileName2 = "summary" . date("YmdHis") . $_FILES['photoArticle2']['name'];
            $fileSize2 = $_FILES['photoArticle2']['size'];
            $fileTmpName2 = $_FILES['photoArticle2']['tmp_name'];
            $fileType = $_FILES['photoArticle2']['type'];
            $fileExtension2 = explode('.', $fileName);
            $uploadPath2 = $uploadDirectory . basename($fileName2);
            $reqimgDirectory2 = $reqimgDirectory . basename($fileName2);
            var_dump($fileSize2);
            if (isset($_POST['submit'])) {

                if (!in_array($fileExtension2[1], $fileExtensions)) {
                    $errors2[] = "This file extension is not allowed. Please upload a JPEG or PNG file";
                }

                if ($fileSize2 > 2000000) {
                    $errors[] = "This file is more than 2MB. Sorry, it has to be less than or equal to 2MB";
                }

                if (empty($errors2)) {
                    $didUpload2 = move_uploaded_file($fileTmpName2, $uploadPath2);

                    if ($didUpload2) {
                        echo "The file 2 " . basename($fileName2) . " has been uploaded";
                        //UPLOAD LIENS img + ARTICLE

                        $name = $_POST['titre'];
                        $content = $_POST['content'];
                        $description = $_POST['description'];
                        $campus = 'testcampus';



                        $Tag_id = '1';

                        $ID_Creator =$_COOKIE['IdConnexion'];


                        $req = $db->prepare("INSERT INTO article (Article_Name, description, Contents, Campus, url_img_summary, url_img, Tag_Id, ID_Creator)
                                                VALUES (?, ?, ?, ?, ?, ?, ?, ?)");
                        $req->bindParam(1, $name);
                        $req->bindParam(2, $description);
                        $req->bindParam(3, $content);
                        $req->bindParam(4, $campus);
                        $req->bindParam(5, $reqimgDirectory1);
                        $req->bindParam(6, $reqimgDirectory2);
                        $req->bindParam(7, $Tag_id);
                        $req->bindParam(8, $ID_Creator);
                        var_dump($reqimgDirectory1);
                        var_dump($reqimgDirectory2);


                        var_dump($req->execute());
                    } else {
                        echo "An error occurred somewhere. Try again or contact the admin";
                    }
                } else {
                    foreach ($errors2 as $error2) {
                        echo $error . "These are the errors" . "\n";
                    }
                }
            }
        } else {
            echo "An error occurred somewhere. Try again or contact the admin";
        }
    } else {
        foreach ($errors as $error) {
            echo $error . "These are the errors" . "\n";
        }

    }
}
header('location:../index.php')
?>
