<?php

$pdo = require_once './data.php';

$errors = '';

//declaration de constante pour les erreurs
const ERROR_REQUIRED = "Veuillez renseigner ce champ";
const ERROR_LENGTH = "Le pseudo doit contenir entre 7 et 12 caracteres";
const ERROR_EMAIL = "L'email n'est pas valide";
const ERROR_REQUIRES = "Votre mot de passe doit contenir /^(?=.*\d)(?=.*[A-Za-z])[0-9A-Za-z!@#$%]{8,20}$/ ";
const ERROR_MDP = "Mot de passe fort";

// print_r($_SERVER);
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    //filter sanitize sur les input
    $_INPUT = filter_input_array(INPUT_POST, [
        'nom' => FILTER_SANITIZE_FULL_SPECIAL_CHARS,
        'prenom' => FILTER_SANITIZE_FULL_SPECIAL_CHARS,
        'email' => FILTER_SANITIZE_EMAIL,
        // 'genre' => FILTER_SANITIZE_FULL_SPECIAL_CHARS,

    ]);

    //declaration variable
    $nom = $_INPUT['nom'] ?? '';
    $prenom = $_INPUT['prenom'] ?? '';
    $email = $_INPUT['email'] ?? '';
    $password = $_POST['password'] ?? '';
    $confirmPassword = $_POST['confirmPassword'] ?? '';


    //gestion d'erreur
    if (!$nom || !$prenom || !$email || !$password || !$confirmPassword) {
        $errors = "LES CHAMPS DOIVENT ETRE REMPLIS";
    } else {
        // verification que les mots de passe sont identiques
        $hashPassword = password_hash($password, PASSWORD_ARGON2I);

        $statement = $pdo->prepare('INSERT INTO user VALUES (
            DEFAULT,
            :email,
            :nom,
            :prenom,
            :password
            )');
        $statement->bindValue(':nom', $nom);
        $statement->bindValue(':prenom', $prenom);
        $statement->bindValue(':email', $email);
        $statement->bindValue(':password', $hashPassword);
        $statement->execute();

        header('Location: /login.php');
    }
}


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <?php require_once './public/include2/log/register.php' ?>
    <title>Japan Factory inscription</title>
</head>

<body>
    <?php require_once './public/include2/header.php' ?>
    <section>
        <article>
            <div class="container">
                <h1>Formulaire d'inscription</h1>
                <form action="/inscription.php" method="POST">
                    <p><i>Complétez les champs marqué par </i><em>*</em> sont <em>obligatoires</em></p>
                    <br>
                    <div>
                        <label for="nom">Nom <em>*</em></label>
                        <input id="nom" placeholder="Olivier" name="nom"><br>
                        <label for="prenom">Prénom <em>*</em></label>
                        <input type="prenom" placeholder="Serre" name="prenom"><br>
                        <label for="email">Email <em>*</em></label>
                        <input id="email" type="email" placeholder="prenom.nom@gmail.com" name="email"><br>
                    </div>
                    <div>
                        <label for="password">Mot de passe <em>*</em></label>
                        <input id="password" type="password" name="password"><br>
                        <label for="confirmPassword">Confirmation mot de passe <em>*</em></label>
                        <input id="confirmPassword" type="password" name="confirmPassword"><br>
                    </div>
                    <div class="gender">
                        <label for="man">Genre</label>
                        <input type="checkbox" name="gender" id="man" value="man">Homme
                        <input type="checkbox" name="gender" id="woman" value="woman">Femme
                    </div>
                    <div>
                        <label for="choix">Comment avez-vous trouver ce site ?</label>
                        <select id="choix">
                            <option value="choisissez">Choisissez</option>
                            <option value="moteur de recherche">Moteur de recherche</option>
                            <option value="autre">Autre</option>
                            <option value="Reseaux sociaux">Reseaux sociaux</option>
                            <option value="Lien sur un autre site">Lien sur un autre site</option>
                            <option value="presse">Presse</option>
                            <option value="bouche a oreille">Bouche à oreille</option>
                        </select><br>
                    </div>
                    <br>
                    <?php if ($errors) : ?>
                        <h1 style="color: red"><?= $errors ?></h1>
                    <?php endif; ?>
                    <button class="btn btn-dark btn-small">Envoyer</button>

                </form>

            </div>
        </article>
    </section>

    <?php require_once './public/include2/footer.php' ?>

</body>

</html>