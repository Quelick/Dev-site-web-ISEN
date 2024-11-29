<?php 
// Connexion à la base de données
$host = 'localhost';
$dbname = 'parc_animalier';
$username = 'root'; // Remplacez par votre nom d'utilisateur
$password = ''; // Remplacez par votre mot de passe

header('Content-Type: application/json'); // Spécifie que la réponse est en JSON

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo json_encode(["error" => "Erreur de connexion : " . $e->getMessage()]);
    exit;
}

// Récupération de toutes les colonnes de la table "services"
try {
    $stmt = $pdo->query("SELECT * FROM services");
    $services = $stmt->fetchAll(PDO::FETCH_ASSOC);

    if (!$services) {
        echo json_encode(["message" => "Aucun service trouvé."]);
        exit;
    }

    // Retourne les services sous forme de JSON
    echo json_encode($services);
} catch (PDOException $e) {
    echo json_encode(["error" => "Erreur lors de la récupération des données : " . $e->getMessage()]);
    exit;
}
