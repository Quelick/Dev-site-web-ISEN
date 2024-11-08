<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Présentation du Parc Animalier</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }
        header {
            background-color: #007BFF;
            color: white;
            padding: 20px;
            text-align: center;
            position: relative; /* Position relative pour le positionnement des boutons */
        }
        .profile-button, .ticket-button {
            position: absolute; /* Position absolue pour les placer en haut à gauche */
            top: 20px; /* Espace depuis le haut */
            left: 20px; /* Espace depuis la gauche */
            padding: 10px 15px;
            background-color: white;
            color: #007BFF;
            text-decoration: none;
            border-radius: 4px;
            border: 2px solid #007BFF; /* Bordure colorée */
            font-weight: bold;
            transition: background-color 0.3s, color 0.3s; /* Effet de transition */
        }
        .profile-button:hover, .ticket-button:hover {
            background-color: #0056b3; /* Changement de couleur au survol */
            color: white; /* Changement de couleur du texte */
        }
        .ticket-button {
            top: 60px; /* Positionnement du bouton d'achat de billet juste en dessous du profil */
        }
        .container {
            width: 80%;
            margin: 20px auto;
            background: white;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.1);
        }
        h1, h2 {
            color: #333;
        }
        .section {
            margin: 20px 0;
        }
        .activities, .contact {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
        }
        .activity {
            flex: 1 1 30%; /* Change the percentage based on your layout preference */
            margin: 10px;
            padding: 15px;
            border: 1px solid #ccc;
            border-radius: 5px;
            background-color: #f9f9f9;
        }
        footer {
            text-align: center;
            padding: 10px;
            background-color: #007BFF;
            color: white;
            position: relative;
            bottom: 0;
            width: 100%;
        }
        img {
            max-width: 100%;
            border-radius: 5px;
        }
    </style>
</head>
<body>
    <header>
        <a href="profil.php" class="profile-button">Mon Profil</a> <!-- Bouton Mon Profil en haut à gauche -->
        <a href="achat_billet.php" class="ticket-button">Achat de Billet</a> <!-- Bouton Achat de Billet -->
        <h1>Bienvenue au Parc Animalier</h1>
        <p>Un lieu unique pour découvrir la faune et la flore.</p>
    </header>
    <div class="container">
        <div class="section">
            <h2>À Propos de Nous</h2>
            <p>Le Parc Animalier est un endroit magique où les visiteurs peuvent explorer la nature et découvrir de nombreuses espèces animales dans un cadre préservé. Que vous soyez un amoureux des animaux, un passionné de la nature ou simplement en quête d'une journée de détente, notre parc est fait pour vous.</p>
            <img src="https://www.parcanimalierlabarben.com/wp-content/uploads/2024/09/PLANS-DU-PARC-2024-WEB-FR-1.jpg" alt="Plan du parc" />
        </div>
        
        <div class="section activities">
            <h2>Nos Activités</h2>
            <div class="activity">
                <h3>Visites Guidées</h3>
                <p>Participez à nos visites guidées pour en apprendre davantage sur nos animaux et leur habitat.</p>
            </div>
            <div class="activity">
                <h3>Ateliers Éducatifs</h3>
                <p>Des ateliers pour les enfants et les adultes pour mieux comprendre la biodiversité.</p>
            </div>
            <div class="activity">
                <h3>Animations Spéciales</h3>
                <p>Venez assister à nos animations et spectacles qui raviront petits et grands.</p>
            </div>
        </div>
        
        <div class="section contact">
            <h2>Contactez-Nous</h2>
            <p>Pour toute question, n'hésitez pas à nous contacter :</p>
            <p>Email : contact@parcanimalier.com</p>
            <p>Téléphone : 01 23 45 67 89</p>
        </div>
    </div>
    <footer>
        <p>&copy; 2024 Parc Animalier. Tous droits réservés.</p>
    </footer>
</body>
</html>
