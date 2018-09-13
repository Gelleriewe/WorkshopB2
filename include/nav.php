<nav id="navbar">
    <div>
      <a href="index.php">
<<<<<<< HEAD
        logo</a>
=======
        <img style="display:none;" src="" alt="étudiants, campus, bons plans, avatanges étudiants">
      </a>
>>>>>>> 68da9ffd0294c1a77ab9bcfd5c8d24096f447d80
    </div>

    <div>
        <ul>
            <li><a href="index.php">Accueil</a></li>
            <li><a href="Bons-plans.php">Bon plans</a></li>
<<<<<<< HEAD
            <li><a href="Article.php">Nouveau</a></li>

            <?php


            $db = new PDO("mysql:host=" . Config::SERVERNAME . ";dbname=" . Config::DBNAME, Config::USER, Config::PASSWORD);
            @$identifiant=$_COOKIE['IdConnexion'];

            $testcookie=$db->prepare("SELECT Identifiant FROM identifiants WHERE Identifiant = '$identifiant'");
            $testcookie->execute();
            $result = $testcookie->fetchALL();
            $nb2 = count($result);
            if ($nb2==0) {
              echo "<li><a href='connexion.php'>Log In</a></li>";
            }
            else {
              echo "<li><a href='Profil.php'>Mon Profil</a></li>";
            }
            ?>




=======
            <li><a href="Creation-Bons-plans">Nouveau</a></li>
>>>>>>> 68da9ffd0294c1a77ab9bcfd5c8d24096f447d80
        </ul>
         <i class="material-icons">menu</i>
    </div>
</nav>
