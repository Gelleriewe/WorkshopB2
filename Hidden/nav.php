<nav id="navbar">
    <div>
      <a href="../index.php">
        logo</a>
    </div>

    <div>
        <ul>
            <li><a href="../index.php">Accueil</a></li>
            <li><a href="../Bons-plans.php">Bon plans</a></li>
            <li><a href="../Nouvel-Article.php">Nouveau</a></li>

            <?php


            $db = new PDO("mysql:host=".Config::SERVEUR."; port=". Config::PORT ." ; charset=utf8; dbname=".Config::BASE, Config::UTILISATEUR, Config::MOTDEPASSE);
            @$identifiant=$_COOKIE['IdConnexion'];

            $testcookie=$db->prepare("SELECT Identifiant FROM identifiants WHERE Identifiant = '$identifiant'");
            $testcookie->execute();
            $result = $testcookie->fetchALL();
            $nb2 = count($result);
            if ($nb2==0) {
              echo "<li><a href='../connexion.php'>Log In</a></li>";
            }
            else {
              echo "<li><a href='../Profil.php'>Mon Profil</a></li>";
            }
            ?>




        </ul>
         <i class="material-icons">menu</i>
    </div>
</nav>
