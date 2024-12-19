<?php
header("Content-Type: application/json");

// Connexion à la base de données
$host = "localhost";
$user = "root";
$password = "";
$dbname = "parc_animalier";
$conn = new mysqli($host, $user, $password, $dbname);

if ($conn->connect_error) {
    echo json_encode(["success" => false, "error" => "Erreur de connexion à la base de données"]);
    exit;
}

// Vérification du type de requête
$type = $_GET['type'] ?? null;

if ($type === 'acheter_billet') {
    $data = json_decode(file_get_contents('php://input'), true);
    $nom = $data['nom'] ?? '';
    $email = $data['email'] ?? '';
    $type_billet = $data['type_billet'] ?? '';
    $quantite = intval($data['quantite'] ?? 0);

    if (empty($nom) || empty($email) || empty($type_billet) || $quantite <= 0) {
        echo json_encode(["success" => false, "error" => "Veuillez remplir tous les champs."]);
        exit;
    }

    $sql = "INSERT INTO billeterie (nom, email, type_billet, quantite) VALUES (?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("sssi", $nom, $email, $type_billet, $quantite);

    if ($stmt->execute()) {
        echo json_encode(["success" => true, "message" => "Billet acheté avec succès."]);
    } else {
        echo json_encode(["success" => false, "error" => "Erreur lors de l'achat : " . $conn->error]);
    }
    $stmt->close();
}

$conn->close();
?>
