<?php
session_start();
// Traitement de la connexion ici (par exemple, vérification des identifiants)
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Se connecter</title>
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
        }
        .container {
            background: white;
            padding: 40px; /* Espace de remplissage */
            border-radius: 8px;
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.1);
            width: 400px; /* Largeur de la boîte */
            text-align: center; /* Centrage du texte */
        }
        h1 {
            color: #007BFF; /* Couleur bleue */
            margin-bottom: 20px; /* Espace sous le titre */
        }
        label {
            margin-top: 15px; /* Espacement au-dessus des étiquettes */
            display: block;
            text-align: left; /* Alignement à gauche pour les étiquettes */
        }
        input[type="email"],
        input[type="password"] {
            width: 90%; /* Largeur des champs */
            padding: 10px;
            margin: 5px auto 15px; /* Marges automatiques pour le centrage */
            border: 1px solid #ccc;
            border-radius: 4px;
            display: block; /* Affichage en bloc pour centrage */
        }
        input[type="submit"] {
            background-color: #007BFF; /* Couleur bleue */
            color: white;
            border: none;
            padding: 10px;
            border-radius: 4px;
            cursor: pointer;
            width: 100%;
            font-size: 16px; /* Taille de la police */
            margin-top: 10px; /* Espace au-dessus du bouton */
        }
        input[type="submit"]:hover {
            background-color: #0056b3; /* Couleur bleue foncée au survol */
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Se connecter</h1>
        <form action="profil.php" method="POST">
            <label for="email">Email :</label>
            <input type="email" id="email" name="email" required>
            
            <label for="motdepasse">Mot de passe :</label>
            <input type="password" id="motdepasse" name="motdepasse" required>
            
            <input type="submit" value="Se connecter">
        </form>
        <p>Pas encore de compte ? <a href="inscription.php">Créer un profil</a></p>
    </div>
</body>
</html>
