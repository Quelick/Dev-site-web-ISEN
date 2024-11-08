<?php
session_start();
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Parc animalier de la Barben</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            text-align: center;
        }
        .container {
            padding: 20px;
        }
        h1 {
            color: #007BFF;
        }
        img {
            width: 80%;
            max-width: 800px;
            margin: 20px 0;
        }
        .button {
            background-color: #007BFF;
            color: white;
            border: none;
            padding: 10px 20px;
            border-radius: 4px;
            cursor: pointer;
            margin: 10px;
            text-decoration: none;
            display: inline-block;
        }
        .button:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Bienvenue au Parc animalier de la Barben</h1>
        <p>Découvrez notre plan interactif pour planifier votre visite :</p>
        <img src="https://www.parcanimalierlabarben.com/wp-content/uploads/2024/09/PLANS-DU-PARC-2024-WEB-FR-1.jpg" alt="Plan du Parc animalier de la Barben">
        <p>Pour accéder à votre espace personnel, veuillez vous connecter ou créer un profil :</p>
        <a href="connexion.php" class="button">Se connecter</a>
        <a href="inscription.php" class="button">Créer un profil</a>
    </div>
</body>
</html>
