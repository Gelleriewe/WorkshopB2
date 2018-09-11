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
        <link rel="stylesheet" href="./CSS/CSS_BonPlans.css">

        <!-- JS materialize -->
        <script src="./javascript/bons-plans.js"></script>
    </head>
    <body>
        <?php include 'include/nav.php'; ?>

        <h1>Une envie de sortie, de manger ou de s'amuser?</h1>
        <div class="row search-bar">

            <div class="col s5">
                <div class="row">
                    <div class="input-field col s12">
                        <i class="material-icons prefix">hearing</i>
                        <input type="text" id="autocomplete-input" class="autocomplete">
                        <label for="autocomplete-input">Nom de l'activité</label>
                    </div>
                </div>
            </div>
            <div class="col s3">
                <div class="row">
                    <div class="input-field col s12">
                        <i class="material-icons prefix">person_pin</i>
                        <input type="text" id="autocomplete-input" class="autocomplete">
                        <label for="autocomplete-input">Créateur de l'article</label>
                    </div>
                </div>
            </div>

            <div class="input-field col s2">
                <i class="material-icons prefix">location_city</i>
                <select multiple>
                    <option value="1">Nantes</option>
                    <option value="2">Paris</option>
                    <option value="3">Les Sables d'Olonne</option>
                </select>
                <label>Campus</label>
            </div>



        </div>
        <div class="tableau-bons-plans">
            <table class="highlight striped">
                <thead>
                    <tr>
                        <th>Bon plan</th>
                        <th>Créateur</th>
                        <th>Campus</th>
                        <th>Catégorie</th>
                        <th>Mise à jour</th>
                        <th></th>
                    </tr>
                </thead>

                <tbody>
                    <tr>
                        <td><a href="#">Boire un coup</a></td>
                        <td>Mathieu janio bg</td>
                        <td>Nantes</td>
                        <td>voir</td>
                        <td>10/09/2018</td>
                        <td><a href="#" class="btn waves-effect waves-light">Voir</a></td>
                    </tr>
                    <tr>
                        <td><a href="#">Boire un coup</a></td>
                        <td>Mathieu</td>
                        <td>Nantes</td>
                        <td>voir</td>
                        <td>10/09/2018</td>
                        <td><a href="#" class="btn waves-effect waves-light">Voir</a></td>
                    </tr>
                    <tr>
                        <td><a href="#">Boire un coup</a></td>
                        <td>Mathieu</td>
                        <td>Nantes</td>
                        <td>voir</td>
                        <td>10/09/2018</td>
                        <td><a href="#" class="btn waves-effect waves-light">Voir</a></td>
                    </tr>
                </tbody>
            </table>


            <ul class="pagination right">
                <li class="disabled"><a href="#!"><i class="material-icons">chevron_left</i></a></li>
                <li class="active"><a href="#!">1</a></li>
                <li class="waves-effect"><a href="#!">2</a></li>
                <li class="waves-effect"><a href="#!">3</a></li>
                <li class="waves-effect"><a href="#!">4</a></li>
                <li class="waves-effect"><a href="#!">5</a></li>
                <li class="waves-effect"><a href="#!"><i class="material-icons">chevron_right</i></a></li>
            </ul>
        </div>
        <div class="add-bon-plan">
            <h3>Envie d'ajouter ta propre activité ?</h3>
            <a class="waves-effect waves-light btn col s1"><i class="material-icons left">playlist_add</i>Ajouter</a>
        </div>
    </body>
</html>
