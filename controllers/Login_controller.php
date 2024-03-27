// control/Login_controller.php

<?php

function login()
{
    // Simuler une vérification de l'utilisateur avec une fausse API de login
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $email = $_POST['email'];
        $password = $_POST['password'];

        // Simuler une vérification réussie pour n'importe quel utilisateur
        if ($email === 'test@example.com' && $password === 'password') {
            // Démarre la session
            session_start();

            // Stocke les informations de l'utilisateur dans la session
            $_SESSION['user_email'] = $email;

            // Redirige l'utilisateur vers la page d'accueil
            header('Location: ../views/accueil.php');
            exit;
        } else {
            echo "Identifiants invalides. Veuillez réessayer.";
        }
    }
}


//fucntion de deconnexion
function logout()
{
    // Démarre la session
    session_start();

    // Détruit toutes les données de la session
    session_destroy();

    // Affiche un message de débogage
    echo "Déconnexion réussie.";

    // Redirige l'utilisateur vers la page de connexion
    header('Location: login.php');
    exit;
}




?>
