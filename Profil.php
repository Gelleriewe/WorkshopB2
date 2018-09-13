<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <?php include 'include/head.php'; ?>
        <!--  CSS général -->
        <link rel="stylesheet" href=" CSS/Log.css">

        <!-- JS materialize -->
        <script src="./javascript/bons-plans.js"></script>
    </head>
    <body background="Images/Sea.jpg" class="background">

        <?php include 'include/nav.php';
   ?>
   <div class="wrapper">
        <?php
            $Profilage=$db->prepare("SELECT Name, FirstName, Nick, Mail FROM identifiants WHERE Identifiant = '$identifiant'");
            $Profilage->execute();
            $profil = $Profilage->fetchALL();
            $Name=htmlspecialchars($profil[0][0]);
            $Firstname=htmlspecialchars($profil[0][1]);
            $Nick=htmlspecialchars($profil[0][2]);
            $Mail=htmlspecialchars($profil[0][3]);
            ?>
            <ul class="collection">
            <li class="collection-item"><?php echo "$Name"; ?></li>
            <li class="collection-item"><?php echo "$Firstname"; ?></li>
            <li class="collection-item"><?php echo "$Nick"; ?></li>
            <li class="collection-item"><?php echo "$Mail"; ?></li>
            </ul>

          </div>
    </body>
</html>
