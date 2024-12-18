<?php
session_start();

// Vérifiez si l'utilisateur est connecté
if (!isset($_SESSION['user_id'])) {
    header("Location: connexion.php"); // Redirige vers la page de connexion si non connecté
    exit();
}

// Récupérer les informations de l'utilisateur depuis la session
$nom = $_SESSION['nom'];
$prenom = $_SESSION['prenom'];
$age = '';
$email = '';

// Connexion à la base de données
$host = 'localhost'; 
$dbname = 'parc_animalier'; 
$username = 'root'; 
$password = ''; 

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Erreur de connexion : " . $e->getMessage());
}

// Récupérer les détails de l'utilisateur depuis la base de données
$stmt = $pdo->prepare("SELECT age, email FROM utilisateurs WHERE id = ?");
$stmt->execute([$_SESSION['user_id']]);
$utilisateur = $stmt->fetch(PDO::FETCH_ASSOC);

if ($utilisateur) {
    $age = $utilisateur['age'];
    $email = $utilisateur['email'];
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mon Profil</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }
        .container {
            width: 80%;
            margin: 20px auto;
            background: white;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.1);
        }
        h1 {
            color: #333;
        }
        p {
            margin: 10px 0;
        }
        .button-container {
            display: flex;
            gap: 10px;
            margin-top: 20px;
        }
        .button-container a {
            display: inline-block;
            padding: 10px 15px;
            color: white;
            text-decoration: none;
            border-radius: 4px;
        }
        .back-button {
            background-color: #4CAF50; /* Vert pour le bouton de retour */
        }
        .back-button:hover {
            background-color: #45a049;
        }
        .logout-button {
            background-color: #007BFF;
        }
        .logout-button:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Mon Profil</h1>
        <p><strong>Nom:</strong> <?php echo htmlspecialchars($nom); ?></p>
        <p><strong>Prénom:</strong> <?php echo htmlspecialchars($prenom); ?></p>
        <p><strong>Âge:</strong> <?php echo htmlspecialchars($age); ?></p>
        <p><strong>Email:</strong> <?php echo htmlspecialchars($email); ?></p>

        <!-- Boutons de retour et de déconnexion -->
        <div class="button-container">
            <a href="index.php" class="back-button">Retour à l'accueil</a>
            <a href="deconnexion.php" class="logout-button">Se déconnecter</a>
        </div>
    </div>
</body>
</html>
