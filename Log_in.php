<!doctype html>

<html lang="fr">
  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>connexion</title>

    <?php include 'include/head.php'; ?>
    <!--  CSS général -->
    <link rel="stylesheet" href="CSS/CSS_BonPlans.css">
  </head>
  <body background="Images/Sea.jpg" class="background">
      <?php
      include_once 'config/config.php';
      $db = new PDO("mysql:host=" . Config::SERVERNAME . ";dbname=" . Config::DBNAME, Config::USER, Config::PASSWORD);
      @$identifiant=@$_COOKIE['IdConnexion'];
      $testcookie=$db->prepare("SELECT Identifiant FROM identifiants WHERE Identifiant = '$identifiant'");
      $testcookie->execute();
      $result = $testcookie->fetchALL();
      $nb2 = count($result);
      if($nb2==0){}
      else {header('Location: Index.php');}

      ?>

        <h1>Connectez vous</h1>
        <div class="row">
        <div class="col s3">

        <form method="post" action="SQL-query/tempConnect.php" >
           <input type="Text" name="Identifiant"  required placeholder="E-dentifiant" >   <br>
           <input type="password"
            name="MDP"
            required placeholder="mot de passe"
            >  <br>
           <input  type="submit" class="waves-effect waves-light btn"value="OK">
        </form>
      </div>
      </div>

  </body>
</html>
