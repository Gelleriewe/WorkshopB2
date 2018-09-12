<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <?php include 'include/head.php'; ?>
        <!--  CSS général -->
        <link rel="stylesheet" href=" CSS/CSS_BonPlans.css">

        <!-- JS materialize -->
        <script src="./javascript/bons-plans.js"></script>
    </head>
    <body background="Images/Sea.jpg" class="background">
      <div class="wrapper">
        <?php include 'include/nav.php'; ?>
        <?php
            $Profilage=$db->prepare("SELECT Name, FirstName, Nick, Mail FROM identifiants WHERE Identifiant = '$identifiant'");
            $Profilage->execute();
            $profil = $Profilage->fetchALL();

            $Name=htmlspecialchars($profil[0][0]);
            $Firstname=htmlspecialchars($profil[0][1]);
            $Nick=htmlspecialchars($profil[0][2]);
            $Mail=htmlspecialchars($profil[0][3]);
            echo "<h3> Nom </h3>";
            echo "$Name";
            echo "<h3> Prénom </h3>";
            echo "$Firstname";
            echo "<h3> Pseudo </h3>";
            echo "$Nick";
            echo "<h3> Mail </h3>";
            echo "$Mail";

            ?>
          </div>
    </body>
</html>
