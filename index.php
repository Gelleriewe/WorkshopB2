<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>

    <script type="text/javascript" src="js/materialize.min.js"></script>

        <script type = "text/javascript" src = "https://code.jquery.com/jquery-2.1.1.min.js"></script>
<script src = "https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.3/js/materialize.min.js"></script>

        <title></title>
        <?php include 'include/head.php'; ?>
                <script src="./javascript/index.js"></script>
                <!--  CSS général -->
                <link rel="stylesheet" href="CSS/CSS_Index.css">
    </head>
    <body>

      <?php include 'include/nav.php'; ?>
        <div class="carousel carousel-slider">

            <h2 class="carousel-fixed-item center">Offrez-vous</h2>

          <div class="carousel-item grey white-text" href="#one!">
            <h2>un divertissement</h2>
          </div>
          <div class="carousel-item grey white-text" href="#two!">
            <h2>une activité sportive</h2>
          </div>
          <div class="carousel-item grey white-text" href="#three!">
            <h2>le voyage de vos rêves</h2>
          </div>
          <div class="carousel-item grey white-text" href="#four!">
            <h2>les meilleurs bons plans</h2>
          </div>
        </div>

      <div class="row">
        <div class="description-site col s12 m6">
          <h4 class="titre">Bienvenue sur Avantages Étudiant</h4>
            <p>le site qui favorise l'accès à différentes activités aux étudiants.</p>
            <div class="collaps">
              <ul class="collapsible">
              <li id='li1' onclick="scrollto('li1')">
                <div class="collapsible-header">
                  <i id='fleche1' class="material-icons">arrow_forward</i>
                  Informations du site
                  </div>
                <div class="collapsible-body">
                  <p>Avantages Étudiants est avant tout un site simple et dynamique qui est exclusivement reservé aux étudiants du campus HEP.<br>
                     Il vous permettra de profiter des meilleurs bons plans en temps réel que se soit pour aller manger dans un restaurant que pour voyager à travers le monde.<br>
                     Ces bons plans sont partagés par tous les étudiants adhérant à notre site internet.<br>
                     Il vous sera même possible de créer vos bons plans et de les partager avec les autres utilisateurs.
                  </p>
                </div>
              </li>
            </ul>
            </div>
        </div>
      <div class="col s12 m6">
        <div class="">
            <div class="card blue-grey darken-1">
        <div class="card-content white-text">
          <span class="card-title">TOP BONS PLANS</span>
          <p></p>
        </div>
            </div>
        </div>
        <div class="">
            <div class="card blue-grey darken-1">
        <div class="card-content white-text">
          <span class="card-title">BONS PLANS RÉCENTS</span>
          <p></p>
        </div>
            </div>
        </div>
        <div class="">
            <div class="card blue-grey darken-1">
        <div class="card-content white-text">
          <span class="card-title">CATÉGORIES LES PLUS RECHERCHÉES</span>
          <p></p>
        </div>
            </div>
        </div>
      </div>
    </div>
    </body>
</html>

<script>


</script>
