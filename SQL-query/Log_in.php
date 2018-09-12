<<<<<<< HEAD:SQL-query/Log_in.php
=======
<!doctype html>
<link href="newcss.css" rel="stylesheet" type="text/css"/>
<html lang="fr">
  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>connexion</title>
  </head>
  <body >
>>>>>>> 2e4c5482a4da9b90e04c1862e103bbc65153857f:Log_in.php
      <?php
  /*    include_once 'config/config.php';
      $db = new PDO("mysql:host=" . Config::SERVERNAME . ";dbname=" . Config::DBNAME, Config::USER, Config::PASSWORD);
      @$identifiant=@$_COOKIE['IdConnexion'];
      $testcookie=$db->prepare("SELECT Identifiant FROM identifiants WHERE Identifiant = '$identifiant'");
      $testcookie->execute();
      $result = $testcookie->fetchALL();
      $nb2 = count($result);
      if($nb2==0){}
<<<<<<< HEAD:SQL-query/Log_in.php
      else {
        $ID=$Identifiant;
        $ID = hash('sha512', $ID);
        $cookie_name = "IdConnexion";
        $cookie_value = "$ID";
        setcookie($cookie_name, $cookie_value);
        //header('Location: Index.php');
      }*/

      ?>
        <div class="wrapper">
        <div class="row">
        <div class="col s6">
          <h1>Connectez vous</h1>
        <form method="post" action="SQL-query/tempConnect.php" class="Signin" >
           <input type="Text" name="Identifiant"  required placeholder="E-dentifiant" >   <br>
           <input type="password"
            name="MDP"
            required placeholder="mot de passe"
            >  <br>
           <input   type="submit" class="waves-effect waves-light btn"value="OK">
        </form>
        <div class="noback">
        <button onclick="changeform()" class="waves-effect waves-light btn"> Pas de compte ? Inscrivez-vous! </button>
      </div>
      </div>
      </div>
      </div>
=======
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
>>>>>>> 2e4c5482a4da9b90e04c1862e103bbc65153857f:Log_in.php
