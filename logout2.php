<?php

$pdo = require_once './database.php';

$sessionId = $_COOKIE['session'] ?? '';

if ($sessionId) {
    $statement = $pdo->prepare('DELETE FROM sessions WHERE id=:id');
    $statement->bindValue(':id', $sessionId);
    $statement->execute();
    setcookie('session', '', time() - 1);
    header('location: /login.php');
}else {
    header('location: /login.php');
}