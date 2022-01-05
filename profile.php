<?php

require_once './isloggedin2.php';

$user = isLoggedIn();

echo "<pre>";
var_dump($user);
echo "</pre>";
exit;

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <?php require_once './public/include2/log/log-in.php' ?>
    <title>Japan Factory profile</title>
</head>

<body>
    <?php require_once './public/include2/log/header.php' ?>

    <h1>Utilisateur: </h1>
    <h2><?= $user['nom'] . $user['prenom']; ?></h2>


    <?php require_once './public/include2/footer.php' ?>

</body>

</html>