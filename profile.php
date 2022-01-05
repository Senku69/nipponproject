<?php

require_once './isloggedin2.php';

$user = isLoggedIn();



?>


<!DOCTYPE html>
<html lang="en">

<head>
    <?php require_once '/Users/ledar/Desktop/projetNIPPON/public/include2/log/log-in.php' ?>
    <title>Japan Factory profile</title>
</head>

<body>
    <?php require_once '/Users/ledar/Desktop/projetNIPPON/public/include2/log/header.php' ?>

    <h1>Utilisateur: </h1>
    <h2><?= $user['nom' && 'prenom']; ?></h2>


    <?php require_once '/Users/ledar/Desktop/projetNIPPON/public/include2/footer.php' ?>

</body>

</html>