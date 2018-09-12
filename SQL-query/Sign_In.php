      <center class="animetoi">
      <div class="wrapper ">
        <div class="row">
          <div class="col s12">
        <h3>Inscrivez-vous</h3>
        <form method="post" action="SQL-query/Inscription.php" class="Signin">
           <input type="Text" name="Pseudo"  required placeholder="Pseudo" >
              <br>
              <?php
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
           <br>
           <input  type="submit" class="waves-effect waves-light btn"value="Inscription">
        </form>

    </center>
