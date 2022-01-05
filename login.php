<?php
$pdo = require_once './data.php';
$errors = '';


//declaration de constante pour les erreurs
const ERROR_REQUIRED = "veuillez renseigner ce champ";
const ERROR_EMAIL = "L'email n'est pas valide";
const ERROR_REQUIRES = "Votre mot de passe doit contenir /^(?=.*\d)(?=.*[A-Za-z])[0-9A-Za-z!@#$%]{8,20}$/ ";
const ERROR_MDP = "Mot de passe fort";


if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $_input = filter_input_array(INPUT_POST, [
        'email' => FILTER_SANITIZE_EMAIL
    ]);

    $email = $_input['email'] ?? '';
    $password = $_POST['password'] ?? '';

    if (!$password || !$email) {
        $errors = "LES CHAMPS DOIVENT ETRE REMPLIS";
    } else {
        $statementUser = $pdo->prepare('SELECT * FROM sessions WHERE email=:email');
        $statementUser->bindValue(':email', $email);
        $statementUser->execute();
        $user = $statementUser->fetch();
        // echo "<pre>";
        // var_dump($user);
        // echo "</pre>";
        if ($user && password_verify($password, $user['password'])) {
            $statementSession = $pdo->prepare('INSERT INTO sessions VALUES(DEFAULT, :userid)');
            $statementSession->bindValue(':userid', $user['id']);
            $statementSession->execute();
            // $user = $statementSession->fetch();
            $sessionId = $pdo->lastInsertId();
            setcookie('session', $sessionId, time() + 60 * 5, '', '', false, true);
            $errors = ERROR_REQUIRES;
        } else {
            header('location: /profile.php');
        }
    }
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <?php require_once '/Users/ledar/Desktop/projetNIPPON/public/include2/log/log-in.php' ?>
    <title>Japan Factory inscription</title>
</head>

<body>
    <section>
        <?php require_once '/Users/ledar/Desktop/projetNIPPON/public/include2/header.php' ?>
        <div class="container">

            <h1>LogIn</h1>
            <form action="/login.php" method="POST">
                <label for="email">Email <em>*</em></label>
                <input id="email" type="email" placeholder="prenom.nom@gmail.com" name="email"><br>
                <label for="password">Mot de passe <em>*</em></label>
                <input id="password" type="password" name="password"><br>
                <button class="btn btn-dark btn-small">Envoyer</button>
                <?php if ($errors) : ?>
                        <h1 style="color: red"><?= $errors ?></h1>
                    <?php endif; ?>
            </form>

        </div><br>
    </section>
    <?php require_once '/Users/ledar/Desktop/projetNIPPON/public/include2/footer.php' ?>
</body>

</html>