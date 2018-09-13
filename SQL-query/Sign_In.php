      <center class="animetoi">
      <div class="wrapper ">
        <div class="row">
          <div class="col s12">
        <h3>Inscrivez-vous</h3>
        <form method="post" action="SQL-query/Inscription.php" class="Signin" id="form">


           <input type="Text" name="Pseudo"  required placeholder="Pseudo" >
              <br>
              <?php
              include_once '../config/Config.php';
              $db = new PDO("mysql:host=".Config::SERVEUR."; port=". Config::PORT ." ; charset=utf8; dbname=".Config::BASE, Config::UTILISATEUR, Config::MOTDEPASSE);
              if (isset($_GET['errorPP'])) {
                echo '<p class="red">', $_GET['errorPP'], '</p>';
                // code...
              }

               ?>
           <br>

           <input type="password" name="MDP1" required placeholder="Mot De Passe" class="">  <br>

           <?php
           if (isset($_GET['errorMDP'])) {
            echo '<p class="red">', $_GET['errorMDP'], '</p>';
             // code...
           }

            ?>
            <br>
           <input type="password" name="MDP2" required placeholder="Confirmez le Mot de passe" class="">  <br>
           <?php
           if (isset($_GET['errorMDP'])) {
             echo '<p class="red">', $_GET['errorMDP'], '</p>';
             // code...
           }

            ?>
            <br>

           <input type="text" name="Nom" required placeholder="Nom" class="">  <br>
           <br>
           <input type="text" name="Prénom" required placeholder="Prénom" class="">  <br>
           <br>
           <input type="email" name="Email" required placeholder="Email" class="">  <br>
           <select name="Campus">
             <option value="Campus" disabled selected Campus> </Campus>
             <?php
             $Campus=$db->prepare("SELECT Campus FROM Campus ");
             $Campus->execute();
             $result = $Campus->fetchALL();
             foreach ($result as $res) {
               $i=$res['Campus'];
               echo '<option value="', $i ,' ">', $i ,'</option>';
             }

             ?>

           </select>
           <br>
           <input  type="submit" class="waves-effect waves-light btn"value="Inscription">
        </form>

        <div class="nofront">
        <button onclick="Backform()" class="waves-effect waves-light btn"> Déjà un compte ? Connectez-vous! </button>
      </div>
      <div class="input-field col s12">


<script>
$(document).ready(function(){
  $('select').formSelect();
});

</script>
    </center>
