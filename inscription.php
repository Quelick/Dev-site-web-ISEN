<?php
session_start();

// Connexion à la base de données
$host = 'localhost'; // Changez si nécessaire
$dbname = 'parc_animalier'; // Nom de votre base de données
$username = 'root'; // Remplacez par votre nom d'utilisateur de base de données
$password = ''; // Remplacez par votre mot de passe de base de données

try {
    // Établir la connexion à la base de données
    $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Erreur de connexion : " . $e->getMessage());
}

// Traitement du formulaire
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Récupérer les informations du formulaire
    $nom = htmlspecialchars($_POST['nom']);
    $prenom = htmlspecialchars($_POST['prenom']);
    $age = htmlspecialchars($_POST['age']);
    $email = htmlspecialchars($_POST['email']);
    $motdepasse = $_POST['motdepasse']; // Ne pas hacher le mot de passe

    // Insertion dans la base de données
    try {
        $stmt = $pdo->prepare("INSERT INTO utilisateurs (nom, prenom, age, email, motdepasse) VALUES (?, ?, ?, ?, ?)");
        $stmt->execute([$nom, $prenom, $age, $email, $motdepasse]);

        // Démarrer la session et stocker les informations de l'utilisateur
        $_SESSION['user_id'] = $pdo->lastInsertId(); // ID de l'utilisateur nouvellement créé
        $_SESSION['nom'] = $nom;
        $_SESSION['prenom'] = $prenom;

        // Redirection vers la page de bienvenue
        header("Location: bienvenue.php"); // Redirige vers la page de bienvenue
        exit();
    } catch (PDOException $e) {
        echo "Erreur lors de l'enregistrement : " . $e->getMessage();
    }
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Créer un Profil</title>
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
        input[type="text"],
        input[type="number"],
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
        <h1>Créer un Profil</h1>
        <form action="" method="POST"> <!-- Action vide pour renvoyer au même script -->
            <label for="nom">Nom:</label>
            <input type="text" id="nom" name="nom" required>
            
            <label for="prenom">Prénom:</label>
            <input type="text" id="prenom" name="prenom" required>
            
            <label for="age">Âge:</label>
            <input type="number" id="age" name="age" required>
            
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>
            
            <label for="motdepasse">Mot de passe:</label>
            <input type="password" id="motdepasse" name="motdepasse" required>
            
            <input type="submit" value="Créer Profil">
        </form>
    </div>
</body>
</html>
