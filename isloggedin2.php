<?php

function isLoggedIn()
{
    $pdo = require_once './data.php';
    $sessionId = $_COOKIE['session'] ?? '';

    if ($sessionId) {
        $statementSession = $pdo->prepare('SELECT * FROM sessions WHERE id=:id');
        $statementSession->bindValue(':id', $sessionId);
        $statementSession->execute();
        $session = $statementSession->fetch();

        $userstatement = $pdo->prepare('SELECT * FROM user WHERE id=:id');
        $userstatement->bindValue(':id', $session['id_user']);
        $userstatement->execute();
        $user = $userstatement->fetch();
    }
    echo "<pre>";
    var_dump($sessionId);
    echo "</pre>";
    return $user ?? false;
}
