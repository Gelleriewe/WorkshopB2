<nav id="navbar">
    <div>
        <a href="index.php">Logo</a>
    </div>

    <div>
        <ul>
            <li><a href="index.php">Accueil</a></li>
            <li><a href="Bons-plans.php">Bon plans</a></li>
            <li><a href="Creation-Bons-plans">Nouveau</a></li>
            <?php    class config{
                    const SERVERNAME="localhost";
                    const DBNAME="workshop";
                    const USER="root";
                    const PASSWORD="youshallnotpass";}
             ?>

            <?php
            $db = new PDO("mysql:host=" . Config::SERVERNAME . ";dbname=" . Config::DBNAME, Config::USER, Config::PASSWORD);
            @$identifiant=$_COOKIE['IdConnexion'];
            var_dump($identifiant);
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




        </ul>
         <i class="material-icons">menu</i>
    </div>
</nav>
