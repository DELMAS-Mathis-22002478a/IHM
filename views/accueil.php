<?php

session_start();

// Vérifie si l'utilisateur est connecté
if (!isset($_SESSION['user_email'])) {
    // Si l'utilisateur n'est pas connecté, redirige-le vers la page de connexion
    header('Location: ../index.php');
    exit;
}

// Le reste du contenu de la page d'accueil ici...


?>
<!DOCTYPE html>
<html>
<head>
    <title>Accueil</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <div id="header">
        <h1>Accueil</h1>
    </div>
    <div id="menu">
        <ul>
            <li><a href="index.php">Accueil</a></li>
            <li><a href="profil.php">Profil</a></li>
            <li><a href="profil.php">Plats</a></li>
            <!-- Ajoute un lien de déconnexion en utilisant le function deconnexion dans controllers/Login_controller.php-->
            <li><a href="../controllers/Login_controller.php?logout">Déconnexion</a></li>

        </ul>
    </div>
    <div id="content">
        <h2>Bienvenue sur notre site</h2>
        <p>Vous pouvez vous inscrire ou vous connecter pour accéder à votre profil</p>
    </div>
    <div id="footer">
        <p>Site réalisé par ...</p>
    </div>