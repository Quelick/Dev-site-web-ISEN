<?php
session_start();

// Vérifiez si l'utilisateur est connecté
if (!isset($_SESSION['user_id'])) {
    header("Location: connexion.php"); // Redirige vers la page de connexion si non connecté
    exit();
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bienvenue</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            color: #333;
            text-align: center;
        }
        .container {
            background: white;
            padding: 40px; /* Espace de remplissage */
            border-radius: 8px;
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.1);
            width: 400px; /* Largeur de la boîte */
        }
        h1 {
            color: #007BFF; /* Couleur bleue */
        }
        p {
            margin-top: 20px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Bienvenue, <?php echo htmlspecialchars($_SESSION['prenom']); ?>!</h1>
        <p>Vous êtes maintenant connecté.</p>
        <p><a href="deconnexion.php">Se déconnecter</a></p>
    </div>
</body>
</html>
