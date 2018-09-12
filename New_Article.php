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
        <script src="./javascript/New_Article.js"></script>
        <!--  CSS général -->
        <link rel="stylesheet" href="CSS/New_Article.css">
        <script src="https://cloud.tinymce.com/stable/tinymce.min.js?apiKey=ehldmpzi4jvwzppzu2k6sier69zp9qexylmbt4p4rnh3duil"></script>
        <script>
            tinymce.init({
                selector: 'textarea',
                branding: false,
                file_browser_callback_types: 'image media'
            });
        </script>
    </head>
    <body>
        <?php include 'include/nav.php'; ?>
        <div class="">
            <form  method="POST" action="./SQL-query/insert-article-complet.php" style="margin-top: 5vh;">

                <div class="input-field col s6">
                    <input id="input_text" type="text" data-length="10" name="titre">
                    <label for="input_text">Titre</label>
                </div>
                <div class="input-field col s6">
                    <input id="input_text" type="text" data-length="10" name="description">
                    <label for="input_text">Description concis</label>
                </div>
                <textarea name="content"></textarea>
                <input type="submit" value="Submit">

            </form>

        </div>
    </body>
</html>
