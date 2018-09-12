<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <script type = "text/javascript"
 src = "https://code.jquery.com/jquery-2.1.1.min.js"></script>
<script src = "https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.3/js/materialize.min.js">
</script>
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
        <div class="description-site col s6">
          <h4 class="titre">Bienvenue sur Avantages Étudiant</h4>
            <p>le site qui favorise l'accès à différentes activités aux étudiants.</p>
            <div id="Aide">
              <ul class="collapsible">
              <li>
                <div class="collapsible-header">
                  <i class="material-icons">help</i>
                  Informations sur notre site
                  </div>
                <div class="collapsible-body"><p>Avantages étudiant est avant tout un site simple et dynamique.</p></div>
              </li>
            </ul>
            </div>
        </div>
        <div class="col s12 m6">
            <div class="card blue-grey darken-1">
        <div class="card-content white-text">
          <span class="card-title">LES BONS PLANS DU MOMENT</span>
          <p></p>
        </div>
            </div>
        </div>
      </div>
    </body>
</html>
