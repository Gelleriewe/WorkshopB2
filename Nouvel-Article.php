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
        <?php include 'include/nav.php'; ?>
        <div class="">
            <form  method="POST" enctype="multipart/form-data" action="./SQL-query/insert-article-complet.php" style="margin-top: 5vh;">
                <div class="row">
                    <div class="file-field input-field col s3">
                        <div class="btn">
                            <span>File</span>
                            <input required type="file" accept="image/gif, image/jpeg, image/png, image/jpg" name="photoArticle">
                        </div>
                        <div class="file-path-wrapper">
                            <input class="file-path validate" type="text">
                        </div>
                    </div>
                    <div class="input-field col s6">
                        <input required id="input_text" type="text" data-length="30" maxlength="30" name="titre">
                        <label for="input_text">Titre</label>
                    </div>

                    <div class="input-field col s6">
                        <input required id="input_text" type="text" data-length="200" maxlength="200" name="description">
                        <label for="input_text">Description concis</label>
                    </div>
                </div>
                <textarea name="content"></textarea>
                <input hidden name='submit' value="submit">
                <input type="submit"  value="submit">

            </form>

        </div>
    </body>
</html>
