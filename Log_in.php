<!doctype html>
<link href="newcss.css" rel="stylesheet" type="text/css"/>
<html lang="fr">
  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>connexion</title>
  </head>
  <body >
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
      <center>
        <img src="HUB.png" height="320" width="480">
        <h1>Connectez vous</h1>
        <form method="post" action="SQL-query/tempConnect.php" class="input_connexion">
           <input type="Text" name="Identifiant"  required placeholder="E-dentifiant" class="input_connexion">   <br>
           <input type="password"
            name="MDP"
            required placeholder="mot de passe"
            class="input_connexion">  <br>
           <input  type="submit" class="btn-lg"value="OK">
        </form>
     </center>
  </body>
</html>
