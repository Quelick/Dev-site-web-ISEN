<?php
session_start();
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
        .logout-button {
            margin: 20px 0;
            padding: 10px 15px;
            background-color: #FF4C4C; /* Rouge pour la déconnexion */
            color: white;
            text-decoration: none;
            border-radius: 4px;
            text-align: center;
            display: inline-block;
        }
        .logout-button:hover {
            background-color: #C0392B; /* Rouge foncé au survol */
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
        <h1>Achat de Billet</h1>
        
        <!-- Bouton de déconnexion -->
        <a href="deconnexion.php" class="logout-button">Déconnexion</a>

        <?php if (isset($_SESSION['user_id'])): ?>
            <!-- Formulaire pour les utilisateurs connectés -->
            <form action="" method="POST">
                <h2>Paiement</h2>
                <p>Vous êtes connecté en tant que <?php echo htmlspecialchars($_SESSION['prenom']) . ' ' . htmlspecialchars($_SESSION['nom']); ?></p>
                
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
                price = 10; // 10$ pour les 10 à 18 ans
            } else {
                price = 15; // 15$ pour les 18 ans et plus
            }

            priceDisplay.innerText = "Montant à payer : " + price + "€";
        }
    </script>
</body>
</html>
