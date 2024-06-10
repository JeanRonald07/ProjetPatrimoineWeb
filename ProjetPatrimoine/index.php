<?php
//testons
header('Location: app/router/router1.php?action=truc');


session_start(); // Démarrer la session

$_SESSION['utilisateur'] = $utilisateur; // Stocker les données de l'utilisateur dans la session

if (isset($_SESSION['utilisateur'])) {
    $utilisateur = $_SESSION['utilisateur'];
}

// Définir le cookie de connexion
setcookie('login', $utilisateur['login'], time() + 3600); // Cookie d'une heure

// Récupérer le cookie de connexion
$loginCookie = $_COOKIE['login'] ?? '';



?>

