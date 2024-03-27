<?php

//page de login qui devrai interoger une API pour verifier les informations de l'utilisateur
?>
//si l'utilisateur est deja connecté, il sera redirigé vers la page d'accueil
<!DOCTYPE html>
<html>

<head>
    <title>Connexion</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
    <div id="header">
        <h1>Connexion</h1>
    </div>
    <div id="content">
        <h2>Connexion</h2>
        <form action="index.php" method="post">
            <label for="email">Email</label>
            <input type="email" name="email" id="email" required>
            <label for="password">Mot de passe</label>
            <input type="password" name="password" id="password" required>
            <input type="submit" value="Se connecter">
        </form>
    </div>
    <div id="footer">
        <p>Site réalisé par ...</p>
    </div>
</body>

</html>

// Path: control/Login_controller.php
