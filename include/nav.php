<nav id="navbar">
    <div>
      <a href="index.php">
<<<<<<< HEAD
        logo</a>
=======
        <img style="display:none;" src="" alt="étudiants, campus, bons plans, avatanges étudiants">
      </a>
>>>>>>> 667f6305683197c48d99bf32b5b417eae7f7ce1c
    </div>

    <div>
        <ul>
            <li><a href="index.php">Accueil</a></li>
            <li><a href="Bons-plans.php">Bon plans</a></li>
            <li><a href="Creation-Bons-plans">Nouveau</a></li>
<<<<<<< HEAD

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
>>>>>>> 667f6305683197c48d99bf32b5b417eae7f7ce1c
        </ul>
         <i class="material-icons">menu</i>
    </div>
</nav>
