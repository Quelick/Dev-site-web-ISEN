<?php
// Activer les messages d'erreurs pour le débogage
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Connexion à la base de données
$host = "localhost";
$user = "root";
$password = "";
$dbname = "parc_animalier";

$conn = new mysqli($host, $user, $password, $dbname);

// Vérification de la connexion
if ($conn->connect_error) {
    die(json_encode(["error" => "Échec de la connexion : " . $conn->connect_error]));
}

// Déterminer le type de requête
$type = isset($_GET['type']) ? $_GET['type'] : '';

// Récupérer la liste des utilisateurs
if ($type === 'utilisateurs') {
    $sql = "SELECT * FROM utilisateurs";
    $result = $conn->query($sql);
    $utilisateurs = [];

    while ($row = $result->fetch_assoc()) {
        $utilisateurs[] = $row;
    }

    echo json_encode($utilisateurs);
}

// Ajouter un utilisateur
elseif ($type === 'ajouter' && $_SERVER['REQUEST_METHOD'] === 'POST') {
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $age = intval($_POST['age']);
    $email = $_POST['email'];
    $motdepasse = $_POST['motdepasse'];

    $sql = "INSERT INTO utilisateurs (nom, prenom, age, email, motdepasse) VALUES (?, ?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ssiss", $nom, $prenom, $age, $email, $motdepasse);

    if ($stmt->execute()) {
        echo json_encode(["message" => "Utilisateur ajouté avec succès."]);
    } else {
        echo json_encode(["error" => "Erreur lors de l'ajout de l'utilisateur : " . $stmt->error]);
    }
    $stmt->close();
}

// Si aucun type correspondant
else {
    echo json_encode(["error" => "Requête non valide"]);
}

// Fermeture de la connexion
$conn->close();
?>
