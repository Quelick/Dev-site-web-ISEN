<?php
session_start();
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

// Si l'utilisateur est connecté, récupérer son âge depuis la base de données
$userAge = null;
if (isset($_SESSION['user_id'])) {
    $stmt = $pdo->prepare("SELECT age FROM utilisateurs WHERE id = ?");
    $stmt->execute([$_SESSION['user_id']]);
    $user = $stmt->fetch(PDO::FETCH_ASSOC);
    if ($user) {
        $userAge = $user['age'];
    }
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Achat de Billet</title>
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
        label {
            display: block;
            margin-top: 15px;
        }
        input[type="text"],
        input[type="email"],
        input[type="number"],
        input[type="submit"],
        select {
            width: 100%;
            padding: 10px;
            margin-top: 5px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }
        input[type="submit"] {
            background-color: #007BFF;
            color: white;
            border: none;
            cursor: pointer;
        }
        input[type="submit"]:hover {
            background-color: #0056b3;
        }
        .button-container {
            display: flex;
            gap: 10px;
            margin: 10px 0;
        }
        .back-button, .logout-button, .login-button {
            padding: 10px 15px;
            text-decoration: none;
            color: white;
            border-radius: 4px;
            display: inline-block;
        }
        .back-button {
            background-color: #4CAF50; /* Vert pour le bouton de retour */
        }
        .back-button:hover {
            background-color: #45a049;
        }
        .logout-button {
            background-color: #FF4C4C; /* Rouge pour la déconnexion */
        }
        .logout-button:hover {
            background-color: #C0392B;
        }
        .login-button {
            background-color: #007BFF; /* Bleu pour le bouton de connexion */
        }
        .login-button:hover {
            background-color: #0056b3;
        }
        .price-display {
            margin-top: 20px;
            font-weight: bold;
            color: #333;
        }
    </style>
</head>
<body>
    <div class="container">
        <!-- Boutons de retour, connexion et déconnexion -->
        <div class="button-container">
            <a href="index.php" class="back-button">Retour à l'accueil</a>
            
            <?php if (isset($_SESSION['user_id'])): ?>
                <!-- Bouton de déconnexion pour les utilisateurs connectés -->
                <a href="deconnexion.php" class="logout-button">Déconnexion</a>
            <?php else: ?>
                <!-- Bouton de connexion pour les utilisateurs non connectés -->
                <a href="connexion.php" class="login-button">Connexion</a>
            <?php endif; ?>
        </div>

        <h1>Achat de Billet</h1>

        <?php if (isset($_SESSION['user_id'])): ?>
            <!-- Formulaire pour les utilisateurs connectés -->
            <form action="" method="POST">
                <h2>Paiement</h2>
                <p>Vous êtes connecté en tant que <?php echo htmlspecialchars($_SESSION['prenom']) . ' ' . htmlspecialchars($_SESSION['nom']); ?></p>
                
                <!-- Affichage de l'âge et du prix directement sans champ de saisie pour l'âge -->
                <p>Âge : <?php echo $userAge; ?> ans</p>

                <div class="price-display" id="priceDisplay">
                    <?php
                    $price = 0;
                    if ($userAge < 10) {
                        $price = 0; // Gratuit pour les moins de 10 ans
                    } elseif ($userAge >= 10 && $userAge < 18) {
                        $price = 10; // 10€ pour les 10 à 18 ans
                    } else {
                        $price = 15; // 15€ pour les 18 ans et plus
                    }
                    echo "Montant à payer : " . $price . "€";
                    ?>
                </div>

                <label for="mode_paiement">Mode de paiement :</label>
                <select id="mode_paiement" name="mode_paiement" required>
                    <option value="carte">Carte de crédit</option>
                    <option value="paypal">PayPal</option>
                    <option value="virement">Virement bancaire</option>
                </select>
                
                <input type="submit" value="Payer">
            </form>
        <?php else: ?>
            <!-- Formulaire pour les utilisateurs non connectés -->
            <form action="" method="POST">
                <h2>Informations personnelles</h2>
                <label for="nom">Nom :</label>
                <input type="text" id="nom" name="nom" required>

                <label for="adresse">Adresse :</label>
                <input type="text" id="adresse" name="adresse" required>
                
                <label for="age">Âge :</label>
                <input type="number" id="age" name="age" required min="0" onchange="updatePrice()">

                <div class="price-display" id="priceDisplay"></div>

                <label for="mode_paiement">Mode de paiement :</label>
                <select id="mode_paiement" name="mode_paiement" required>
                    <option value="carte">Carte de crédit</option>
                    <option value="paypal">PayPal</option>
                    <option value="virement">Virement bancaire</option>
                </select>
                
                <input type="submit" value="Payer">
            </form>
        <?php endif; ?>
    </div>

    <script>
        function updatePrice() {
            const age = document.getElementById('age').value;
            const priceDisplay = document.getElementById('priceDisplay');
            let price = 0;

            if (age < 10) {
                price = 0; // Gratuit pour les moins de 10 ans
            } else if (age >= 10 && age < 18) {
                price = 10; // 10€ pour les 10 à 18 ans
            } else {
                price = 15; // 15€ pour les 18 ans et plus
            }

            priceDisplay.innerText = "Montant à payer : " + price + "€";
        }
    </script>
</body>
</html>
